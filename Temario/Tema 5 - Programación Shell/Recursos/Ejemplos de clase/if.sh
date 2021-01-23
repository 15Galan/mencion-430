#!/bin/bash 

if [ -f $1 ]; then 
	echo el fichero $1 existe 
else 
	echo fichero no encontrado 
fi
