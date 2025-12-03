# Importamos diccionarios
import biblioteca
from rich import print

# Definimos funciones
menu = ["1. Alta de Cliente", "2. Listar todos los clientes", "3. Buscar clientes por DNI", "4. Modificar telefono de un cliente", "5. Eliminar Cliente", "6. Guardar cliente en fichero", "7. Cargar clientes desde el fichero", "8. Salir"]

clientes = []

# Desarrollar código
biblioteca.mostrar_menu(menu)
eleccion = biblioteca.comprobarMenu()

while eleccion != 8:
    match eleccion:
        case 1:
            biblioteca.alta_cliente(clientes)
        case 2:
            biblioteca.mostrar_clientes(clientes)
        case 3:
            biblioteca.buscarClientePorDNI(clientes)
        case 4:
            clientes = biblioteca.ModificarTelefonoCliente(clientes)
        case 5:
            biblioteca.eliminar_Cliente(clientes)
        case 6:
            biblioteca.GuardarClientesFichero(clientes)
        case 7:
            clientes = biblioteca.Comprobar_Archivos(clientes)

    eleccion = biblioteca.comprobarMenu()

print("Hasta Luego")