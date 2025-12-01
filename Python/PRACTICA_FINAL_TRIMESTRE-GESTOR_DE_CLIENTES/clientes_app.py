# Importamos diccionarios
import biblioteca
from rich import print
import numpy as np

# Definimos funciones
menu = ["1. Alta de Cliente", "2. Listar todos los clientes", "3. Buscar clientes por DNI", "4. Modificar telefono de un cliente", "5. Eliminar Cliente", "6. Guardar cliente en fichero", "7. Cargar clientes desde el fichero", "8. Salir"]

ArrayClientes = np.array([['','','','']])

# Desarrollar código
biblioteca.mostrar_menu(menu)
eleccion = biblioteca.comprobarMenu()

while eleccion != 8:
    match eleccion:
        case 1:
            ArrayClientes = biblioteca.alta_cliente(ArrayClientes)
        case 2:
            if ArrayClientes[0,0] == "":
                print("No hay clientes")
            else:
                print("Listado de Clientes")
                biblioteca.lineas()
                print(ArrayClientes)
        case 3:
            biblioteca.buscarClientePorDNI(ArrayClientes)
        case 4:
            biblioteca.ModificarTelefonoCliente(ArrayClientes)
        case 5:
            ArrayClientes = biblioteca.Eliminar_cliente(ArrayClientes)
        case 6:
            biblioteca.GuardarClientesFichero(ArrayClientes)
        case 7:
            ArrayClientes = biblioteca.Comprobar_Archivos(ArrayClientes)

    eleccion = biblioteca.comprobarMenu()

print("Hasta Luego")