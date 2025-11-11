import numpy as np
import BibliotecaHundirLaFlota
from rich import print as rprint
import random

# Definir Variables

numeroIntentos = 0
trozosDestruidos  = 0
trozosFaltantes = 9
menu = ["1. Guardar", "2. Salir" ]

posicionXBarco1 = BibliotecaHundirLaFlota.generar_posicionBarco1()
posicionYBarco1 = BibliotecaHundirLaFlota.generar_posicion_Y_Barco1()

posicionXBarco2 = BibliotecaHundirLaFlota.generar_posicion_X_Barco2()
posicionYBarco2 = BibliotecaHundirLaFlota.generar_posicionBarco1()

posicionXBarco3 = BibliotecaHundirLaFlota.generar_posicionBarco1()
posicionYBarco3 = BibliotecaHundirLaFlota.generar_posicion_Y_Barco3()


# Desarrollo de la lógica del código
rprint("Bienvenido a Hundir La Flota")
rprint("-----------------------------------------------------------------------------------")

# Genera el tablero que posee los barcos
TableroOriginal = BibliotecaHundirLaFlota.generar_tablero(posicionXBarco1, posicionYBarco1, posicionXBarco2, posicionYBarco2, posicionXBarco3, posicionYBarco3)

# Genera el tablero que ve el usuario
TableroUser  = BibliotecaHundirLaFlota.generar_Tablero_User()

# Es la función que realiza todo el juego
BibliotecaHundirLaFlota.juego(TableroOriginal, TableroUser, numeroIntentos, trozosDestruidos, trozosFaltantes, menu)