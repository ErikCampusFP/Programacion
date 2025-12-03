# Importamos librerias
from rich import print
import numpy as np



# Defenimos funciones
def mostrar_menu(menu):
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


def alta_cliente(ArrayClientes):
    # Solicita el DNI
    dni = str(input("Introduce el DNI de la persona: "))
    LetrasValidas = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZ"

    maxDNI = 0
    dniExistente = True
    contadorDNI = 0
    

    # Comprobamos la longitud del DNI
    longDni = len(dni)
    # Si el DNI no es de longitud 9, pedir otra vez el DNI
    while longDni != 9 or dni[-1] not in LetrasValidas: #Indico que si dni[-1] es igual a LetrasValidas, lo cual comprueba si el ultimo caracter es una de las letras permitidas
        print("DNI no valido")
        dni = str(input("Introduce el DNI de la persona: "))
        longDni = len(dni)
    
    # Sacamos el numero de arrays que hay
    for i in ArrayClientes:
        maxDNI +=1

    # Comprobamso si el DNI existe
    while dniExistente != False:
        dniEx = 0
        # Si el numero de arrays es 1, solo comprobamos con el 0,0
        if maxDNI == 1:
            # Si es igual, decimos que el DNI ya exuste
            if ArrayClientes[0,0] == dni:
                print("DNI ya existente")
                dni = str(input("Introduce el DNI de la persona: "))
            else:
                dniExistente = False
        # Si son más de una, comprobamos todas las posiciones de DNI posibles
        else:
            while contadorDNI != maxDNI:
                for i in ArrayClientes:
                    if ArrayClientes[contadorDNI,0] == dni:
                        dniEx = 1
                contadorDNI +=1

            # Si el DniEX == 0, lo que significa que no existe, pasamos al siguiente sino le pedimos que nos escriba otro
            if dniEx == 0:
                dniExistente = False
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
            print("No se permiten numeros")
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
            print("No se permiten numeros")
            apellidos = input("Introduce los apellidos del usuario: ")
        else:
            numeroValidoApellido = True
    
    
    # Solicitamos Telefono
    # Comprueba que no exista ya el telefono
    repetido = False
    while repetido != True:

        maximoTel = 0
        contadorTel = 0
        igual2 = -1

        # Pedimos el telefono
        telefono = int(input("Introduce el telefono del cliente: "))

        # Calculamos la longitud del array
        for i in ArrayClientes:
            maximoTel +=1
        # Si el array es de longitud 1, solo comprobamos con el 0,3
        if maximoTel == 1:
            if ArrayClientes[0,3] == str(telefono):
                igual2 = contadorTel

        # Si son más de una, comprobamos todas las posiciones de DNI posibles
        while contadorTel != maximoTel:
            for i in ArrayClientes:
                if ArrayClientes[contadorTel,3] == str(telefono):
                    igual2 = contadorTel
            contadorTel +=1

        if igual2 != -1:
            print("Telefono ya existente")
        else:
            repetido = True


    telefonoValido = False
    while telefonoValido != True:
        try:
            longtel = (len(str(telefono)))
            # Comprobamos que tenga una longitud de 9, si no la tiene, pedimos otro numero
            while longtel != 9:
                print("Telefeno no valido")
                telefono = int(input("Introduce el telefono del cliente: "))
                longtel = (len(str(telefono)))
        # Comprobamos que no nos den una letra, si la dan, pedimos otro numero
        except ValueError:
            print("Telefono no valido")
        else:
            telefonoValido = True

    




    # Añadimos el ciliente al array
    cliente = np.array([[dni, nombre, apellidos, telefono]])

    # Si el array base esta vacio, lo cual indica que no hay clientes, el primer array es el nuevo cliente, sino se añade el nuevo cliente al array
    if ArrayClientes[0,0] == "":
        ArrayClientes = cliente
    else:
        ArrayClientes = np.append(ArrayClientes, cliente, axis=0)
    print("Cliente Añadido Correctamente")
    return ArrayClientes


def buscarClientePorDNI(ArrayClientes):

    maximo = 0
    contador = 0
    igual = -1


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
    
    # Calculamos la longitud del array
    for i in ArrayClientes:
        maximo +=1
    # Si el array es de longitud 1, solo comprobamos con el 0,0
    if maximo == 1:
        if ArrayClientes[0,0] == dni:
            igual = contador

    # Si son más de una, comprobamos todas las posiciones de DNI posibles
    while contador != maximo:
        for i in ArrayClientes:
            if ArrayClientes[contador,0] == dni:
                igual = contador
        contador +=1
    
    # Si igual es -1, significa que no hay cliente, por lo cual se muestra "Cliente no encontrado", sino mostramos la información de este
    if igual == -1:
        print("Cliente no encontrado")
    else:
        print("Cliente Seleccionado:")
        lineas()
        print("DNI:",ArrayClientes[igual,0])
        print("Nombre:" , ArrayClientes[igual, 1])
        print("Apellidos:", ArrayClientes[igual, 2])
        print("Telefono:", ArrayClientes[igual, 3])


