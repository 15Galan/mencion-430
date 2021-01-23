#!/bin/bash 

if [ $# -eq 0 ]; then 
	echo Falta el nombre del fichero 
else 
	if [ -f $1 ]; then 
		if [ -x $1 ]; then 
			echo El fichero $1 es ejecutable 
		else 
			echo El fichero $1 NO es ejecutable 
		fi
	else 
		echo El argumento $1 no es un fichero 
	fi 
fi
