#!/bin/bash

# Build script for serving static content instead of php files
DEST="./public_html"
html=".html"

# Create destination folder
mkdir -p "$DEST/"
mkdir -p "$DEST/projects/"

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

#Copy all uploads
cp -a ./uploads/ "$DEST/uploads"
echo "Processing uploads..";

#Copy project & resume folders
cp -a ./projects/omb/ "$DEST/projects/omb"
cp -a ./projects/tic-tac-toe/ "$DEST/projects/tic-tac-toe"
cp -a ./projects/lp1/ "$DEST/projects/lp1"
cp -a ./projects/weathrr/ "$DEST/projects/weathrr"
cp -a ./projects/joke-app/ "$DEST/projects/joke-app"
cp -a ./projects/joke-app-vanilla/ "$DEST/projects/joke-app-vanilla"
cp -a ./projects/pokedex/ "$DEST/projects/pokedex"
cp -a ./resume/ "$DEST/resume"
echo "Processing additional folders..";

echo "Process complete." ;
