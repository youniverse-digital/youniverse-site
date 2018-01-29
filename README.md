# youniverse-site

- uses parcel bundler https://parceljs.org/

## dev

- cd to the folder 'youniverse-site' and run

npm install -g parcel-bundler

npm init -y

- then run

parcel src/index.html

to develop that page on localhost:1234

at the moment parcel handles html in a weird way... so you need to develop each page seperately... e.g. parcel src/my-other-page.html

this should be changed soon by the parcel team, if not we can switch to webpack instead

## production

parcel build src/index.html --public-url http://ydlstaging.co.uk/ydl_encore/

	-- OR --

parcel build src/index.html --public-url http://youniverse.com

then upload the contents of dist to the server