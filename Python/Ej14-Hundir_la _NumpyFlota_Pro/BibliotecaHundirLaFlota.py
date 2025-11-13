import random
import numpy as np
from rich import print as rprint

# Genera la posición de los barcos (hay algunas que tienen el rango diferente, ya que sirven para que pueda haber barcos de dos, tres y cuatro casillas)
def generar_posicionBarco1():
    posicionBarco = random.randint(0,19)
    return posicionBarco

def generar_posicion_Y_Barco1():
    posicionBarco = random.randint(0,18)
    return posicionBarco 

def generar_posicion_X_Barco2():
    posicionBarco = random.randint(0,17)
    return posicionBarco

def generar_posicion_Y_Barco3():
    posicionBarco = random.randint(0,16)
    return posicionBarco 


def generar_tablero(posicionXBarco1, posicionYBarco1,posicionXBarco2, posicionYBarco2, posicionXBarco3, posicionYBarco3):
    # Generar Tablero Con los barcos
    tablero = np.arange(1, 401).reshape((20, 20))
    

    # Generar Posición Barco 1
    tablero [posicionXBarco1, posicionYBarco1] = 0
    tablero [posicionXBarco1 , posicionYBarco1 + 1] = 0

    # Generar Posición Barco 2
    while tablero[posicionXBarco2, posicionYBarco2] == 0 or tablero[posicionXBarco2 + 1, posicionYBarco2] == 0 or tablero[posicionXBarco2 + 2, posicionYBarco2] == 0:
        posicionXBarco2 = generar_posicion_X_Barco2()
        posicionYBarco2 = generar_posicionBarco1()

    tablero [posicionXBarco2, posicionYBarco2] = 0
    tablero [posicionXBarco2 + 1 , posicionYBarco2] = 0
    tablero [posicionXBarco2 + 2 , posicionYBarco2] = 0

    # Generar Posición Barco 3
   
    while tablero[posicionXBarco3, posicionYBarco3] == 0 or tablero[posicionXBarco3, posicionYBarco3 + 1] == 0 or tablero[posicionXBarco3, posicionYBarco3 + 2] == 0 or tablero[posicionXBarco3, posicionYBarco3 + 3] == 0: 
        posicionXBarco3 = generar_posicion_Y_Barco3()
        posicionYBarco3 = generar_posicionBarco1()


        

    tablero [posicionXBarco3, posicionYBarco3] = 0
    tablero [posicionXBarco3 , posicionYBarco3 + 1] = 0
    tablero [posicionXBarco3 , posicionYBarco3 + 2] = 0
    tablero [posicionXBarco3 , posicionYBarco3 + 3] = 0
    return tablero

# Genera tablero que ve el usuario 
def generar_Tablero_User():
    # Generar Tableros
    tablero = np.arange(1, 401).reshape((20, 20))
    return(tablero)

    


def juego(tableroOrig, TableroUser, NumeroIntentos, TrozosDestruidos, TrozosFaltantes, menu):
  
    while TrozosFaltantes != 0:

        rprint("Tablero:")
        rprint("---------")

        rprint(TableroUser)
        rprint("-----------------------------------------------------------------------------------")


        rprint("Existe 1 barco de 2 de longitud, otro de 3 de longitud y un ultimo de 4 de longitud")
        rprint("El -1 son el agua que has golpeado y el -2 los barcos que has golpeado")
        rprint("-----------------------------------------------------------------------------------")

        rprint(f"Llevas {NumeroIntentos} intentos, {TrozosDestruidos} trozos destruidos y te faltan {TrozosFaltantes} trozos para ganar")
        rprint("-----------------------------------------------------------------------------------")

        # Pregunta la cordenada X, si es 111 muestra un match case
        posicionX = int(input("Introduce la posición X del tablero (del 0 al 19) (Esribe 111 para acceder al menu de guardado): "))
        if posicionX == 111:
            for i in menu:
                    rprint(i)
            opcion = int(input("Elige una opción: "))
            while opcion != 2:
                match opcion:
                    case 1:
                        rprint("Guardar aun no esta implementado implementado")
                    case 2:
                        opcion = 2
                    case _:
                        rprint("Opción no valida")
                opcion = int(input("Elige una opción: "))
            posicionX = int(input("Introduce la posición X del tablero (del 0 al 19): "))

        # Si es un numero mayor a 19 y menor a 0, muestra un mensaje diciendo que no es valido y pregunta otra vez la cordenada
        while posicionX < 0 or posicionX > 19:
            rprint("Posición no valida")
            posicionX = int(input("Introduce la posición X del tablero (del 0 al 19): "))
        
         # Pregunta la cordenada Y, y si es un numero mayor a 19 y menor a 0, muestra un mensaje diciendo que no es valido y pregunta otra vez la cordenada

        posicionY = int(input("Introduce la posición Y del tablero (del 0 al 19): "))
        while posicionY < 0 or posicionY > 19:
            rprint("Posición no valida")
            posicionY = int(input("Introduce la posición Y del tablero (del 0 al 19): "))
        
        # Comprueba las cordenadas dadas con el tablero
        # Si es -1 o -2 muestra que las cordenadas ya se habian dado
        if TableroUser[posicionX, posicionY] == -1 or TableroUser[posicionX, posicionY] == -2:
            rprint("Posición ya seleccionada")
            input("Pulsa Cualquier botón para continuar")

        # Si no es 0 muestra que es agua
        elif tableroOrig[posicionX, posicionY] != 0:
                rprint("Agua")
                NumeroIntentos += 1
                TableroUser[posicionX,posicionY] = -1
                input("Pulsa Cualquier botón para continuar")

        # Si es 0, muestra que es un barco 
        else:
                rprint("Barco Golpeado")
                NumeroIntentos += 1
                TrozosDestruidos += 1
                TrozosFaltantes -= 1
                TableroUser[posicionX,posicionY] = -2
                input("Pulsa Cualquier botón para continuar")
    
    # Una vez TrozosFaltantes == 0, muetra un mensaje de victoria con los intentos realizados
    rprint("-----------------------------------------------------------------------------------")
    rprint(f"¡¡¡¡¡Felicidades Ganaste con {NumeroIntentos} intentos!!!!!")