import numpy as np

# Creamos una array
array = np.array([[1,2,3,4], [9,8,7,6], [15,50,2,100]])

# Con el comando .max(matriz, axis=0) sacamos el valor máximo de cada columna
maximosArray = np.max(array, axis=0)

# Mostramos el resultado
print(maximosArray)