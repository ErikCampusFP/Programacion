# Ejercicio 14. Buscar en lista
# Crea una lista con los nombres de tus compañeros.
#  Pide un nombre y muestra si se encuentra en la lista o no.
# --------------------------------------------------------------------------

clase = ["Erik", "Gonzalo", "Javier", "Alejandro", "Alvaro", "Ivan", "Marcos", "Jesus"]
nombreinLista = 0

nombre = input("Introduce el nombre de alguno de tus compañeros de clase: ")

for i in clase:
    if i == nombre:
        nombreinLista +=1

if nombreinLista == 0:
    print(f"No existe ningun {nombre} en la clase")
else:
    print(f"Existe un {nombre} en la clase")