#!/bin/bash

VAR=1
VAR=$VAR+1
echo $VAR
RES=$(($VAR))+1
echo $RES
let RES=$RES+1
echo $RES
VAR1=b
echo $(($VAR1+1)) # VAR1 necesita $
