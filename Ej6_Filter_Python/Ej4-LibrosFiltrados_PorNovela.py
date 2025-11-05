libros = {"Don Quijote de la Mancha": "Novela", "Las flores del mal": "Poesia", "El diario de Ana Frank": "Ensayo", "Harry Potter": "Novela"}

# Función filtrar por Novela
def filtrar_porNovela(libro):
    nombre, tipo = libro
    return tipo == "Novela"

# Función filter
librosNovelas = filter(filtrar_porNovela, libros.items())
print(list(librosNovelas))