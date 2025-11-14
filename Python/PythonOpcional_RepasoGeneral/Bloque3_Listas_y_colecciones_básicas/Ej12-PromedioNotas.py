# Ejercicio 12. Promedio de notas
# Pide al usuario 4 notas (de 0 a 10) y calcula la media.
#  Indica si está aprobado (≥5) o suspenso (<5).
# --------------------------------------------------------------------------

notasPedidas = 0
totalNotas = 0

# Solicitar las 4 notas
while notasPedidas != 4:
    nota = int(input("Introduce una nota: "))
    while nota < 0 or nota > 10:
        print("Nota no valida")
        nota = int(input("Introduce una nota: "))
    totalNotas += nota
    notasPedidas +=1

# Calcular Media
media = totalNotas/4

# Mostrar si esta aprobado o suspenso
if media >= 5:
    print(f"Has Aprobado con un {media}")
else:
    print(f"Has Suspendido con un {media}")
