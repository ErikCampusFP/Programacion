import java.util.Scanner;

public class UsoCoche {

	public static void main(String[] args) {
		
		Coche miCoche = new Coche("1234ABC", "TOYOTA", "YARIS");
		//miCoche.setMatricula("1234ABC");
		//miCoche.setMarca("TOYOTA");
		//miCoche.setModelo("YARIS");
		
		Scanner lector = new Scanner (System.in);
		
		String opcion = "";
		
		System.out.println(Coche.informa);
		System.out.println("Coches construidos: "+Coche.contadorCoches);
		System.out.println(Math.PI);
		
		do {
			System.out.println("1. Acelerar");
			System.out.println("2. Frenar");
			System.out.println("3. Ver estado del Coche");
			System.out.println("4. Terminar Programa");
			System.out.println("-------------------------------------");
			System.out.println("¿Qué opción eliges?");
			opcion = lector.nextLine();
			
			switch (opcion) {
			
			case "1":
				miCoche.acelerar(10);
				System.out.println("El coche ha acelerado");
				break;
			
			case "2":
				miCoche.frenar(10);
				System.out.println("El coche ha frenado");
				break;

			case "3":
				System.out.println(miCoche.toString());
				break;
				
			case "4":
				System.out.println("Hasta Pronto");
				break;

			default:
				System.out.println("Opción incorrecta");
				break;

			}
			
		} while (!opcion.equals("4"));
			
			lector.close();;
	}

}