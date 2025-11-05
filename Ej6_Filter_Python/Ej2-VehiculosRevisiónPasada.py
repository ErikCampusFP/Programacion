vehiculos = {"Mercedes Clase S": "Aprobado", "Toyota Hibrido": "Pendiente", "Seat Ibiza": "Aprobado", "Peugeot 2008": "Pendiente"}

#  Función Revisar si vehiculo aprobado
def vehiculo_revision(vehiculo):
    marca, estado = vehiculo
    return estado == "Aprobado"

# Función Filter
vehiculosAprobados = filter(vehiculo_revision, vehiculos.items())
print(list(vehiculosAprobados))