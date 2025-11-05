from tabulate import tabulate
from rich import print as rprint



def mostrar_menu(menu):
    rprint(tabulate(menu))
    eleccion = int(input("Introduce tu elección: "))
    return eleccion

def generar_id(id):
    id = id + 1
    return(id)