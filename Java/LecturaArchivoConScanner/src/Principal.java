import java.io.File;
import java.io.FileNotFoundException;
import java.util.Scanner;

public class Principal {

	public static void main(String[] args) throws FileNotFoundException {
		
		
		int precioTotal = 0;
		int totalProductos = 0;
		int importeTotal = 0;

		File fichero = new File("productos.txt");
		
		if(fichero.exists()) {
			System.out.println("Existe el fichero");
		} else {
			System.out.println("No existe el fichero");
			return;
		}
		
		System.out.println("Bytes que ocupa: "+ fichero.length());
		System.out.println("--------------------------------");
		
		Scanner lector = new Scanner(fichero);
		while(lector.hasNextLine()) {
			String subcadena = lector.nextLine();
			String campos[] = subcadena.split(";");
			
			String tipoProducto = campos[0];
			String producto = campos[1];
			float precio = Float.parseFloat(campos[2]);
			int stock = Integer.parseInt(campos[3]);
						
			precioTotal += precio;
			totalProductos ++;
			importeTotal += precio * stock;
			
			System.out.println(producto + " -- (" + tipoProducto + ") -- Precio: " + precio + " € -- Stock: " + stock);

		}
		System.out.println("--------------------------------");
		System.out.println("Total de articulos: "+ totalProductos);
		System.out.println("Promedio de precio: "+ precioTotal * totalProductos + " €");
		System.out.println("Importe Total: " + importeTotal + " €");
		
		lector.close();

	}

}
