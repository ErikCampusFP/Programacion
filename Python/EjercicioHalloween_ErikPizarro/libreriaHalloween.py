import random
from rich import print as rprint    
import libreriaHalloween
# Definir Funciones
def generar_monstruo(lista):
    monstruoAleatorio = random.choice(lista)
    return monstruoAleatorio


def calcularPorcentaje_CapturaMonstruo(monstruo):
    minPorcentaje = 0
    MaxPorcentaje = 0

    for nombre, dificultad in monstruo.items():
# Por cada nivel de dificultad, un porcentaje distinto. 
        if dificultad == 1:
            minPorcentaje = 1
            MaxPorcentaje = 5
        elif dificultad == 2:
            minPorcentaje = 1
            MaxPorcentaje = 110
        elif dificultad == 3:
            minPorcentaje = 1
            MaxPorcentaje = 15
        elif dificultad == 4:
            minPorcentaje = 1
            MaxPorcentaje = 20
        else:
            minPorcentaje = 1
            MaxPorcentaje = 25
    porcentajeCaptura = random.randint(minPorcentaje, MaxPorcentaje)
    return porcentajeCaptura


def calcularPorcentajeObjeto(monstruo):
    minPorcentaje = 0
    MaxPorcentaje = 0

    for nombre, dificultad in monstruo.items():
# Por cada nivel de dificultad, un porcentaje distinto. 
        if dificultad == 1:
            minPorcentaje = 1
            MaxPorcentaje = 5
        elif dificultad == 2:
            minPorcentaje = 1
            MaxPorcentaje = 10
        elif dificultad == 3:
            minPorcentaje = 1
            MaxPorcentaje = 15
        elif dificultad == 4:
            minPorcentaje = 1
            MaxPorcentaje = 20
        else:
            minPorcentaje = 1
            MaxPorcentaje = 25
    porcentajeCapturaObjeto = random.randint(minPorcentaje, MaxPorcentaje)
    return porcentajeCapturaObjeto

def funciónHalloween(monstruo, objetos, oportunidades):

    porcentajeCapturaMonstruo = libreriaHalloween.calcularPorcentaje_CapturaMonstruo(monstruo)
    porcentajeCapturaObjeto = libreriaHalloween.calcularPorcentajeObjeto(monstruo)

    
    rprint("Bienvenidos a la caza de Monstruos de Halloween")
    for nombre, dificultad in monstruo.items():
        rprint(f"Un {nombre} ha aparecido con dificultad {dificultad}")

    # Aqui le indicamos que mientras que oportunidades no sea 0, continue con el codigo
    while oportunidades != 0:
        rprint(f"Tienes {oportunidades} intentos todavia")
        rprint(f"Elige un objeto para capturar al {nombre}: {objetos}")
        objetoUsado = input("Escribe el nombre del objeto: ")
        
        # Aquí le decimos que si el objeto que quiere usar no esta en la lista, que le diga al usuario que no va a funcionar
        while objetoUsado not in objetos:
            rprint("Objeto no valido")
            objetoUsado = input("Escribe el nombre del objeto: ")

       # Aquí decimos que si el porcentaje del monstruo es menor que el del objeto, el usuario gane, sino que continue 
        if porcentajeCapturaMonstruo == porcentajeCapturaObjeto:
           print(f"Ganaste, atrapaste al {nombre} con un/a {objetoUsado}")
           return
        else:
            print(f"Fallaste al intentar capturar al {nombre} con un/a {objetoUsado}")
            porcentajeCapturaMonstruo = libreriaHalloween.calcularPorcentaje_CapturaMonstruo(monstruo)
            porcentajeCapturaObjeto = libreriaHalloween.calcularPorcentajeObjeto(monstruo)
            oportunidades -= 1
    # Si el usuario se queda sin visdas, sale el mensaje de que perdio
    print(f"Perdiste, el {nombre} te derroto")