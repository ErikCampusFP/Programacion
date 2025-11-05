import funciones_globales
from tabulate import tabulate
from rich import print as rprint


def marcarPartido_completado (lista):
    partidoCompletado = int(input("Introduce el id del partido a completar: "))
    while True:
        for articulo in lista:
            id = articulo["id"]
            jornada = articulo["Jornada"]
            localID = articulo["Local_id"]
            visitanteId = articulo["Visitante_id"]
            fecha = articulo["Fecha"]
            hora = articulo["Hora"]
            if partidoCompletado == articulo["id"]:
                if articulo["Jugado"] == False:
                    golesLocal = int(input("Introduce los goles marcados por el equipo local: "))
                    while golesLocal <0:
                        print("Numero de goles no valido")
                        golesLocal = int(input("Introduce los goles marcados por el equipo local: "))
                    golesVisitantes = int(input("Introduce los goles marcados por el equipo visitante: "))
                    while golesVisitantes<0:
                        print("Numero de goles no valido")
                        golesVisitantes = int(input("Introduce los goles marcados por el equipo visitante: "))
                    resultado = {"GolesLocal": golesLocal, "GolesVisitantes": golesVisitantes}
                    articulo.clear()
                    articulo.update({"id": id, "Jornada": jornada, "Local_id": localID, "Visitante_id": visitanteId, "Fecha": fecha, "Hora": hora, "Jugado": True, "Resultado": resultado })
                    rprint("Partido completado correctamente")
                    return
                else:
                    print("Partido ya jugado")
                    partidoCompletado = int(input("Introduce el id del partido a completar: "))
        print("Id no valido")
        partidoCompletado = int(input("Introduce el id del partido a completar: "))



def clasificacion(listaEquip, listaPartid):
    partidosJugados = []

    for equipo in listaEquip:
        id_equipo = equipo["id"]
        num_partidos = 0  
        goles_marcados = 0
        goles_contras = 0
        partidosGanados = 0
        partidosPerdidos = 0
        partidoEmpate = 0

        for partido in listaPartid:
            if not partido["Jugado"] or partido["Resultado"] is None:
                continue

# Numero Partidos
            if id_equipo == partido["Local_id"] or id_equipo == partido["Visitante_id"]:
                num_partidos += 1
# Goles Marcados
            if id_equipo == partido["Local_id"]:
                goles_marcados += partido["Resultado"]["GolesLocal"]
            elif id_equipo == partido["Visitante_id"]:
                goles_marcados += partido["Resultado"]["GolesVisitantes"]
# Goles Contra
            if id_equipo == partido["Local_id"]:
                goles_contras += partido["Resultado"]["GolesVisitantes"]
            elif id_equipo == partido["Visitante_id"]:
                goles_contras += partido["Resultado"]["GolesLocal"]

# Partidos Ganados
            if id_equipo == partido["Local_id"] and partido["Resultado"]["GolesLocal"] > partido["Resultado"]["GolesVisitantes"]:
                partidosGanados += 1
            elif id_equipo == partido["Visitante_id"] and partido["Resultado"]["GolesLocal"] < partido["Resultado"]["GolesVisitantes"]:
                partidosGanados += 1

# Partidos Perdidos
            if id_equipo == partido["Local_id"] and partido["Resultado"]["GolesLocal"] < partido["Resultado"]["GolesVisitantes"]:
                partidosPerdidos += 1
            elif id_equipo == partido["Visitante_id"] and partido["Resultado"]["GolesLocal"] > partido["Resultado"]["GolesVisitantes"]:
                partidosPerdidos += 1

# Empate
            if id_equipo == partido["Local_id"] or id_equipo == partido["Visitante_id"]:
                if partido["Resultado"]["GolesLocal"] == partido["Resultado"]["GolesVisitantes"]:
                    partidoEmpate += 1

        equipo= {"id": id_equipo,"PJ": num_partidos, "GF": goles_marcados, "GC": goles_contras, "PTS": {"G": partidosGanados, "P": partidosPerdidos, "E": partidoEmpate}}
        partidosJugados.append(equipo)
    
# Explicado por ChatGPT -- Mostrar de menor a mayor en base a G
    mostrados = [] 
    while len(mostrados) < len(partidosJugados):
        menor = None
        for articulo in partidosJugados:
            if articulo in mostrados:
                continue
            if menor is None or articulo["PTS"]["G"] < menor["PTS"]["G"]:
                menor = articulo

        mostrados.append(menor)
    rprint("Clasificación Equipos")
    rprint(mostrados)
    return mostrados


def estadisticas_porID(lista):
    eleccion = int(input("Escribe el id del equipo a ver el id: "))
    while True:
        for articulos in lista:
            if articulos["id"] == eleccion:
                rprint(articulos)
                return
        rprint("Id no valido")
        eleccion = int(input("Escribe el id del equipo a ver el id: "))
