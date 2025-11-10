import numpy as np

# Creamos el array con el comando .arange para indicar la longitud y .reshape para indicar el tamaño de las listas
array = np.arange(1, 17).reshape((4, 4)) 

# Mostramos la tercera columna, indicando en fla : para elegir todo y el 2 en columna para elegir la 3 columna
print(array[:,2])