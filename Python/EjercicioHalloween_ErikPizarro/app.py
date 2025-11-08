import random
from rich import print as rprint    
import libreriaHalloween

# Definir Variables
monstruos = [{"Vampiro": 3}, {"Momia": 2}, {"Bruja": 4}, {"Esqueleto": 1}, {"Fantasma": 5}]
objetos = ["Estaca", "Poción Magica", "Hechizo"]
oportunidades = 3


# Desarrollo de la lógica del código
monstruoAleatorio = libreriaHalloween.generar_monstruo(monstruos)
porcentajeCapturaMonstruo = libreriaHalloween.calcularPorcentaje_CapturaMonstruo(monstruoAleatorio)
porcentajeCapturaObjeto = libreriaHalloween.calcularPorcentajeObjeto(monstruoAleatorio)

libreriaHalloween.funciónHalloween(monstruoAleatorio, objetos, oportunidades)
