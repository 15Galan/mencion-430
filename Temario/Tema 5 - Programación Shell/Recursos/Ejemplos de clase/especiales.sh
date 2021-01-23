#!/bin/bash 

IFS=','
echo "El script $0 con PID $$ recibe $# argumentos: $*" 
echo "El script $0 con PID $$ recibe $# argumentos: $@" 
echo "El ultimo proceso puesto en segundo plano es $!"
echo "El ultimo valor devuelto es $?"
