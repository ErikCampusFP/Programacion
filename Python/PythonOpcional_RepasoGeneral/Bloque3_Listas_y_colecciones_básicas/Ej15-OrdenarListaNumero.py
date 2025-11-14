# Ejercicio 15. Ordenar una lista de números
# Pide 5 números, guárdalos en una lista y muestra:
# La lista original

# La lista ordenada
#  Usa los métodos de lista (append, sort).
# --------------------------------------------------------------------------

numerosPedidos = 0
lista = []

# Creación de la lista
while numerosPedidos != 5:
    numero = int(input("Introduce un numero: "))
    lista.append(numero)
    numerosPedidos +=1

# Mostrar lista original
print("Lista Original")
print(lista)

# Mostrar lista ordenaada de menor a mayor
lista.sort()
print("Lista Ordenada")
print(lista)
