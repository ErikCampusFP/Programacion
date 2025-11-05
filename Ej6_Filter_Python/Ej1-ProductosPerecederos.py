productos = {"Fruta": "Perecedero", "Enlatados": "NoPerecederos", "Vegetales": "Perecedero", "Productos_Secos": "NoPerecederos", "Lacteos": "Perecedero"}

# Función para saber si son perecederos
def son_perecederos(lista):
    producto, resultado = lista
    return resultado == "Perecedero"

# Función filter (Nota: cuando seleccionemos el diccionario, hay que poner .items())
productosPerecederos = filter(son_perecederos, productos.items())
print(list(productosPerecederos))