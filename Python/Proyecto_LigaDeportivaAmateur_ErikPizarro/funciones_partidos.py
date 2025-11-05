import funciones_globales
from tabulate import tabulate
from rich import print as rprint

def crear_partido (equipo, lista, id, listaId):
    jornada = int(input("Introduce el numero de la jornada: "))
    local_id = int(input("Introduce el id del equipo local: "))
    while True:
        for articulo in listaId:
            if local_id == articulo["id"]:
                visitante_id = int(input("Introduce el id del equipo visitante: "))
                while True:
                    for articulo in listaId:
                        if visitante_id == articulo["id"] and visitante_id != local_id:
                            fecha = input("Introduce la fecha del partido (formato: DD/MM/AAAA): ")
                            hora = input("Introduce la hora del partido (formato: HH:MM): ")
                            equipo = {"id": id, "Jornada": jornada, "Local_id": local_id, "Visitante_id": visitante_id, "Fecha": fecha, "Hora": hora, "Jugado": False, "Resultado": None}
                            lista.append(equipo)
                            rprint("Partido Creado Correctamente")
                            return
                    rprint("Equipo no valido")
                    visitante_id = int(input("Introduce el id del equipo visitante: "))
        rprint("Id no existente")
        local_id = int(input("Introduce el id del equipo local: "))


def listar_partidos(lista, lista2):
    eleccion = int(input("Escribe 1 para ver todos los partidos activos o 2 para listar por jornada: "))
    if eleccion == 1:
        rprint("Estos son los partidos")
        for articulo in lista:
            for articulo2 in lista2:
                if articulo["Local_id"] == articulo2["id"]:
                    nombreLocal = articulo2["Nombre"]
                if articulo["Visitante_id"] == articulo2["id"]:
                    nombreVisitante = articulo2["Nombre"]
            rprint(f"{nombreLocal} vs {nombreVisitante}")
            rprint(articulo)
    
    if eleccion == 2:
        jornada = int(input("Introduce el número de jornada: "))
        partidos_en_jornada = []
        num = 0
        
        for articulo in lista:
            if jornada == articulo["Jornada"]:
                for articulo2 in lista2:
                    if articulo["Local_id"] == articulo2["id"]:
                        nombreLocal = articulo2["Nombre"]
                    if articulo["Visitante_id"] == articulo2["id"]:
                        nombreVisitante = articulo2["Nombre"]
                partidos_en_jornada.append((f"{nombreLocal} vs {nombreVisitante}", articulo))
                num += 1
        if num != 0:
            for articulo in partidos_en_jornada:
                rprint(articulo)
        else:
            rprint("No hay partidos en esta jornada")
            
        
def reprograma_partido(lista):
    partidoCambiar = int(input("Introduce el id del partido a reprogramar: "))
    while True:
        for articulo in lista:
            id = articulo["id"]
            jornada = articulo["Jornada"]
            localID = articulo["Local_id"]
            visitanteId = articulo["Visitante_id"]
            jugado = articulo["Jugado"]
            resultado = articulo["Jugado"]
            if partidoCambiar == articulo["id"]:
                if articulo["Jugado"] == False:
                    nuevaFecha = input("Introduce la fecha del partido (formato: DD/MM/AAAA): ")
                    nuevaHora = input("Introduce la hora del partido (formato: HH:MM): ")
                    articulo.clear()
                    articulo.update({"id": id, "Jornada": jornada, "Local_id": localID, "Visitante_id": visitanteId, "Fecha": nuevaFecha, "Hora": nuevaHora, "Jugado": jugado, "Resultado": resultado})
                    print("Partido reprogramado exitosamente")
                    return
                else:
                    print("Partido ya jugado")
                    return
        print("Id no valido")
        partidoCambiar = int(input("Introduce el id del partido a reprogramar: "))


def eliminar_partido(lista):
    partidoEliminar = int(input("Introduce el id del partido a eliminar: "))
    while True:
        for articulo in lista:
            if partidoEliminar == articulo["id"]:
                if articulo["Jugado"] == False:
                    lista.remove(articulo)
                    print("Partido Eliminado Correctamente")
                    return
                else:
                    print("Partido ya jugado")
                    return
        print("Id no valido")
        partidoEliminar = int(input("Introduce el id del partido a eliminar: "))
