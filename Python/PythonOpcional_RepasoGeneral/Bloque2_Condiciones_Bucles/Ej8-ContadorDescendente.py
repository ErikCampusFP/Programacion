# Ejercicio 8. Contador descendente
# Pide un número n y muestra los números desde n hasta 1 usando un bucle while.
# --------------------------------------------------------------------------

# Solicita el numero que sera el principi del bucle
numero = int(input("Introduce el numero del principio de la cuenta: "))

# Genera y muestra el bucle
while numero != 0:
    print(numero)
    numero -= 1