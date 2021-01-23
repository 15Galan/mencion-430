#!/bin/bash

suma () {
	RES=$(($1+$2))
	echo "Suma: $RES"
	return $RES
}
suma 2 3
suma $1 $2 #suma los 2 primeros argumentos pasados al script
echo "Valor devuelto de la ultima suma: " $?
echo "El resultado de la variable RES es: $RES"
