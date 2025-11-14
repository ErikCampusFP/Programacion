# Ejercicio 5. Calculadora básica
# Pide dos números y una operación (+, -, *, /).
#  Muestra el resultado correspondiente usando if y elif.
# --------------------------------------------------------------------------

# Solicitamos los numeros que se van a utilizar
numero1 = int(input("Introduce un numero: "))
numero2 = int(input("Introduce otro numero: "))

print("1 = Sumar , 2 = Restar , 3 = Multiplicar , 4 = Dividir")
eleccion = int(input("Introduce una opción: "))
# Aquí se van a sumar
if eleccion == 1:
    suma = numero1 + numero2
    print(f"El resultado de la suma de {numero1} y {numero2} es {suma}")

    # Aquí se van a Restar
elif eleccion == 2:
    resta = numero1 - numero2
    print(f"El resultado de la resta de {numero1} y {numero2} es {resta}")

    # Aquí se van a Multiplicar
elif eleccion == 3:
    multiplicacion = numero1 * numero2
    print(f"El resultado de la multiplicación de {numero1} y {numero2} es {multiplicacion}")

    # Aquí se van a Dividir
elif eleccion == 4:
    division = numero1 / numero2
    print(f"El resultado de la división de {numero1} y {numero2} es {division}")
else:
    print("Operación no valida")