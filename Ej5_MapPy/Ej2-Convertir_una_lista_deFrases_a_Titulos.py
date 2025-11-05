frases = ["buenos dias", "hola", "bienvenido", "saludos"]

# Funcion hacer titulo
def hacer_titulo (frase):
    return frase.title()

# Función map 
frases_Titulos = map(hacer_titulo,frases)
print(list(frases_Titulos))