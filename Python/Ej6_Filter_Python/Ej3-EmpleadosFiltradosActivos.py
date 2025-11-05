empleados = {"Carlos": "Activo", "Marcos": "Inactivo", "Maria": "Inactivo", "Jesus": "Activo", "Sofia": "Activo"}

# Función filtrar empleados activos
def filtrar_empleados_activos(empleados):
    nombre, estado = empleados
    return estado == "Activo"

# Función Filter
empleadosActivos = filter(filtrar_empleados_activos,empleados.items())
print(list(empleadosActivos))