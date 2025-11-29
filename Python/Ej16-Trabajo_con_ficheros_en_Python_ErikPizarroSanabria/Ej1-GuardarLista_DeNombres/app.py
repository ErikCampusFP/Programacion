import os

# Definimos variables
nombres = []
fin = False
# Esto lo que hace es detectar la carpeta en la que me encuentro y al crear el archivo o buscarlo, siempre buscara que este en la carpeta.
archivotxt = os.path.join(os.path.dirname(__file__), "nombres.txt")

# Definimos el desarrollo del codigo

# Mientras fin no sea true, se pide un nombre y se almacena
while fin != True:
    nombre = input("Introduce un nombre (Escriba fin para terminar): ")
    while nombre == "":
        print("Nombre no valido")
        nombre = input("Introduce un nombre (Escriba fin para terminar): ")
    # Si nombre es igual a fin, es bucle acaba
    if nombre == "fin" or nombre == "Fin":
        fin = True
    else:
        nombres.append(nombre)
        print("Nombre añadido Correctamente")

# Esto lo que hace es que escribe los nombres en el archivo .txt
with open(archivotxt, "w") as archivo:
    for i in nombres:
        archivo.write(i+"\n")

print(f"Nombres Escritos Correctamente en {archivo}")
