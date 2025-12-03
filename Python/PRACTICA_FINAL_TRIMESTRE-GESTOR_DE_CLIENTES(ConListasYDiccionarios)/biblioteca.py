# Importamos librerias
from rich import print


# Defenimos funciones
def mostrar_menu(menu):

    print("-------------------------------------------------------------------")
    print("|                           MENÚ PRINCIPAL                        |")
    print("-------------------------------------------------------------------")
    # Mostramos el menu
    for i in menu:
        print(i)

# Esta función comprueba si no estamos escribiendo una letra a la hora de elegir una función
def comprobarMenu():
    while True:
        try:
            eleccion = int(input("Introduce una opción: "))
            if 1 <= eleccion <= 8:
                return eleccion
            else:
                print("Opción no valida")
        except ValueError:
            print("No se permiten letras")


def lineas():
    print("--------------------------------------------")

def alta_cliente(clientes1):
    # Solicita el DNI
    dni = str(input("Introduce el DNI de la persona: "))
    LetrasValidas = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZ"   

    # Comprobamos la longitud del DNI
    longDni = len(dni)
    # Si el DNI no es de longitud 9, pedir otra vez el DNI
    while longDni != 9 or dni[-1] not in LetrasValidas: #Indico que si dni[-1] es igual a LetrasValidas, lo cual comprueba si el ultimo caracter es una de las letras permitidas
        print("DNI no valido")
        dni = str(input("Introduce el DNI de la persona: "))
        longDni = len(dni)
    
    # Comprobación de que no esta el DNI repetido
    repetido = False
    while repetido != True:
        
        for i in clientes1:
            if i["DNI"] == dni:
                repetido = 2
            else:
                repetido = False
    
        if repetido == False:
            repetido = True

        else:
            print("DNI ya existente")
            dni = str(input("Introduce el DNI de la persona: "))
    
     # Solicita Nombre
    numeroValidoNombre = False
    nombre = input("Introduce el nombre del cliente: ")
    numerosNoValidos = ("1","2","3","4","5","6","7","8","9","0" )

    # Comprobación de que no esta vacio
    while nombre == "":
        print("Nombre no valido")
        nombre = input("Introduce el nombre del cliente: ")

    # Comprobación de que no tiene ningun numero
    while numeroValidoNombre != True:
        cont = 0
        for i in numerosNoValidos:
            if i in nombre:
                cont = 1
        
        if cont == 1:
            print("No se permiten letras")
            nombre = input("Introduce el nombre del cliente: ")
        else:
            numeroValidoNombre = True

   
    
    # Soliciamos Apellidos
    numeroValidoApellido = False
    apellidos = input("Introduce los apellidos del usuario: ")
    while apellidos == "":
        print("Apellidos no valido")
        apellidos = input("Introduce el apellido del usuario: ")
   
    while numeroValidoApellido != True:
        cont = 0
        for i in numerosNoValidos:
            if i in apellidos:
                cont = 1
        
        if cont == 1:
            print("No se permiten letras")
            apellidos = input("Introduce los apellidos del usuario: ")
        else:
            numeroValidoApellido = True
  
    # Solicitamos Telefono
    
    # Comprueba que no exista ya el telefono
    telefono = str(input("Introduce el telefono del cliente: "))

    repetido2 = False
    while repetido2 != True:
        
        for i in clientes1:
            if i["Telefono"] == telefono:
                repetido2 = 2
            else:
                repetido2 = False
    
        if repetido2 == False:
            repetido2 = True

        else:
            print("Telefonono ya existente")
            telefono = str(input("Introduce el telefono del cliente: "))


    telefonoValido = False
    while telefonoValido != True:
        try:
            longtel = (len(str(telefono)))
            # Comprobamos que tenga una longitud de 9, si no la tiene, pedimos otro numero
            while longtel != 9:
                print("Telefeno no valido")
                telefono = str(input("Introduce el telefono del cliente: "))
                longtel = (len(str(telefono)))
        # Comprobamos que no nos den una letra, si la dan, pedimos otro numero
        except ValueError:
            print("Telefono no valido")
        else:
            telefonoValido = True

    cliente = {"DNI": dni, "Nombre": nombre, "Apellidos": apellidos, "Telefono": telefono}
    clientes1.append(cliente)
    print("Cliente añadido correctamente")


def mostrar_clientes(Clientes):
    if len(Clientes) <= 0:
        print("No hay clientes")
    else:
        print("Clientes Existentes")
        lineas()
        for i in Clientes:
            print(i)

def buscarClientePorDNI(clientes1):
    # Solicitamos el DNI
    dni = str(input("Introduce el DNI de la persona: "))
    LetrasValidas = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZ"
    # Comprobamos la longitud del DNI
    longDni = len(dni)
    # Si el DNI no es de longitud 9, pedir otra vez el DNI
    while longDni != 9 or dni[-1] not in LetrasValidas: #Indico que si dni[-1] es igual a LetrasValidas, lo cual comprueba si el ultimo caracter es una de las letras permitidas
        print("DNI no valido")
        dni = str(input("Introduce el DNI de la persona: "))
        longDni = len(dni)
    # Comprobamos si el DNI existe
    a = 0
    for i in clientes1:
        if i["DNI"] == dni:
            a = 1
            clienteExistente = i
    # Si no existe lo notificamos
    if a == 0:
        print("Cliente no existente")
    # Si existe mostramos sus datos
    else:
        print(clienteExistente)

