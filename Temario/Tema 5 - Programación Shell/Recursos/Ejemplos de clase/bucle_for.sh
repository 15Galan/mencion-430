#!/bin/bash

for i in 1 2 3; do
	echo "Iteracion: $i"
done

for file in $(ls $1); do
	echo "Fichero: $file"
done

for i in $(seq $2 1 $3); do
	echo "Iteracion: $i"
done
