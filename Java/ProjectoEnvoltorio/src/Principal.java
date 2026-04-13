
public class Principal {

	public static void main(String[] args) {
		int valor1 = 25; // Variable elemental
		Integer valor2 = new Integer(36); // Referencia a un objeto
		
		/*
		 * Así esta obsoleto y lo marca como tachado
		Integer numero = new Integer(10);
		Double decimal = new Double(3.14);
		Character letra = new Character('A');
		*/
		
		/*
		* Esto no esta obsoleto, y no lo tacha, pero es poco practica
		Integer numero = Integer.valueOf(10);
		Double decimal = Double.valueOf(3.14);
		Character letra = Character.valueOf('A');
		*/
		
		// Esta es la mejor forma de ponerlo
		Integer numero = 10;
		Double decimal = 2.14;
		Character letra = 'A';
		
		Integer a = 10;
		int b = a;

		System.out.println("MINIMO INTEGER: " + Integer.MIN_VALUE);
		System.out.println("MAXIMO INTEGER: " + Integer.MAX_VALUE);
		
		System.out.println("MINIMO CHARACTER: " + (int) Character.MIN_VALUE);
		System.out.println("MAXIMO CHARACTER: " + (int) Character.MAX_VALUE);

		char l = 'A';
		System.out.println((int)l);
		
		for (char c=0; c<255; c++)
			System.out.print(c + " ");
	}

}
