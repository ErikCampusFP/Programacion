
public class Principal {

	public static void main(String[] args) {
		
		int x;
		int numeros[];
		
		numeros = new int[5];
		
		numeros[0] = 35;
		numeros[1] = 54;
		numeros[2] = 14;
		numeros[3] = 28;
		numeros[4] = 125;
		// numeros[5] = 42; // Excepción java.lang.ArrayIndexOutOfBoundsException
		
		System.out.println(numeros.toString());
		System.out.println("Nº de elementos: " + numeros.length);
		
		for (int i = 0; i<numeros.length; i++) {
			System.out.println(i + " -> " + numeros[i]);
		}
		
		for (int elemento : numeros) {
			System.out.println(elemento);
		}
		
		
		String datos [][];
		datos = new String [4][];
		// Es un array con 4 elementos.
		// Cada uno de ellos es otro array.
		
		datos[0] = new String[5];
		datos[1] = new String[3];
		datos[2] = new String[4];
		datos[3] = new String[4];
		
		datos[0][0] = "Pepe";
		datos[2][1] = "Juan";
		
		for (String [] elemento: datos) {
			System.out.println(elemento);
			for (String texto : elemento) {
				System.out.println(texto + "");
			}
		}

		
		
	}

}
