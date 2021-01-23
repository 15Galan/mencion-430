#!/bin/bash 

if [ $# -eq 0 ]; then 
   echo Faltan argumentos! 
   return 1

elif [ ! -d $1 ]; then 
   echo No es un directorio 
   return 2
elif [ $1 = $PWD -o ! -x $1 ]; then 
   echo Es el directorio actual o no hay permisos de busqueda 
   return 3
else
   cd $1
fi
