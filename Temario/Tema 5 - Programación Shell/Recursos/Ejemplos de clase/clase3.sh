#!/bin/bash

Reverse () {
#RES=
for i in $(seq 0 ${#1}); do
	RES="${1:$i:1}$RES"
done
}

Reverse $1
echo $RES
