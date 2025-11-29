import os
import pickle

# Definimos la clase Productos
class Productos:
    def __init__(self, nombre, precio, cantidad):
        self.nombre = nombre
        self.precio = precio
        self.cantidad = cantidad
    
        
# Definimos Variables
inventario = []
fin = False

# Esto lo que hace es detectar la carpeta en la que me encuentro y al crear el archivo o buscarlo, siempre buscara que este en la carpeta.
archivopkl = os.path.join(os.path.dirname(__file__), "inventario.pkl")

# Mientras el usuario no diga fin, pedimos nombre, precio y cantidad, lo asociamos a la clase y lo guardamos en la lista
while fin != True:
    nombre = input("Introduce un nombre (o fin para acabar): ")
    while nombre == "":
        print("Nombre no valido")
        nombre = input("Introduce un nombre (o fin para acabar): ")
    if nombre == "fin" or nombre == "Fin":
        fin = True
    else:
        precio = float(input("Introduce el precio del producto: "))
        while precio <0:
            print("Precio no valido")
            precio = int(input("Introduce el precio del producto: "))

        cantidad = int(input("Introduce la cantidad de productos que quedan del producto: "))
        while cantidad < 0:
            print("Cantidad no valida")
            cantidad = int(input("Introduce la cantidad de productos que quedan del producto: "))

        articulo = Productos(nombre, precio, cantidad) # Esto asocia el producto a la clase Productos
        inventario.append(articulo)



# Guardamos la clase y la lista en el archivo.pkl con pickle
with open (archivopkl,"wb") as f:
    pickle.dump(inventario, f)
print("Inventario Guardado Correctamente")

# Cargamos la lista almacenada en el archivo.pkl con pickle
with open (archivopkl,"rb") as f:
    inventarioRecuperado = pickle.load(f)

print("----------------------------------------------------")
print("Listado de productos Recuperados")
print("----------------------------------------------------")
# Esto muestra el nombre, precio y cantidad de cada producto, esta escrito de esta forma, ya que hace referencia a la clase a la cual esta asociada
for producto in inventarioRecuperado:
    print("Nombre:",producto.nombre, "-", "Precio:", producto.precio,"-", "Cantidad", producto.cantidad)