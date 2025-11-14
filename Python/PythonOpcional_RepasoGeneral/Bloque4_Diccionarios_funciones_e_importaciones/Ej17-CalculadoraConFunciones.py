# Ejercicio 17. Calculadora con funciones
# Crea una función operar(a, b, op) que reciba dos números y el tipo de operación (+, -, *, /).
#  Devuelve el resultado y pruébala pidiendo datos al usuario.
# --------------------------------------------------------------------------

# Función pedir numeros
def pedir_Numero ():
    num = int(input("Introduce un numero: "))
    return num

# Pedir numeros
numero1 = pedir_Numero()
numero2 = pedir_Numero()
menu = ["1. Sumar", "2. Restar", "3. Multiplicar", "4. Dividir"]


# Función Calculadora
def calculadora (menu, num1, num2):
    operacion = False

    print("MENU")
    print("-----------------------------------")
    for i in menu:
        print (i)
    opcion = int(input("Elige una opcion: "))

    while operacion != True:
        match opcion:
            case 1:
                print(f"La suma de {num1} y {num2} da {num1+num2}")
                operacion = True
            case 2:
                print(f"La resta de {num1} y {num2} da {num1-num2}")
                operacion = True

            case 3:
                print(f"La multiplicación de {num1} y {num2} es {num1*num2}")
                operacion = True
            case 4:
                print(f"La división de {num1} y {num2} es {num1/num2}")
                operacion = True
            case _:
                print("Opción no valida")
                opcion = int(input("Elige una opcion: "))

# Ejecución función
calculadora(menu, numero1, numero2)