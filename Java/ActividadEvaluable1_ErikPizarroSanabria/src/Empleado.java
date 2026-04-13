
public class Empleado {
	private int id;
	private String nombre;
	private String puesto;
	private String email;
	private String telefono;
	
	public Empleado(int id, String nombre, String puesto, String email, String telefono) {
		super();
		this.id = id;
		this.nombre = nombre;
		this.puesto = puesto;
		this.email = email;
		this.telefono = telefono;
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
