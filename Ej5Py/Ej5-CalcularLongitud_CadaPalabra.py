lista = ["Hola", "Esternocleidomastoideo", "Plastilina", "Cabeza"]

#  Función contar palabras
def contar_palabras(palabra):
    return len(palabra)

#  Función Map
listaContada = map(contar_palabras, lista)
print(list(listaContada))