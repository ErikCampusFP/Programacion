# Inportamos la libreria random
import random
#Le decimos que genere un numero random de un rango entre 1 y 100
numero = random.randint(1, 100)

# Le decimos que si nos da un numero mayor que le diga que es menor y viceversa.
resultado = int(input("Introduzca un numero: "))

while numero != resultado:
	if numero < resultado:
		print("Introduzca un numero más bajo")
		resultado = int(input("Introduzca un numero: "))

	elif numero > resultado:
		print("Introduzca un numero más alto")
		resultado = int(input("Introduzca un numero: "))

# Si acierta, le decimos que diga que acerto
else:
	print("Acertaste")

