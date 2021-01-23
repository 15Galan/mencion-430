#!/bin/bash

unset VAR
echo 1: ${VAR:-1}
VAR=2
echo 2: ${VAR:+3}
unset VAR # eliminamos la variable VAR
echo 3: ${VAR:=4}
echo 4: $VAR
unset VAR
${VAR:?variable no declarada}
echo Adios
