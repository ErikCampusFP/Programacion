# Ejercicio 6. Mayor de tres números
# Pide tres números y muestra cuál es el mayor.
#  Usa condicionales anidados (if, elif, else).
# --------------------------------------------------------------------------

lista = []
numeroMayor = 0

# Solicitamos los numeros y lo metemos en una ista
numero1 = int(input("Introduce el primer numero: "))
lista.append(numero1)

numero2 = int(input("Introduce el segundo numero: "))
lista.append(numero2)

numero3 = int(input("Introduce el ultimo numero: "))
lista.append(numero3)

# Comprobamos cual es el numero mayor
for i in lista:
    if i > numeroMayor:
        numeroMayor = i

# Mostramos el numero mayor
print(f"El numero mayor dado es {numeroMayor}")