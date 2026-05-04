// import java.io.File;
// import java.io.FileNotFoundException;
import java.util.Scanner;


public class Principal {

/*
 	public static void main(String[] args) throws FileNotFoundException {
		

		File fichero = new File("texto.txt");
		
		if(fichero.exists()) {
			System.out.println("Existe el fichero");
		} else {
			System.out.println("No existe el fichero");
			return;
		}
		
		System.out.println("Bytes que ocupa: "+ fichero.length());
		System.out.println("--------------------------------");

		
		Scanner lector = new Scanner(fichero);

		while (lector.hasNextLine()) {
			String subcadena = lector.nextLine();
			String campos[] = subcadena.split(";");
			String producto = campos[0];
			float precio = Float.parseFloat(campos[1]);
			int stock = Integer.parseInt(campos[2]);
			
			System.out.println("Producto: "+ producto);
			System.out.println("Precio: " + precio);
			System.out.println("Stock: " + stock);
			System.out.println("--------------------------------");
		}
		lector.close();

	}	
 */
	
	public static void main(String[] args) {
		Scanner lector = new Scanner(System.in);
		System.out.print("¿Qué edad tienes? ");
		int edad = lector.nextInt();
		lector.nextLine();	

		
		System.out.print("¿Cómo te llamas? ");
		String nombre = lector.nextLine();	
		System.out.println("Hola " + nombre + " tienes " + 
                    edad + " años");
		lector.close();
	}
}


