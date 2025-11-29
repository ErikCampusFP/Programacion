import os

# Definimos Variables
temperatura = {}
dia = ("Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo")

# Esto lo que hace es detectar la carpeta en la que me encuentro y al crear el archivo o buscarlo, siempre buscara que este en la carpeta.
archivotxt = os.path.join(os.path.dirname(__file__), "temperaturas.txt")

# Definimos el desarrollo del codigo

# Solicitamos una temperatura por dia y la almacenamos
for i in dia:
    temp = int(input(f"Introduce la temperatura del dia {i}: "))
    temperatura[i] = temp

# Esto añade los dias junto a su temperatura al archivo.txt
with open (archivotxt, "w") as archivo:
    for dia, temp in temperatura.items():
        archivo.write(f"{dia}: {temp}\n")

print("Temperatura almacenada Correctamente")