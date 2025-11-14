# Ejercicio 20. Gestión simple de alumnos (mini CRUD)
# Crea un programa con un diccionario llamado alumnos, donde:
# La clave sea el nombre del alumno.

# El valor sea su nota.

# Debe permitir:
# Añadir un alumno y su nota.

# Consultar la nota de un alumno.

# Modificar una nota existente.

# Mostrar todos los alumnos.

# Salir del programa.

# Usa funciones y bucles while.

alumnado = {"Erik": 9, "Gonzalo": 8}
menu = ["1. Añadir un alumno y su nota.", "2. Consultar la nota de un alumno.", "3. Modificar una nota existente.", "4. Mostrar todos los alumnos", "5. Salir del programa."]

print("MENU")
print("-----------------------------------------")
for i in menu:
    print(i)
eleccion = int(input("Introduce una opción: "))
while eleccion != 5:
    match eleccion:
        # Añadimos un alumno
        case 1:
            nombre = input("Introduce un nombre: ")
            while nombre in alumnado:
                print("Nombre ya existente")
                nombre = input("Introduce un nombre: ")

            nota = int(input("Introduce una nota: "))
            while nota < 0 or nota > 10:
                print("Nota no valida")
                nota = int(input("Introduce una nota: "))
            alumnado.update({nombre: nota})
            print("Alumno Añadido Correctamente")

        # Consultamos la nota de un alumno
        case 2:
            alumnoEnlista = False
            nombreAlumno = input("Introduce el nombre del alumno: ")
            for i in alumnado:
                precio = alumnado[i]
                if i == nombreAlumno:
                    print(f"La nota de {nombreAlumno} es {precio}")
                    alumnoEnlista = True
            if alumnoEnlista == False:
                print(f"No hay ningun {nombreAlumno} en el diccionario")
            else:
                print("Alumno generado correctamente")
        
        # Modificamos la nota de un alumno existente
        case 3:
            alumnoEnlista2 = False 
            nombreAlumno2 = input("Introduce el nombre del alumno: ")
            for i in alumnado:
                precio = alumnado[i]
                if i == nombreAlumno2:
                    nuevaNota = int(input("Introduce una nota: "))
                    while nuevaNota < 0 or nuevaNota > 10:
                        print("Nota no valida")
                        nuevaNota = int(input("Introduce una nota :"))
                    alumnado.update({i: nuevaNota })
                    nombreAlumno2 = True
            
            if nombreAlumno2 == True:
                print("Nota cambiada correctamente")
            else:
                print("Alumno no valido")
        
        # Mostramos todos los alumnos
        case 4:
            for i in alumnado:
                precio = alumnado[i]
                print(f"{i}: {precio}")
        # Salimos
        case 5:
            eleccion = 5
        # Casos no validos
        case _:
            print("Opción no valida")
                
    eleccion = int(input("Introduce una opción: "))


print("Hasta Luego")