# Ejercicio 9. Suma acumulada
# Pide números al usuario hasta que escriba 0.
#  Muestra la suma total de los números introducidos.
#  No uses break; controla la condición con whi
# --------------------------------------------------------------------------

# Solicitud de numero y creación variable suma acumulativa
sumaAcumulativa = 0
numero = int(input("Introduce un numero para añadir a la suma (escribe 0 para acabar): "))

# Bucle que suma los numeros dados por el usuario has ta que de 0
while numero != 0:
    sumaAcumulativa += numero 
    numero = int(input("Introduce un numero para añadir a la suma (escribe 0 para acabar): "))
print(f"El resultado de la suma acumulativa es {sumaAcumulativa}")