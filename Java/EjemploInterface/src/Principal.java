
public class Principal {

	public static void main(String[] args) {
		Vehiculo v1 = new Coche("Ford Fiesta");
		Vehiculo v2 = new Moto("Kawasaki Z900", 100);
		
		System.out.println(v1);
		System.out.println(v2);
		
		System.out.println(v2.acelerar(50));
		System.out.println(v2.acelerar(50));
		System.out.println(v2.acelerar(50));

		
		
	}

}
