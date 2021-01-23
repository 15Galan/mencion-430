#!/bin/bash


# Definición de la función
# sumarDivisores () {
#     let suma=0
    
#     for i in $(seq 1 1 $(($1-1))); do
#         if [ $(($1%$i)) -eq 0 ]; then
#             suma=$((suma+$i))
#         fi
#     done
    
#     echo $suma
    
#     return $suma
# }



# Inicio del script

# Inicializar variables
let k=$1    # int
let s=0     # int
let c=0     # int
res=""      # string

# Mostrar información
echo "El término k es: "$k
echo "La sucesión alicuota es:"

# Cálculo
while [ $k -ne 1 ] && [ $c -le 10 ]; do
    for i in $(seq 1 1 $(($k-1))); do
        if [ $(($k%$i)) -eq 0 ]; then
            s=$((s+$i))
        fi
    done
    
    if [ $s -eq $k ] || [ $c -eq 10 ]; then
        res=$res" Infinita"
        c=100
        
    else
        # Alamacenar resultado
        res=$res" "$s
        
        # Actualizar variables
        k=$s
        s=0
        c=$((c+1))
    fi
done

echo $res

