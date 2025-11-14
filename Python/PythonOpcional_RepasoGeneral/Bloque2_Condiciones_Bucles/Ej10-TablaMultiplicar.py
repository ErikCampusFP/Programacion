# Ejercicio 10. Tabla de multiplicar
# Pide un número del 1 al 10 y muestra su tabla de multiplicar.
#  Usa un bucle for y f-strings.
# --------------------------------------------------------------------------

# Solicitar el numero para hacer su tabla
numeroTabla = 1
numero = int(input("Introduce el numero para sacar su tabla de multiplicar: "))

# Calcular y mostrar la tabla de multiplicación del numero
print(f"Tabla Multiplicar {numero}")
print("----------------------------------------------------")
while numeroTabla != 11:
    print(f"{numero} X {numeroTabla} = {numero * numeroTabla}")
    numeroTabla += 1