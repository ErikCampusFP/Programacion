# Ejercicio 11. Lista de nombres
# Pide al usuario 5 nombres y guárdalos en una lista.
#  Después, muestra todos los nombres en mayúsculas.
# --------------------------------------------------------------------------

tabla = []
numeroNombres = 0

# Solicitamos los 5 nombres
while numeroNombres != 5:
    nombre = input("Introduce un nombre: ")
    # Con el comando .upper convertimos el resultado a mayuscula9
    nombre = nombre.upper()
    tabla.append(nombre)
    numeroNombres += 1

print(tabla)