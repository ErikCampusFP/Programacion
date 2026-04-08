import sala.teatro.Cliente;
import sala.teatro.Obra;
import sala.teatro.Teatro;

import java.util.ArrayList;
import java.util.Scanner;

public class Main {


	public static void main(String[] args) {
		Scanner lector = new Scanner (System.in);

		
		Cliente paco = new Cliente("45628142", "Paco", "6752462184");
		System.out.println(paco.toString());
		
		Obra obra1 = new Obra("Obra1", "Misterio", "12:00 - 21:00", "14:00", "CRJ");
		System.out.println(obra1.toString());
		
		Teatro teatro1 = new Teatro("Cº Islas Caiman", obra1);
		
		
		int fila;
		int butaca;
		     
		
		String eleccion = "";
		System.out.println("Elige una opcicón: ");
			
		do {
			
			System.out.println("========MENU=========");
			System.out.println("1. Ver butacas libres");
	        System.out.println("2. Ver butacas ocupadas");
	        System.out.println("3. Ver todas las butacas");
	        System.out.println("4. Reservar butaca");
	        System.out.println("5. Ver programación");
	        System.out.println("6. Cancelar reserva");
	        System.out.println("7. Terminar programa");

	         
				eleccion = lector.next();
				
				switch (eleccion) {
				
				case "1":					
					System.out.println(teatro1.verButacasVacias());
					break;
				
				case "2":
					String a = teatro1.verButacasLlenas();
					if(a == "0") {
						System.out.println("No existe reservas");
					} else {
						System.out.println(teatro1.verButacasLlenas());
					}
					break;					
					
				case "3":
					System.out.println(teatro1.verButacas());
					break;
					
				case "4":
					String nombre;
					String dni;
					String tlf;

					
					lector.nextLine(); // Limpia el buffer del scanner
					System.out.println("Escribe tu nombre de Usuario: ");
					nombre = lector.next();
					
					lector.nextLine(); // Limpia el buffer del scanner
					System.out.println("Escribe tu DNI: ");
					dni = lector.next();
					
					lector.nextLine(); // Limpia el buffer del scanner
					System.out.println("Escribe tu telefono: ");
					tlf = lector.next();
					
					Cliente cliente = new Cliente(dni,nombre,tlf);
					
					System.out.println("Elige una fila: ");
					lector.nextLine(); // Limpia el buffer del scanner
					
					fila = lector.nextInt();
					lector.nextLine(); // Limpia el buffer del scanner
					
					System.out.println("Elige una butaca: ");
					butaca = lector.nextInt();

					teatro1.reservarButaca(fila, butaca, cliente);				
					break;
					
				case "5":
					System.out.println("===== Programación Reserva =====");
					System.out.println(obra1.toString());
					break;
					
				case "6":
					
					System.out.println("Elige una fila: ");
					lector.nextLine(); // Limpia el buffer del scanner
					
					fila = lector.nextInt();
					lector.nextLine(); // Limpia el buffer del scanner
					
					System.out.println("Elige una butaca: ");
					butaca = lector.nextInt();

					teatro1.eliminarreservarButaca(fila, butaca);				
					break;
					
				case "7":
					System.out.println("Hasta luego");
					break;
					
				default:
					System.out.println("Esta opción no es valida");
				
			} 
		} while (!eleccion.equals("7")); {

		}
		
	}

}
