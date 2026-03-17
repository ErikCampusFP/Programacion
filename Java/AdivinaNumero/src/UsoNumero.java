import java.util.Scanner;

public class UsoNumero {
	public static void main (String[] args) {
		NumeroAleatorio numero = new NumeroAleatorio();
		
		numero.setNumero();
		int numF = numero.numero;
		
			
		Scanner lector = new Scanner (System.in);
		
		System.out.println("Escribe un numero: ");

		
		int opcion = 0;
		int contador = 0;
		
		do {
			
			opcion = lector.nextInt();
			
			while (opcion < numF) {
				System.out.println("El numero es mayor");
				contador += 1;
				break;
			}
			
			while (opcion > numF) {
				System.out.println("El numero es menor");
				contador += 1;
				break;
			}
			
			while (opcion == numF) {
				System.out.println("Acertaste, felicidades");
				System.out.println("El numero de intentos es el siguiente: " + contador);
				break;
			}

		
		} while (opcion != numF);
		
		lector.close();

	}
}