def ModificarTelefonoCliente(ArrayClientes):

    maximo = 0
    contador = 0
    igual = -1
    cont2 = False

    dni = str(input("Introduce el DNI de la persona: "))
    LetrasValidas = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZ"
    # Comprobamos la longitud del DNI
    longDni = len(dni)
    # Si el DNI no es de longitud 9, pedir otra vez el DNI
    while longDni != 9 or dni[-1] not in LetrasValidas: #Indico que si dni[-1] es igual a LetrasValidas, lo cual comprueba si el ultimo caracter es una de las letras permitidas
        print("DNI no valido")
        dni = str(input("Introduce el DNI de la persona: "))
        longDni = len(dni)
    
    # Calculamos la longitud del array
    for i in ArrayClientes:
        maximo +=1
    # Si el array es de longitud 1, solo comprobamos con el 0,0
    if maximo == 1:
        if ArrayClientes[0,0] == dni:
            igual = contador

    # Si son más de una, comprobamos todas las posiciones de DNI posibles
    while contador != maximo:
        for i in ArrayClientes:
            if ArrayClientes[contador,0] == dni:
                igual = contador
        contador +=1
    
    # Si igual es -1, significa que no hay cliente, por lo cual se muestra "Cliente no encontrado", sino mostramos la información de este
    if igual == -1:
        print("Cliente no encontrado")
    else:
        
        while cont2 != True:
            # Solicitamos un telefono
            telefonoValido = False
            while telefonoValido != True:
                try:
                    telefono = int(input("Introduce el telefono del cliente: "))
                    longtel = (len(str(telefono)))
                    # Comprobamos que tenga una longitud de 9, si no la tiene, pedimos otro numero
                    while longtel != 9:
                        print("Telefeno no valido")
                        telefono = int(input("Introduce el telefono del cliente: "))
                        longtel = (len(str(telefono)))
                # Comprobamos que no nos den una letra, si la dan, pedimos otro numero
                except ValueError:
                    print("Telefono no valido")
                else:
                    telefonoValido = True
            
                    maximoTel = 0
                    contadorTel = 0
                    igual2 = -1

                    # Calculamos la longitud del array
                    for i in ArrayClientes:
                        maximoTel +=1
                    # Si el array es de longitud 1, solo comprobamos con el 0,3
                    if maximoTel == 1:
                        if ArrayClientes[0,3] == str(telefono):
                            igual2 = contadorTel

                    # Si son más de una, comprobamos todas las posiciones de DNI posibles
                    while contadorTel != maximoTel:
                        for i in ArrayClientes:
                            if ArrayClientes[contadorTel,3] == str(telefono):
                                igual2 = contadorTel
                        contadorTel +=1

                    if igual2 != -1:
                        print("Telefono ya existente")

                    else:
                        ArrayClientes[igual,3] = telefono
                        print("Telefono Actualizado")
                        cont2 = True


def Eliminar_cliente(ArrayClientes):
    
    maximo = 0
    contador = 0
    igual = -1


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
    
    # Calculamos la longitud del array
    for i in ArrayClientes:
        maximo +=1
    # Si el array es de longitud 1, solo comprobamos con el 0,0
    if maximo == 1:
        if ArrayClientes[0,0] == dni:
            igual = contador

    # Si son más de una, comprobamos todas las posiciones de DNI posibles
    while contador != maximo:
        for i in ArrayClientes:
            if ArrayClientes[contador,0] == dni:
                igual = contador
        contador +=1
    
    # Si igual es -1, significa que no hay cliente, por lo cual se muestra "Cliente no encontrado", sino mostramos la información de este
    if igual == -1:
        print("Cliente no encontrado")
        return ArrayClientes
    else:
        ArrayClientes = np.delete(ArrayClientes, igual, axis=0)
        print("Cliente Eliminado Correctamente")
        return ArrayClientes
    
# Guardamos los clientes en un archivo
def GuardarClientesFichero(ArrayClientes):

    eleccion = input("Se van a reescribir el archivo .txt, quieres proseguir (s = SI | n = NO): ")
    while eleccion != "s" or eleccion != "n":
        if eleccion == "s":

            vacio = False
            if ArrayClientes[0,0] == "":
                vacio = True
            
            if vacio == True:
                print("No se puede guardar debido a que no hay clientes")
                return
            else:
                with open('Clientes.txt', 'w') as archivo:
                    for Dni, Nombre, Apellidos, Telefono in ArrayClientes:
                        archivo.write(f"{Dni};{Nombre};{Apellidos};{Telefono}\n")
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
def Comprobar_Archivos (ArrayClientes):
    
    # Acceptación de que se van a borrar los registros actuales una vez cargue
    eleccion = input("Los datos guardados se van a sobreescribir, quiere proseguir (s = SI | n = NO): ")
    while eleccion != "s" or eleccion != "n":
        if eleccion == "s":
            ArrayClientes = []
            try:
                    with open('Clientes.txt', 'r') as archivo:
                        for linea in archivo:
                            # Quitamos saltos de línea
                            linea = linea.strip()  
                            # Quitamos el punto y coma
                            linea = linea.split(';') 
                            # Añadimos los clientes a la lista vacia y la convertimos en numpy
                            ArrayClientes.append(linea) 
                    ArrayClientes = np.array(ArrayClientes)
                    print("Clientes Recuperados Correctamente")
                    return ArrayClientes

                
            # Si no existe, decimos que no hay clientes almacenados
            except FileNotFoundError:
                print("No hay clientes almacenados")
                ArrayClientes = np.array([['','','','']])
                return ArrayClientes
            
        # Si se dice que no se cancela
        elif eleccion == "n":
            print("Carga cancelada")
            return ArrayClientes
        
        # Si la eleccion no es valida, pide que escriba otra vez
        else:
            print("Opción no valida")
            eleccion = input("Los datos guardados se van a sobreescribir, quiere proseguir (s = SI | n = NO): ")