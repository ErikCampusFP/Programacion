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

# Desarrollo de la lógica del código
eleccion = funciones_globales.mostrar_menu(menuApp)
while eleccion != 5:
    match eleccion:
        case 1:
            eleccionEquipo = funciones_globales.mostrar_menu(menuEquipos)
            while eleccionEquipo != 6:
                match eleccionEquipo:
                    case 1:
                        idEquipo = funciones_globales.generar_id(idEquipo)
                        funciones_equipo.crear_equipo(equipo, lista_equipos, idEquipo)
                    case 2:
                        funciones_equipo.mostrar_equipos(lista_equipos)
                    case 3:
                        funciones_equipo.buscar_equipo(lista_equipos)
                    case 4:
                        funciones_equipo.modificar_equipo(lista_equipos)
                    case 5:
                        funciones_equipo.eliminar_Equipo(lista_equipos)
                    case 6:
                        eleccionEquipo = 6
                    case _:
                        print("Opción no valida")
                eleccionEquipo = int(input("Introduce tu elección: "))

        case 2:
            eleccionJugador = funciones_globales.mostrar_menu(menuJugadores)
            while eleccionJugador != 6:
                match eleccionJugador:
                    case 1:
                        idJugador = funciones_globales.generar_id(idJugador)
                        funciones_jugadores.añadir_jugador(idJugador, lista_jugadores, lista_equipos, jugador)
                    case 2:
                        funciones_jugadores.mostrar_jugadores(lista_jugadores, lista_equipos)
                    case 3:
                        funciones_jugadores.buscar_jugador(lista_jugadores)
                    case 4:
                        funciones_jugadores.actualizar_jugador(lista_jugadores, lista_equipos)
                    case 5:
                        funciones_jugadores.eliminar_Jugador(lista_jugadores)
                    case 6:
                        eleccionJugador = 6
                    case _:
                        print("Opción no valida")

                eleccionJugador = int(input("Introduce tu elección: "))
                
        case 3:
            eleccionPartido = funciones_globales.mostrar_menu(menuPartido)
            while eleccionPartido != 5:
                match eleccionPartido:
                    case 1:
                        idPartido = funciones_globales.generar_id(idPartido)
                        funciones_partidos.crear_partido(partido, lista_partidos, idPartido, lista_equipos)
                    case 2:
                        funciones_partidos.listar_partidos(lista_partidos, lista_equipos)
                    case 3:
                        funciones_partidos.reprograma_partido(lista_partidos)
                    case 4:
                        funciones_partidos.eliminar_partido(lista_partidos)
                    case 5:
                        eleccionPartido = 5
                    case _:
                        print("Opción no valida")
            
                eleccionPartido = int(input("Introduce tu elección: "))
        case 4:
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
        case 5:
            eleccion = 5
        case _:
            print("Opción no valida")
    eleccion = funciones_globales.mostrar_menu(menuApp)

print("Hasta luego, que pase buena tarde")
