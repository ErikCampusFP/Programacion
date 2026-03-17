package Prueba;

public class Persona {
	private String nombre;
	private String telefono;
	
	public Persona(String nombre, String telefono) {
		super();
		this.nombre = nombre;
		this.telefono = telefono;
	}
	
	@Override
	public String toString() {
		return this.nombre + " - " + this.telefono;
	}
}
