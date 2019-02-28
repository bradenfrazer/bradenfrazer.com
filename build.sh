#!/bin/bash

# Build script for serving static content instead of php files
DEST="./public_html"
html=".html"

# Create destination folder
mkdir -p "$DEST/"

# Execute all php files and save them as html
for f in *.php;
do
	php $f | sed 's:\(<a.*href=".*\)\.php\(".*</a>\):\1\.html\2:g' > "$DEST/${f/.php/$html}";
	echo "Processing $f into ${f/.php/$html}..";
done


#Copy all CSS files
for f in *.css;
do
    cat $f > "$DEST/$f";
    echo "Processing $f file..";
done


#Copy all JS files
for f in *.js;
do
    cat $f > "$DEST/$f";
    echo "Processing $f file..";
done

#Copy all images
cp -a ./images/ "$DEST/images"
echo "Processing images..";

#Copy omb folder
cp -a ./omb/ "$DEST/omb"
cp -a ./omb/ "$DEST/tic-tac-toe"
echo "Processing additional folders..";

echo "Process complete." ;
