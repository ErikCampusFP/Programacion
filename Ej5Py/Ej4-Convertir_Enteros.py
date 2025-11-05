lista = [2.5, 6.9, 4.2, 4.6]

# Función convertir enteros
def convertir_enteros(num):
    return round(num)

# Función Map
listaRedondeada = map(convertir_enteros, lista)
print(list(listaRedondeada))