lista = []

numero = int(input("Introduce un numero para añadirlo a una lista, escribe 0 para terminar: "))
while numero != 0:
    lista.append(numero)
    numero = int(input("Introduce un numero para añadirlo a una lista, escribe 0 para terminar: "))

# Función calcular el doble
def calcular_doble (num):
    return num * 2

# Función Map
listaDoble = map(calcular_doble,lista)
print(list(listaDoble))