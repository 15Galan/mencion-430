#!/bin/bash 

CheckVar () { 
var='Dentro de la funcion'
} 
var='En el script'
echo $var 
CheckVar 
echo $var 

echo Ejemplo usando variables locales

LocalCheckVar () { 
local var='Dentro de la funcion'
} 
var='En el script'
echo $var 
LocalCheckVar 
echo $var 
