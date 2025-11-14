# Pide al usuario su nombre y su edad.
#  Muestra un mensaje como:
# “Hola Marta, tienes 17 años.”
# --------------------------------------------------------------------------

nombre = input("Introduce tu nombre: ")
edad = int(input("Introduce tu edad: "))
while edad < 0:
    print("Edad no valida")
    edad = int(input("Introduce tu edad: "))

print(f"Hola {nombre}, tienes {edad} años")