 # Definimos Variables

#################################################################### Entrega 1. Inventario de artículos #########################################################################
menu = ["1. Crear artículo", "2. Listar artículos", "3. Buscar artículo por id", "4. Actualizar artículo", "5. Eliminar artículo", "6. Alternar activo/inactivo", "7. Salir"]
articulo = {}
lista_articulo = [{"id": 1, "nombre": "Teclado mecánico", "precio": 49.99, "stock": 20, "esta_activo": True},{"id": 2, "nombre": "Ratón inalámbrico", "precio": 24.50, "stock": 35, "esta_activo": True}]
idProducto = 0

############################################################################# Entrega 2. Gestión de Usuarios ########################################################
menuOpciones = ["1. Inventario de objetos", "2. Gestión de Usuarios", "3. Carrito y Ventas","4. Salir"]
menuUsuarios = ["1. Crear Usuarios", "2. Listar Usuarios", "3. Buscar usuario por id", "4. Actualizar usuario", "5. Eliminar Usuario", "6. Alternar estado", "7. Volver"]
idUsuario = 0
usuario = {}
lista_usuario = [{"id": 1, "nombre": "Carlos Pérez", "email": "carlos.perez@example.com", "esta_activo": True},{"id": 2, "nombre": "Lucía Gómez", "email": "lucia.gomez@example.com", "esta_activo": True}]

############################################################################# Entrega 3. Carrito y Ventas ############################################################
menu_Compra = ["1. Seleccionar usuario activo", "2. Añadir artículo al carrito", "3. Quitar artículo del carrito", "4. Ver carrito", "5. Confirmar compra", "6. Historial de ventas por usuario", "7. Vaciar carrito", "8. Volver"]
carrito = {}
compra = []
historialCarrito = []
idComprador = 0 


# Definimos Funciones

#################################################################### Entrega 1. Inventario de artículos #########################################################################
# Función mostrar menu
def mostrar_menu(menu_tienda):
    for i in menu_tienda:
        print (i)               

# Generar id
def generar_id(articulos):
    articulos = articulos + 1
    return(articulos)

# Función para insertar articulos
def insertar_articulos(articulo):
    insertar_articulos = input("Introduce el nombre del articulo: ")
    precio_articulo = float(input("Introduce el precio del articulo: "))

    while precio_articulo < 0:
            print("Precio no valido")
            precio_articulo = float(input("Introduce el precio del articulo: "))
    stock_articulo = int(input("Introduce el stock del producto: "))
    activo = bool(True)

    articulo = {"id": idProducto,"nombre": insertar_articulos, "precio": precio_articulo, "stock": stock_articulo, "esta_activo": activo}
    lista_articulo.append(articulo)
    return("Objeto añadido correctamente")
    


# Listar artículos           
def mostrar_lista(lista_articulo):
     for i in lista_articulo:
          print(i)

# Buscar articulo por id
def buscar_articulo_por_id(lista):
    id_producto = int(input("Introduce el id del producto: "))

    while True:
        for articulo in lista:
            if articulo["id"] == id_producto:
                print(articulo)
                return
        print("Articulo no existente")
        id_producto = int(input("Introduce el id del producto: "))


# Actualizar articulo
def actualizar_articulo (lista):
    id_articulo = int(input("Introduce el id del articulo a cambiar: "))
    
    while True:
        for articulo in lista:
            if articulo["id"] == id_articulo:
                nombre = input("Introduce el nuevo nombre: ")
                precio = float(input("Introduce el nuevo precio: "))
                stock_art = int(input("Introduce el nuevo stock: "))
                articulo.update ({"nombre": nombre, "precio": precio, "stock": stock_art})
                print("Articulo Actualizado Correctamente")
                return
        print("Articulo no existente")
        id_articulo = int(input("Introduce el id del producto: "))

# Borrar artículo
def borrar_articulo(lista):
    id_borrar = int(input("Introduce el id del articulo a borrar: "))

    while True:
        for articulo in lista:
            if articulo["id"] == id_borrar:
                lista.remove(articulo)
                print("Articulo Eliminado Correctamente")
                return
        print("Articulo no existente")
        id_borrar = int(input("Introduce el id del articulo a borrar: "))

