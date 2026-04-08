// Las Interface no tienen constructor

public interface Vehiculo {
	// Las variables de una interfaz son static y final.
	public int VELOCIDAD_MAXIMA=120;
	
	public String frenar(int cuanto);
	public String acelerar(int cuanto);
}
