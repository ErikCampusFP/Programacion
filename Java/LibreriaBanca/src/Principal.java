import banca.Cliente;
import banca.Cuenta;

public class Principal {

	public static void main(String[] args) {
		Cliente cli1 = new Cliente("77788899A", "Pepe", "González López");
		System.out.println(cli1);
		cli1.setTlf("617774422");
		
		Cuenta cuenta1 = new Cuenta(cli1, "ES34889922482949", 100);
		System.out.println(cuenta1.toString());
		double saldo = cuenta1.ingresar(50);
		System.out.println("Saldo actualizao: " +saldo);
		System.out.println(cuenta1.toString());
	}
	
}