# Alternar activo/inactivo
def alternar_estado(lista):
    id_alternarEstado = int(input("Introduce el id del producto a cambiar estado: "))

    while True:
        for articulo in lista:
            if articulo["id"] == id_alternarEstado:
                if articulo["esta_activo"] == True:
                    articulo.update ({"esta_activo": False})
                    print("Estado cambiado a inactivo correctamente")
                else:
                    articulo.update ({"esta_activo": True})
                    print("Estado cambiado a activo correctamente")
                return
        print("Articulo no existente")
        id_alternarEstado = int(input("Introduce el id del producto a cambiar estado: "))

############################################################################# Entrega 2. Gestión de Usuarios ########################################################

# Crear Usuario
def crear_usuario(usuario):
    nombre = input("Introduce el nombre del usuario: ")
    email = input("Introduce el email del usuario: ")
    while "@"not in email or "." not in email:
        print("Email no valido")
        email = input("Introduce un email valido: ")
    
    for articulo in lista_usuario:
            while email in articulo["email"]:
                print("Email no valido")
                email = input("Introduce un email valido: ")
    activo = bool(True)
    usuario = ({"id": idUsuario,"nombre": nombre, "email": email, "esta_activo": activo})
    lista_usuario.append(usuario)

# Actualizar usuario
def actualizar_usuario(lista):
    id_usuario = int(input("Introduce el id del usuario a actualizar: "))
    
    while True:
        for articulo in lista:
            if articulo["id"] == id_usuario:
                nombre = input("Introduce el nuevo nombre del usuario: ")
                email = input("Introduce el nuevo email del usuario: ")
                while "@"not in email or "." not in email:
                    print("Email no valido")
                    email = input("Introduce un email valido: ")
                for articulo in lista_usuario:
                    while email in articulo["email"]:
                        print("Email no valido")
                        email = input("Introduce un email valido: ")
                articulo.update({"nombre": nombre, "email": email})
                print("Articulo Actualizado")
                return
        print("Usuario no encontrado")
        id_usuario = int(input("Introduce el id del usuario a actualizar: "))

############################################################################# Entrega 3. Carrito y Ventas ########################################################

# Función para seleccionar un usuario
def seleccionar_usuario (lista):
    print("Estos son los usuarios disponibles")
    for i in lista_usuario:
        print(i)
    print("")
    user = int(input("Introduce el id del usuario a seleccionar: "))

    while True:
        for articulos in lista:
            if articulos["id"] == user:
                global idComprador
                idComprador = user
                return("Usuario seleccionado correctamente")
                
        print("Usuario no existente")
        user = int(input("Introduce el id del usuario a seleccionar: "))

# Añadir articulo al carrito
def añadir_articulo(lista):
    while idComprador == 0:
        print("Usuario no encontrado")
        return

    print("Estos son los articulos disponibles: ")
    mostrar_lista(lista_articulo)
    print("")
  
    elegir_articulo = int(input("Introduce el id del producto a añadir: "))
    while usuario_select == 0:
        print("Usuario no seleccionado")
        return
    
    while True:
        for articulo in lista_articulo:
            if articulo in lista:
                lista.remove(articulo)
            if articulo["id"] == elegir_articulo:
                cantidad_compra = int(input("Introduce la cantidad del producto que quieres comprar: "))
                while articulo["stock"] < cantidad_compra:
                    print("Cantidad no valida")
                    cantidad_compra = int(input("Introduce la cantidad del producto que quieres comprar: "))
                articulo.update({"cantidad_compra": cantidad_compra, "usuario_Responsable": idComprador})
                lista.append(articulo)
                print("Producto añadido correctamente")
                return
        print("Producto no existente")
        elegir_articulo = int(input("Introduce el id del producto a añadir: "))

# Quitar artículo del carrito
def quitar_articulo(lista):
    if not lista:
        print("El carrito esta vacio")
        return
    else:
        print("Estos son tus articulos: ")
        mostrar_lista(lista)
        print("")


        elegir_articulo = int(input("Introduce el id del producto a eliminar: "))
        while True:
            for articulo in lista:
                if articulo["id"] == elegir_articulo:
                    lista.remove(articulo)
                    print("Producto eliminado correctamente")
                    return
            print("Producto no existente")
            elegir_articulo = int(input("Introduce el id del producto a añadir: "))

# Función ver precio total
def precio_total(lista):
    precioTotal = 0
    for i in lista:
        precioTotal += (i["precio"] * i["cantidad_compra"])
    return precioTotal

