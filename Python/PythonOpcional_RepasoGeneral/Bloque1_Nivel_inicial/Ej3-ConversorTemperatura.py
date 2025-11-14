# Ejercicio 3. Conversor de temperatura
# Pide una temperatura en grados Celsius y muestra su equivalente en Fahrenheit.
#  Fórmula:
# F = C × 1.8 + 32
# --------------------------------------------------------------------------

# Solicitamos la temperatura y lo convertimos en Farenheit
temperaturaGrados = int(input("Introduce la temperatura en grados (Cº): "))
temperaturaFarenheit = temperaturaGrados * 1.8 + 32

# Mostramos el resutldado
print(f"La conversión de {temperaturaGrados}Cº son {temperaturaFarenheit} grados farenheit")