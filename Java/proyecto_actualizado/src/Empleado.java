
public class Empleado {
	private int id;
	private String nombre;
	private String puesto;
	private String email;
	private String telefono;
	
	
	

	
	
	// Constructor 1
	public Empleado(int id, String nombre, String puesto, String email, String telefono) throws TelephoneException {
	    this.id = id;
	    this.nombre = nombre;
	    this.puesto = puesto;
	    this.email = email;

	    if (telefono != null && telefono.length() == 8) {
	        this.telefono = telefono;
	    } else {
	        throw new TelephoneException("El teléfono debe tener exactamente 8 caracteres");
	    }
	}
	
	// Constructor 2
	public Empleado(int id, String nombre, String puesto) {
		super();
		this.id = id;
		this.nombre = nombre;
		this.puesto = puesto;
	}
	
	

	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

	public String getNombre() {
		return nombre;
	}

	public void setNombre(String nombre) {
		this.nombre = nombre;
	}

	public String getPuesto() {
		return puesto;
	}

	public void setPuesto(String puesto) {
		this.puesto = puesto;
	}

	public String getEmail() {
		return email;
	}

	public void setEmail(String email) {
		this.email = email;
	}
	
	public String getTelefono() {
		return telefono;
	}

	public void setTelefono(String telefono) {
		this.telefono = telefono;
	}

	@Override
	public String toString() {		
		return "Empleado [id=" + id + ", nombre=" + nombre + ", puesto=" + puesto + ", email=" + email + ", telefono="
				+ telefono + "]";
	}
	
	
	
	
}
