#!/bin/bash


if [ $# -eq 0 ]; then 
    echo Falta el nombre del fichero 
    return 1
fi

if [ ! -d $1 ]; then
 echo Es necesario un directorio
 return 2
fi


ficheros=$(ls -1 $1)
for fichero in $ficheros 
do   
  path_fichero="$1/$fichero"   
  if [ -x $path_fichero ]; then      
    echo  $path_fichero   
  fi 
done
