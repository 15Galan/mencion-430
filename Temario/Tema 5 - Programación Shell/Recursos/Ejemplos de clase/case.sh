#!/bin/bash

case $1 in
    texto.txt)
        echo Prueba case correcta!  ;;
    *.c)
        echo Fichero C ;;
    *)
        echo Default. Pruebe otro
esac

