import numpy as np

# Creamos un array
array = np.array([[1,2,3,4], [5,6,7,8], [9,10,11,12]])

# Con el comando .mean(matriz, axis=1) definimos el promedio de cada fila
promedioPorFila = np.mean(array, axis=1)

# Mostramos el resultado
print(promedioPorFila)