package Prueba;

public class Profesor extends Persona {
	private String especialidad;
	
	public Profesor(String nombre, String telefono, String especialidad) {
		super(nombre, telefono);
		this.especialidad = especialidad;
	}


	@Override
	public String toString() {
		return "Profesor: " + super.toString() + 
			" Especialidad " + this.especialidad;
	}
}