const path = require('path');
const CleanWebpackPlugin = require('clean-webpack-plugin');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const webpack = require('webpack');
const extractPlugin = new ExtractTextPlugin({
  filename: './assets/css/app.css'
});

const config = {
 	context: path.resolve(__dirname, 'src'),
 	entry: {
    	// removing 'src' directory from entry point, since 'context' is taking care of that
    	app: './app.js'
  	},
  	output: {
   		path: path.resolve(__dirname, 'dist'),
    	filename: './assets/js/[name].bundle.js'
  	},
  	module: {
		rules: [
			{
				test: /\.js$/,
				include: /src/,
				exclude: /node_modules/,
				use: {
					loader: "babel-loader",
					options: {
						presets: ['env']
					}
				}
			},
			{
				test: /\.html$/,
				use: ['html-loader']
			},
			{
				test: /\.scss$/,
				include: [path.resolve(__dirname, 'src', 'assets', 'scss')],
				use: extractPlugin.extract({
					use: [
						{
							loader: 'css-loader',
							options: {
								url : false
							  	// sourceMap: true
							}
						},
						{
							loader: 'sass-loader',
							options: {
								url : false
							  // sourceMap: true
							}
						}
					],
					fallback: 'style-loader'
				})
			},
			{
				test: /\.(jpg|png|gif|svg)$/,
				use: [
					{
						loader: 'url-loader',
						options: {
							name: '[name].[ext]',
							outputPath: './assets/media/',
							limit: 8000
						}
					}
				]
			},
			{
				test: /\.(woff|woff2|eot|ttf|otf)$/,
				use: ['file-loader']
			},
			{
			  test: /\.mp4$/,
			  loader: 'file',
			},
		]
	},
  	plugins: [
		new CleanWebpackPlugin(['dist']),
		new HtmlWebpackPlugin({
			template: 'index.html'
		}),
		new HtmlWebpackPlugin({
			template: 'playbook.html',
			filename: 'playbook.html'
		}),
		new HtmlWebpackPlugin({
			template: 'flying-fergus.html',
			filename: 'flying-fergus.html'
		}),
		new HtmlWebpackPlugin({
			template: 'snowman-game.html',
			filename: 'snowman-game.html'
		}),
		new HtmlWebpackPlugin({
			template: 'mckenna.html',
			filename: 'mckenna.html'
		}),
		new HtmlWebpackPlugin({
			template: 'apollo.html',
			filename: 'apollo.html'
		}),
		new HtmlWebpackPlugin({
			template: 'inspiring-people.html',
			filename: 'inspiring-people.html'
		}),
		new HtmlWebpackPlugin({
			template: 'verve.html',
			filename: 'verve.html'
		}),
		new HtmlWebpackPlugin({
			template: 'hodder-staunton.html',
			filename: 'hodder-staunton.html'
		}),
		// new HtmlWebpackPlugin({
		// 	template: '.html',
		// 	filename: '.html'
		// }),

		extractPlugin
	],
  	devServer: {
  		contentBase: path.resolve(__dirname, "./dist/"),
		compress: true,
		port: 12000,
		stats: 'errors-only',
		open: true,
		// hot: true
  	},
  	devtool: 'inline-source-map'
};

module.exports = config;
