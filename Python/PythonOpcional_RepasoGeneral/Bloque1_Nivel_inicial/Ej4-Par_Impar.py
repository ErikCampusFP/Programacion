# Ejercicio 4. Número par o impar
# Pide un número entero al usuario e indica si es par o impar.
#  Usa el operador módulo (%).
# --------------------------------------------------------------------------

# Solicitar numero
numero = int(input("Introduce un numero: "))

# Comprobar si es par o impar
if numero % 2 == 0:
    print(f"El numero {numero} es par")
else:
    print(f"El numero {numero} es impar")
