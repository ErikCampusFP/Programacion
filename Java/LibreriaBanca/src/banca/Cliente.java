package banca;

/**
 * Representa un cliente de una entidad bancaria.
 * @author Erik Pizarro Sanabria
 * @version 1.0
 * @since 2026
 */

public class Cliente {
	private String dni;
	private String nombre;
	private String apellido;
	private String tlf;
	private String domicilio;
	
	/**
	 * Constructor que recibe todos los datos del cliente.
	 * @param dni para guardar el DNI del cliente.
	 * @param nombre
	 * @param apellido
	 * @param tlf
	 * @param domicilio
	 */
	
	public Cliente(String dni, String nombre, String apellido, String tlf, String domicilio) {
		super();
		this.dni = dni;
		this.nombre = nombre;
		this.apellido = apellido;
		this.tlf = tlf;
		this.domicilio = domicilio;
	}
	
	
	/**
	 * Constructor que recibe todos los datos del cliente.
	 * tlf y domicilio lo rellena con cadena vacia
	 * @param dni
	 * @param nombre
	 * @param apellido
	 */
	
	public Cliente(String dni, String nombre, String apellido) {
		super();
		this.dni = dni;
		this.nombre = nombre;
		this.apellido = apellido;
		this.tlf = "-";
		this.domicilio = "-";
	}
	
	/**
	 * Constructor que asigna cadena vacia a todos los argumentos
	 */
	
	public Cliente() {
		super();
		this.dni = "-";
		this.nombre = "-";
		this.apellido = "-";
		this.tlf = "-";
		this.domicilio = "-";
	}

	/**
	 * Retorna todos los datos del cliente
	 * @return String
	 */

	@Override
	public String toString() {
		return "Cliente [dni=" + dni + ", nombre=" + nombre + ", apellido=" + apellido + ", tlf=" + tlf + ", domicilio="
				+ domicilio + "]";
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


	public String getApellido() {
		return apellido;
	}


	public void setApellido(String apellido) {
		this.apellido = apellido;
	}


	public String getTlf() {
		return tlf;
	}


	public void setTlf(String tlf) {
		this.tlf = tlf;
	}


	public String getDomicilio() {
		return domicilio;
	}


	public void setDomicilio(String domicilio) {
		this.domicilio = domicilio;
	}
	
	
	

	
	
	
}