# Función confirmar compra
def confirmar_compra (lista):
    while not compra or idComprador == 0:
        print("Compra cancelada")
        return
    
    while True:
        for articulo in lista:
            for articulo_inventario in lista_articulo:
                if articulo_inventario["id"] == articulo["id"]:
                    articulo_inventario["stock"] -= articulo["cantidad_compra"]
                    print("Compra Realizada exitosamente")
                    historialCarrito.append(articulo.copy())
            lista.clear()
            return

# función ver historial compra por id:
def historial_id(lista):
    id_historial = int(input("Introduce el id del usuario que quieres ver el hsitorial: "))

    while True:
        for articulo in lista:
            for articulo_inventario in lista_articulo:
                if articulo_inventario["id"] == id_historial:
                    print(articulo)
                    return
        print("Usuario no posee historial")
        id_historial = int(input("Introduce el id del usuario que quieres ver el hsitorial: "))

#Función vaciar carrito
def vaciar_carrito(lista):
    lista.clear()
    print("Carrito eliminado correctamente")



# Desarrollo de la lógica del código
mostrar_menu(menuOpciones)
eleccion_menu = int(input("Introduce el menu que quieres: "))
while eleccion_menu != 4:
    match eleccion_menu:
        
# Menu Inventario de artículos
        case 1:
            mostrar_menu(menu)
            eleccion = int(input("Elige una opción: "))
            while eleccion != 7:
                match eleccion:
                    case 1:
                        idProducto = generar_id(idProducto)
                        print(insertar_articulos(articulo))
                    case 2:
                        print("Lista de Artículos:")
                        mostrar_lista(lista_articulo)
                    case 3:
                        buscar_articulo_por_id(lista_articulo)
                    case 4:
                        actualizar_articulo(lista_articulo)
                    case 5:
                        borrar_articulo(lista_articulo)
                    case 6:
                        alternar_estado(lista_articulo)
                    case 7:
                        mostrar_menu(menuOpciones)
                        eleccion_menu = int(input("Introduce el menu que quieres: "))
                    case _:
                        print("Opción no valida")

                eleccion = int(input("Elige una opción: "))
            mostrar_menu(menuOpciones)

# Menu Gestión de usuarios
        case 2:
            mostrar_menu(menuUsuarios)
            eleccion_users = int(input("Elige una opción: "))
            while eleccion_users != 7:
                match eleccion_users:
                    case 1:
                        idUsuario = generar_id(idUsuario)
                        crear_usuario(usuario)
                    case 2:
                        print("Lista de Usuarios:")
                        mostrar_lista(lista_usuario)
                    case 3:
                        buscar_articulo_por_id(lista_usuario)
                    case 4:
                        actualizar_usuario(lista_usuario)
                    case 5:
                        borrar_articulo(lista_usuario)
                    case 6:
                        alternar_estado(lista_usuario)
                    case 7:
                        eleccion_users = 7
                    case _:
                        print("Opción no valida")
                eleccion_users = int(input("Elige una opción: "))
            mostrar_menu(menuOpciones)
            
# Menu Carrito y ventas
        case 3:
            mostrar_menu(menu_Compra)
            eleccion_compra = int(input("Elige una opción: "))
            while eleccion_compra != 8:
                match eleccion_compra:
                    case 1:
                        usuario_select = seleccionar_usuario(lista_usuario)
                        print(usuario_select)

                    case 2:
                        añadir_articulo(compra)

                    case 3:
                        quitar_articulo(compra)
                    case 4:
                        print("Este es el carrito")
                        mostrar_lista(compra)
                        precioTotal = precio_total(compra)
                        print(f"Este es el precio total: {precioTotal}")
                    case 5:
                        confirmar_compra(compra)
                        idComprador = 0
                    case 6:
                        historial_id(historialCarrito)
                    case 7:
                        vaciar_carrito(compra)
                    case 8:
                        eleccion_compra = 8
                    case _:
                        print("Opción no valida")

                eleccion_compra = int(input("Elige una opción: "))
            mostrar_menu(menuOpciones)

        case 4:
            eleccion_menu = 4

        case _:
            print("Opción no valida")

    eleccion_menu = int(input("Introduce el menu que quieres: "))
print("Buena Tarde")