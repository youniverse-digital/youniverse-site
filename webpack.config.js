const path = require('path');
const CleanWebpackPlugin = require('clean-webpack-plugin');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const webpack = require('webpack');
const extractPlugin = new ExtractTextPlugin({
  filename: './assets/css/app.css'
});
const DashboardPlugin = require('webpack-dashboard/plugin');

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
				use: [
					{
						loader: 'babel-loader',
						options: {
							presets: ['es2016']
						}
					},
					{
						loader: 'imports-loader?define=>false' 
					}
				]
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
							limit: 10000
						}
					}
				]
			},
			{
				test: /\.(woff|woff2|eot|ttf|otf)$/,
				use: [
					{
						loader: 'url-loader',
						options: {
							name: './assets/fonts/[name].[ext]'
						}
					}
				]
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
			template: 'single-work.html',
			filename: 'single-work.html'
		}),
		new HtmlWebpackPlugin({
			template: 'about.html',
			filename: 'about.html'
		}),
		new DashboardPlugin(),
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
