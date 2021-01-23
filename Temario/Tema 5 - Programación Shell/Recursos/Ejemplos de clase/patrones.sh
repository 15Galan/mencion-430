#!/bin/bash

TEXT="ASO 1 ASO2021 ASODECEMBER"
echo ${TEXT%A*}
echo ${TEXT%%A*}

FICH=/usr/bin/aso
echo ${FICH#*/}
echo ${FICH##*/}

echo ${TEXT:6:8}
