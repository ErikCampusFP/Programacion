import funciones_globales
from tabulate import tabulate
from rich import print as rprint


def crear_equipo(equipo, lista, id):
    Nombre = input("Introduce el nombre del equipo: ")
    while Nombre == "":
        rprint("Nombre no valido")
        Nombre = input("Introduce el nombre del equipo: ")

    Ciudad = input("Introduce el nombre de la ciudad: ")
    while Ciudad == "":
        rprint("Ciudad no valida")
        Ciudad = input("Introduce el nombre de la ciudad: ")
    
    equipo = {"id": id, "Nombre": Nombre, "Ciudad": Ciudad, "esta_activo": True}
    lista.append(equipo)
    rprint("Equipo creado correctamente")


def mostrar_equipos (lista):
    lista2 = []
    numEquipos = 0
    rprint("Estos son los equipos: ")
    for articulo in lista:
        if articulo["esta_activo"] == True:
            numEquipos +=1
            lista2.append(articulo)
    if numEquipos == 0:
        rprint("No hay equipos disponibles")
    else:
        rprint (lista2)


def buscar_equipo (lista):
    id = int(input("Introduce el id del equipo al que buscas: "))
    while True:
        for articulo in lista:
             if articulo["id"] == id:
                rprint(articulo)
                return
        rprint("No existe el equipo que buscas")
        id = int(input("Introduce el id del equipo al que buscas: "))

def  modificar_equipo(lista):
    idEquipo = int(input("Introduce el id del equipo al que quieres actualizar: "))
    while True:
        for articulo in lista:
            if articulo["id"] == idEquipo:
                nuevoNombre = input("Introduce el nuevo nombre (o igual si quieres mantenerlo): ")
                if nuevoNombre == "igual":
                    nuevoNombre = articulo["Nombre"]
                nuevaCiudad = input("Introduce el nombre de la nueva ciudad (o igual si quieres mantenerlo): ")
                if nuevaCiudad == "igual":
                    nuevaCiudad = articulo["Ciudad"]
                nuevoEstado = int(input("Introduce 1 si quiere cambiar a activo o 2 si lo quiere cambiar a inactivo: "))
                if nuevoEstado == 1:
                    nuevoEstado = True
                elif nuevoEstado == 2:
                    nuevoEstado= False
                else:
                    rprint("Opción no valida")
                    nuevoEstado = int(input("Introduce 1 si quiere cambiar a activo o 2 si lo quiere cambiar a inactivo: "))
                articulo.clear()
                articulo.update ({"id": idEquipo, "Nombre": nuevoNombre, "Ciudad": nuevaCiudad, "esta_activo": nuevoEstado })
                rprint("Equipo actualizado correctamente")
                return
        rprint("Equipo no existente")
        idEquipo = int(input("Introduce el id del equipo al que quieres actualizar: "))

def eliminar_Equipo(lista):
    idEquipo = int(input("Introduce el id del equipo al que quieres actualizar: "))
    while True:
        for articulo in lista:
            if articulo["id"] == idEquipo:
                if articulo["esta_activo"] == True:
                    articulo.update({"esta_activo": False})
                    rprint("Equipo eliminado correctamente")
                    return
                else:
                    rprint("Equipo ya eliminado")
                    return
        rprint("Equipo no existente")
        idEquipo = int(input("Introduce el id del equipo al que quieres actualizar: "))
