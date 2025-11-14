# Ejercicio 16. Diccionario de precios
# Crea un diccionario con al menos 3 productos y su precio.
#  Pide al usuario uno de los productos y muestra su precio.
#  Si el producto no existe, muestra un mensaje de error.
# --------------------------------------------------------------------------

diccionario = {"Pan": 2, "Queso": 10, "Carne Roja": 15}
productoLista = False

# Pedimos productos
producto = input("Introduce el nombre del producto: ")

# Comprobamos si esta en la lista y si esta lo mostramos
for nombre in diccionario:
    if nombre == producto:
        precio = diccionario[nombre]
        productoLista = True
        print(f"El precio de {producto} es {precio} €")

# Si no esta mostramos que nos esta
if productoLista == False:
    print("Ese producto no esta en el diccionario")