#!/bin/sh

echo El directorio $1 tiene $(find $1 -type d | wc -l) directorios 
echo Y $(find $1 -type f | wc -l) ficheros 
file $(find $1 -name "*.sh" -type f)
find $1 -name "*.sh" -type f | xargs file