def ModificarTelefonoCliente(clientes1):

    cont2 = False

    dni = str(input("Introduce el DNI de la persona: "))
    LetrasValidas = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZ"
    # Comprobamos la longitud del DNI
    longDni = len(dni)
    while longDni != 9 or dni[-1] not in LetrasValidas:
        print("DNI no valido")
        dni = str(input("Introduce el DNI de la persona: "))
        longDni = len(dni)

    # Comprobamos si el DNI existe
    a = 0
    for i in clientes1:
        if i["DNI"] == dni:
            a = 1

    if a == 0:
        print("Cliente no existente")
        return clientes1

    else:
        while cont2 != True:
            telefonoValido = False
            while telefonoValido != True:
                try:
                    telefono = str(input("Introduce el telefono del cliente: "))
                    longtel = len(str(telefono))
                    while longtel != 9:
                        print("Telefono no valido")
                        telefono = str(input("Introduce el telefono del cliente: "))
                        longtel = len(str(telefono))
                except ValueError:
                    print("Telefono no valido")

                else:
                    cont3 = False
                    # Buscar si el teléfono ya existe
                    for i in clientes1:
                        if i["Telefono"] == telefono:
                            cont3 = True

                    if cont3 == True:
                        print("Telefono ya existente")
                    else:
                        telefonoValido = True 

            # Cambiamos el telefono
            for i in clientes1:
                if i["DNI"] == dni:
                    i["Telefono"] = telefono
                    print("Telefono Cambiado Correctamente")
                    cont2 = True
                    return clientes1

def eliminar_Cliente(clientes1):
    
    # Solicitamos el DNI
    dni = str(input("Introduce el DNI de la persona: "))
    LetrasValidas = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZ"
    # Comprobamos la longitud del DNI
    longDni = len(dni)
    # Si el DNI no es de longitud 9, pedir otra vez el DNI
    while longDni != 9 or dni[-1] not in LetrasValidas: #Indico que si dni[-1] es igual a LetrasValidas, lo cual comprueba si el ultimo caracter es una de las letras permitidas
        print("DNI no valido")
        dni = str(input("Introduce el DNI de la persona: "))
        longDni = len(dni)
    
    cont = 0
    for i in clientes1:
        if i["DNI"] == dni:
            clientes1.remove(i)
            cont = 1
    
    if cont == 1:
        print("Cliente Eliminado Correctamente")
    else:
        print("Cliente no existente")

# Guardamos los clientes en un archivo
def GuardarClientesFichero(clientes1):

    # Acceptación de que se van a borrar los registros del guardado una vez se guarde
    eleccion = input("Se van a reescribir el archivo .txt, quieres proseguir (s = SI | n = NO): ")
    while eleccion != "s" or eleccion != "n":
        if eleccion == "s":

            lleno = False
            if len(clientes1) <= 0:
                lleno = True
            
            if lleno == True:
                print("No se puede guardar, ya que no hay clientes")
                return
            else:

                with open('Clientes.txt', 'w') as archivo:
                    for i in clientes1:
                        archivo.write(f"{i["DNI"]};{i["Nombre"]};{i["Apellidos"]};{i["Telefono"]}\n")
                    print("Clientes Guardados Correctamente")
                    return
            
        # Si se dice que no se cancela
        elif eleccion == "n":
            print("Guardado cancelado")
            return 
        
        # Si la eleccion no es valida, pide que escriba otra vez
        else:
            print("Opción no valida")
            eleccion = input("Se van a reescribir el archivo .txt, quieres proseguir (s = SI | n = NO): ")



        
# Comprobamos si existe el archivo con los clientes
def Comprobar_Archivos(clientes1):

    # Acceptación de que se van a borrar los registros actuales una vez cargue
    eleccion = input("Los datos guardados se van a sobreescribir, quiere proseguir (s = SI | n = NO): ")
    while eleccion != "s" or eleccion != "n":
        if eleccion == "s":

            clientes1 = []
            try:
                    with open('Clientes.txt', 'r') as archivo:
                        for linea in archivo:
                            # Quitamos saltos de línea
                            linea = linea.strip()  
                            # Quitamos el punto y coma y damos valor a cada valor del txt
                            dni, nombre, apellidos, telefono = linea.split(';') 
                            # Añadimos los clientes al diccionario
                            clientes1.append({"DNI": dni, "Nombre": nombre, "Apellidos": apellidos, "Telefono": telefono})
                            
                    
                    print("Clientes Recuperados Correctamente")
                    return clientes1

                
            # Si no existe, decimos que no hay clientes almacenados
            except FileNotFoundError:
                print("No hay clientes almacenados")
                clientes1 = []
                return clientes1
            
        # Si se dice que no se cancela
        elif eleccion == "n":
            print("Carga cancelada")
            return clientes1
        
        # Si la eleccion no es valida, pide que escriba otra vez
        else:
            print("Opción no valida")
            eleccion = input("Los datos guardados se van a sobreescribir, quiere proseguir (s = SI | n = NO): ")