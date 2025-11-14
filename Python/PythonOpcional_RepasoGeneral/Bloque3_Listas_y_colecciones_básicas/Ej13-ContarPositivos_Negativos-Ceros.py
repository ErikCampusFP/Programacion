# Ejercicio 13. Contar positivos y negativos
# Pide 6 números y guarda cada uno en una lista.
#  Cuenta cuántos son positivos, negativos y ceros.
#  Muestra los tres totales.
# --------------------------------------------------------------------------

lista = []
conteoNumeros = 0

conteoPositivo = 0
conteoNegativo = 0
coteoCeros = 0

# Pedimos los numeros solicitados
while conteoNumeros != 6:
    numero = int(input("Introduce un numero: "))
    lista.append(numero)
    conteoNumeros +=1

# Comprobamos si es positivo, negativo o 0
for i in lista:
    if i > 0:
        conteoPositivo +=1
    elif i < 0:
        conteoNegativo +=1
    else:
        coteoCeros +=1

# Mostramos el resultado de cuantas veces han aparecido un numero positivo, negativo y un 0
print(f"El numero de numeros positivos dados es {conteoPositivo}")
print(f"El numero de numeros negativos dados es {conteoNegativo}")
print(f"El numero de 0 dados es {coteoCeros}")
