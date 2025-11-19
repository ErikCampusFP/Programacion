import numpy as np
import BibliotecaHundirLaFlota
from rich import print as rprint
import random

# Comprobar si hay partida guardada:
archivo = "partida_comenzada.txt"
menu = ["1. Guardar", "2. Salir" ]
guardado = False



# Supongamos que el archivo se llama "partida_comenzada.txt"

# Este try lo usamops para que si no encuentre el archivo guardado, haga como si estuviese vacio
try:
    with open('partida_comenzada.txt', 'rb') as f:
        contenido = f.read()
        if contenido:
            guardado = True
        else:
            guardado = False

except FileNotFoundError:
    guardado = False

# Si existe guardado, usamos los datos almacenados, sino generamos nuevos.
if guardado == True:
    numeroIntentos, trozosDestruidos, trozosFaltantes, TableroOriginal, TableroUser = BibliotecaHundirLaFlota.cargar_partida() # Nota: Si lo pongo uno por uno, no funciona
    rprint("Partida cargada desde partida_comenzada.txt")
else:

# Definir Variables

    numeroIntentos = 0
    trozosDestruidos  = 0
    trozosFaltantes = 9


    posicionXBarco1 = BibliotecaHundirLaFlota.generar_posicionBarco1()
    posicionYBarco1 = BibliotecaHundirLaFlota.generar_posicion_Y_Barco1()

    posicionXBarco2 = BibliotecaHundirLaFlota.generar_posicion_X_Barco2()
    posicionYBarco2 = BibliotecaHundirLaFlota.generar_posicionBarco1()

    posicionXBarco3 = BibliotecaHundirLaFlota.generar_posicionBarco1()
    posicionYBarco3 = BibliotecaHundirLaFlota.generar_posicion_Y_Barco3()

    # Genera el tablero que posee los barcos
    TableroOriginal = BibliotecaHundirLaFlota.generar_tablero(posicionXBarco1, posicionYBarco1, posicionXBarco2, posicionYBarco2, posicionXBarco3, posicionYBarco3)

    # Genera el tablero que ve el usuario
    TableroUser  = BibliotecaHundirLaFlota.generar_Tablero_User()


# Desarrollo de la lógica del código
rprint("Bienvenido a Hundir La Flota")
rprint("-----------------------------------------------------------------------------------")



# Es la función que realiza todo el juego
BibliotecaHundirLaFlota.juego(TableroOriginal, TableroUser, numeroIntentos, trozosDestruidos, trozosFaltantes, menu, archivo, guardado)
