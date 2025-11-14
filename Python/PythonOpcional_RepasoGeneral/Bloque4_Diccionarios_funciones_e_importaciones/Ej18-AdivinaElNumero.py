# Ejercicio 18. Juego: adivina el número
# Usa la librería random.
#  Genera un número aleatorio entre 1 y 10.
#  Pide al usuario que adivine el número y da pistas (“más alto” o “más bajo”) hasta acertar.
# --------------------------------------------------------------------------

import random

# Genera el numero
numero = random.randint(1, 10)
acertado = False

# Pide un numero al usuario y comprueba si es mayor, menor o igual que el random
while acertado != True:
    eleccion = int(input("Introduce un numero: "))
    if eleccion < numero:
        print("Es un numero mayor")
    elif eleccion > numero:
        print("Es un numero menor")
    else:
        print("Has acertado el numero, felicidades")
        acertado = True