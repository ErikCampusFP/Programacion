public class NumeroAleatorio {
	// Propiedades
	public int numero;
	
	
	public void setNumero() {
		int a = (int)((Math.random() * 20) + 1); // Saca un numero aleatorio entre 1 y 10 en enteros
		this.numero = a;
	}
	
}
