import funciones_globales
from tabulate import tabulate
from rich import print as rprint

def añadir_jugador (id,lista,lista_Equipo,jugador):
    Nombre = int(input("Introduce el nombre del jugador: "))
    while Nombre == "":
        rprint("Nombre no valido")
        Nombre = input("Introduce el nombre del jugador: ")

    Posicion = input("Introduce la posición del jugador: ")
    while Posicion == "":
        rprint("Posición no valida")
        Posicion = input("Introduce la posición del jugador: ")
    id_equipo = int(input("Introduce el id del equipo al que pertenece: "))
    while True:
        for i in lista_Equipo:
            if i["id"] == id_equipo:
                if i["esta_activo"] == True:
                    jugador = {"id": id, "Nombre": Nombre, "Posicion": Posicion, "equipo_id": id_equipo, "esta_activo": True}
                    lista.append(jugador)
                    rprint("Jugador Añadido correctamente")
                    return
                rprint("Equipo no valido")
                id_equipo = int(input("Introduce el id del equipo al que pertenece: "))
        rprint("Equipo no existente")
        id_equipo = int(input("Introduce el id del equipo al que pertenece: "))
       

        

def mostrar_jugadores(lista, lista2):
    eleccion = int(input("Escribe 1 para ver todos los jugadores activos o 2 para listar por equipo: "))
    if eleccion == 1:
        lista2 = []
        numEquipos = 0
        for articulo in lista:
            if articulo["esta_activo"] == True:
                numEquipos +=1
                lista2.append(articulo)
        if numEquipos == 0:
            print("No hay jugadores disponibles")
        else:
            rprint("Estos son los jugadores: ")
            rprint (lista2)
    
    elif eleccion == 2:
        id_equipo = int(input("Introduce el id del equipo: "))
        lista3 = []
        numeroJugadores = 0
        for articulo in lista2:
            if articulo["id"] == id_equipo:
                nombreEquipo = articulo["Nombre"]
        for articulo in lista:
            if articulo["equipo_id"] == id_equipo:
                lista3.append(articulo)
                numeroJugadores +=1
        if numeroJugadores == 0:
            rprint("Equipo sin jugadores")
        else:
            rprint(f"Estos son los jugadores de {nombreEquipo}")
            rprint(lista3)

    else:
        rprint("Opción no valida")
        eleccion = int(input("Escribe 1 para ver todos los jugadores activos o 2 para listar por equipo: "))

def buscar_jugador (lista):
    id = int(input("Introduce el id del jugador al que buscas: "))
    while True:
        for articulo in lista:
             if articulo["id"] == id:
                rprint(articulo)
                return
        rprint("No existe el usuario que buscas")
        id = int(input("Introduce el id del jugador al que buscas: "))
    
def actualizar_jugador (lista, listaEquipo):
    idJugador = int(input("Introduce el id del jugador al que quieres actualizar: "))
    while True:
        for articulo in lista:
            if articulo["id"] == idJugador:
                nuevoNombre = input("Introduce el nuevo nombre (o igual si quieres mantenerlo): ")
                if nuevoNombre == "igual":
                    nuevoNombre = articulo["Nombre"]
                nuevaPosicion = input("Introduce la nueva posición (o igual si quieres mantenerlo): ")
                if nuevaPosicion == "igual":
                    nuevaPosicion = articulo["Posicion"]
                nuevoEstado = int(input("Introduce 1 si quiere cambiar a activo o 2 si lo quiere cambiar a inactivo: "))
                if nuevoEstado == 1:
                    nuevoEstado = True
                elif nuevoEstado == 2:
                    nuevoEstado= False

                
                nuevoIdEquipo = int(input("Introduce el nuevo id de equipo del jugador (o -1 para mantenerlo igual): "))
                if nuevoIdEquipo == -1:
                    nuevoIdEquipo = articulo["equipo_id"]        
                    articulo.clear()
                    articulo.update ({"id": idJugador, "Nombre": nuevoNombre, "Posicion": nuevaPosicion, "equipo_id": nuevoIdEquipo, "esta_activo": nuevoEstado })
                    rprint("Equipo actualizado correctamente")
                    return        
                else:
                    while True:
                        for articulo2 in listaEquipo:
                            while nuevoIdEquipo == articulo2["id"]:
                                articulo.clear()
                                articulo.update ({"id": idJugador, "Nombre": nuevoNombre, "Posicion": nuevaPosicion, "equipo_id": nuevoIdEquipo, "esta_activo": nuevoEstado })
                                rprint("Equipo actualizado correctamente")
                                return
                        print("Equipo no existente") 
                        nuevoIdEquipo = int(input("Introduce el nuevo id de equipo del jugador (o igual para mantenerlo igual): "))
                                                 
        rprint("Equipo no existente")
        idJugador = int(input("Introduce el id del jugador al que quieres actualizar: "))


def eliminar_Jugador(lista):
    idJugador = int(input("Introduce el id del jugador al que quieres actualizar: "))
    while True:
        for articulo in lista:
            if articulo["id"] == idJugador:
                if articulo["esta_activo"] == True:
                    articulo.update({"esta_activo": False})
                    rprint("Jugador eliminado correctamente")
                    return
                else:
                    rprint("Jugador ya eliminado")
                    return
        rprint("Jugador no existente")
        idJugador = int(input("Introduce el id del equipo al que quieres actualizar: "))