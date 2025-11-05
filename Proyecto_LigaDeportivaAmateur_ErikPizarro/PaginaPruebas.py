import funciones_globales
import funciones_equipo
import funciones_jugadores
import funciones_Resultados
import tabulate
import funciones_partidos
from rich import print as rprint

# Definimos Variables
################################################### Variable Menu General #############################################################################
menuApp = [["1. Gestión de equipos"], ["2. Gestión de jugadores"], ["3. Calendario de partidos"], ["4. Resultados y clasificación"], ["5. Salir"]]

################################################### Variable MÓDULO 1 — Gestión de equipos #############################################################

menuEquipos = [["1. Crear equipo"], ["2. Listar equipos"], ["3. Buscar equipo"], ["4. Actualizar equipo"], ["5. Cambiar estado de un equipo a inactivo"], ["6. Salir"]]
idEquipo = 0
equipo = {}
lista_equipos = [ {'id': 0, 'Nombre': 'GetafeFC', 'Ciudad': 'Getafe', 'esta_activo': True}, {'id': -5, 'Nombre': 'MadridCF', 'Ciudad': 'Getafe', 'esta_activo': False}, {'id': -4, 'Nombre': 'EspañaFC', 'Ciudad': 'Getafe', 'esta_activo': False}]

################################################### Variable MÓDULO 2 — Gestión de jugadores #############################################################
menuJugadores = [["1. Dar de alta a un jugador"], ["2. Listar jugadores"], ["3. Buscar jugadores por id"], ["4. Actualizar jugador"], ["5. Eliminar Jugador"], ["6. Salir"]]
idJugador = 0
jugador = {}
lista_jugadores = [{"id": 0, "Nombre": "Erik", "Posicion": "Defensa", "equipo_id": 0, "esta_activo": True},]

################################################### Variable MÓDULO 3 — Calendario y partidos (reutiliza 1+2) #############################################################
menuPartido = [["1. Crear Partido"], ["2. Listar Partido"], ["3. Reprogramar Partido"], ["4. Eliminar Partido"], ["5. Salir"]]
idPartido = 0
partido = {}
lista_partidos = [{'id': 0, 'Jornada': 8, 'Local_id': -5, 'Visitante_id': 0, 'Fecha': '05/10/2025', 'Hora': '12:30', 'Jugado': True, 'Resultado': {"GolesLocal": 3, "GolesVisitantes": 2}}, {'id': -3, 'Jornada': 7, 'Local_id': 0, 'Visitante_id': -5, 'Fecha': '07/10/2025', 'Hora': '12:15', 'Jugado': True, 'Resultado': {"GolesLocal": 2, "GolesVisitantes": 2},'id': -3, 'Jornada': 5, 'Local_id': 0, 'Visitante_id': -5, 'Fecha': '20/10/2025', 'Hora': '08:30', 'Jugado': False, 'Resultado': None}]

################################################### Variable MÓDULO 3 — Calendario y partidos (reutiliza 1+2) #############################################################
menuResultado = [["1. Registrar Resultado"], ["2. Clasificación"], ["3. Estadisticas Equipo"], ["4. Salir"]]

eleccionResultado = funciones_globales.mostrar_menu(menuResultado)
while eleccionResultado != 4:
    match eleccionResultado:
        case 1:
            funciones_Resultados.marcarPartido_completado(lista_partidos)
        case 2:
            mostrados = funciones_Resultados.clasificacion(lista_equipos, lista_partidos)
        case 3:
            funciones_Resultados.estadisticas_porID(mostrados)
        case 4:
            eleccionResultado = 4
        case _:
            rprint("Opción no valida")
            
    eleccionResultado = int(input("Introduce tu elección: "))
