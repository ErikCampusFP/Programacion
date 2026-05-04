
public class Tarea {
	private int id;
	private String nombre;
	private String dificultad;
	private String descripcion;
    private Empleado empleadoAsignado;
    private int tiempoEstimado;
    private boolean completada;
    
    

    public Tarea(int id, String nombre, String dificultad, String descripcion, Empleado empleadoAsignado, int tiempoEstimado) throws TelephoneException {
		super();
		this.id = id;
		this.nombre = nombre;
		this.dificultad = dificultad;
		this.descripcion = descripcion;
		this.tiempoEstimado = tiempoEstimado;
		this.empleadoAsignado = empleadoAsignado;
		this.completada = false;
		
	    if (tiempoEstimado < 0) {
	        this.tiempoEstimado = tiempoEstimado;
	    } else {
	        throw new TelephoneException("El tiempo estimado tiene que ser positivo");
	    }
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


	public String getDificultad() {
		return dificultad;
	}


	public void setDificultad(String dificultad) {
		this.dificultad = dificultad;
	}


	public String getDescripcion() {
		return descripcion;
	}


	public void setDescripcion(String descripcion) {
		this.descripcion = descripcion;
	}


	public Empleado getEmpleadoAsignado() {
		return empleadoAsignado;
	}


	public void setEmpleadoAsignado(Empleado empleadoAsignado) {
		this.empleadoAsignado = empleadoAsignado;
	}


	public boolean isCompletada() {
		return completada;
	}


	public void setCompletada(boolean completada) {
		this.completada = completada;
	}


	@Override
	public String toString() {
		return "Tarea [id=" + id + ", nombre=" + nombre + ", dificultad=" + dificultad + ", descripcion=" + descripcion
				+ ", empleadoAsignado=" + empleadoAsignado + ", completada=" + completada + "]";
	}
	
		
	
}
