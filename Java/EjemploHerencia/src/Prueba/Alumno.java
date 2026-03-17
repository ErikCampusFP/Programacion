package Prueba;

public class Alumno extends Persona {
	private int numMatricula;

	public Alumno(String nombre, String telefono, int numMatricula) {
		super(nombre, telefono);
		this.numMatricula = numMatricula;
	}

	@Override
	public String toString() {
		return "Alumno [Matricula nº=" + numMatricula + ", " + super.toString() + ", getClass()="
				+ getClass() + ", hashCode()=" + hashCode() + "]";
	}
	
	
	
}
