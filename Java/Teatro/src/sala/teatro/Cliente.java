package sala.teatro;

public class Cliente {
	private String dni;
	private String nombre;
	private String tlf;
	
	public Cliente(String dni, String nombre, String tlf) {
		super();
		this.dni = dni;
		this.nombre = nombre;
		this.tlf = tlf;
	}

	public String getDni() {
		return dni;
	}

	public void setDni(String dni) {
		this.dni = dni;
	}

	public String getNombre() {
		return nombre;
	}

	public void setNombre(String nombre) {
		this.nombre = nombre;
	}

	public String getTlf() {
		return tlf;
	}

	public void setTlf(String tlf) {
		this.tlf = tlf;
	}

	@Override
	public String toString() {
		return "Cliente [dni=" + dni + ", nombre=" + nombre + ", tlf=" + tlf + "]";
	}
	
	

	
	
	
}
