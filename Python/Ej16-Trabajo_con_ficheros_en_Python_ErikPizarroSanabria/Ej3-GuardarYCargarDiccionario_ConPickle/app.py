import pickle
import os

# Definimos variables
alumnos = {}
fin = False
numAlumnos = 0
totalNotas = 0

# Esto lo que hace es detectar la carpeta en la que me encuentro y al crear el archivo o buscarlo, siempre buscara que este en la carpeta.
archivopkl = os.path.join(os.path.dirname(__file__), "alumnos.pkl")


# Definimos el desarrollo del codigo

# Mientras el usuario no diga fin, pedimos un nombre y una nota y lo almacenamos en un diccionario
while fin != True:
    nombre = input("Introduce el nombre del alumno (o fin para acabar): ")
    while nombre == "":
        print("Nombre no valido")
        nombre = input("Introduce el nombre del alumno (o fin para acabar): ")

    if nombre == "fin" or nombre == "Fin":
        fin = True
    else:
        nota = int(input(f"Introduce la nota del alumno {nombre}: "))
        while nota < 0 or nota > 10:
            print("Nota no valida")
            nota = int(input(f"Introduce la nota del alumno {nombre}: "))
        alumnos[nombre] = nota

# Con esto almacenamos el diccionario en el archivo archivopkl
with open (archivopkl, "wb") as f:
    pickle.dump(alumnos, f)
print("Alumnos almacenados correctamente")
print("------------------------------------------------")

# Con esto sacamos lo almacenado en el archivo
with open (archivopkl, "rb") as f:
    listaAlumnos = pickle.load(f)

# Aqui mostramos la lista de los alumnos y la media de estos en base a lo sacado del archivo almacenado por pickle
print("Lista de Alumnos: ")
print("------------------------------------------------")
print(listaAlumnos)
print("------------------------------------------------")
print("Media Notas")
print("------------------------------------------------")
for nom, cali in listaAlumnos.items():
    numAlumnos +=1
    totalNotas += cali
mediaFinal = totalNotas/numAlumnos
print(mediaFinal)