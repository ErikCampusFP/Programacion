tareas = {"Sacar al perro": "Urgente", "Recoger la Habitación": "Aplazable", "Hacer Ejercicio": "Aplazable", "Hacer la Comida": "Urgente"}

# Función filtrar tareas urgentes
def tareas_filtradas_Urgentes (tarea):
    nombre, estado = tarea
    return estado == "Urgente"

# Función Filter
tareasUrgentes = filter(tareas_filtradas_Urgentes,tareas.items())
print(list(tareasUrgentes))