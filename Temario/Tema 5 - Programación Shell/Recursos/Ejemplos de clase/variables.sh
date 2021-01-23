#!/bin/bash 

VAR = 1
VAR=1
declare -i var=3

echo "Variables: $VAR $var"
VAR=$VAR+1 
var=var+1 
echo "Variables: $VAR $var"
echo "Variable VAR seguida de 1 (requiere llaves): ${VAR}1"
echo 'Comillas simples: $VAR'
echo "Valor: $VAR-1"
