#!/bin/bash 

CONTADOR=0 
while [ $CONTADOR -lt 10 ]; do 
echo El contador while es $CONTADOR 
let CONTADOR=$CONTADOR+1 
done

CONTADOR=0 
until [ $CONTADOR -ge 10 ]; do 
echo El contador until es $CONTADOR 
let CONTADOR=$CONTADOR+1 
done
