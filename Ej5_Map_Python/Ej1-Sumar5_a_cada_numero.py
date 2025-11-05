lista = []

numero = int(input("Introduce un numero para añadirlo a una lista, escribe 0 para terminar: "))
while numero != 0:
    lista.append(numero)
    numero = int(input("Introduce un numero para añadirlo a una lista, escribe 0 para terminar: "))

# Función sumar 5
def sumar_5(num):
    return num + 5

# Función Map
listaSumada = map(sumar_5, lista)
print(list(listaSumada))