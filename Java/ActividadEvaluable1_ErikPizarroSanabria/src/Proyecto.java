import java.util.ArrayList;

public class Proyecto {
    private String nombre;
    private String descripcion;
    private ArrayList<Tarea> tareas;
    
    
	public Proyecto(String nombre, String descripcion, ArrayList<Tarea> tareas) {
		super();
		this.nombre = nombre;
		this.descripcion = descripcion;
		this.tareas = tareas;
	}


	public String getNombre() {
		return nombre;
	}


	public void setNombre(String nombre) {
		this.nombre = nombre;
	}


	public String getDescripcion() {
		return descripcion;
	}


	public void setDescripcion(String descripcion) {
		this.descripcion = descripcion;
	}


	public ArrayList<Tarea> getTareas() {
		return tareas;
	}


	public void setTareas(ArrayList<Tarea> tareas) {
		this.tareas = tareas;
	}


	@Override
	public String toString() {
		return "Projecto [nombre=" + nombre + ", descripcion=" + descripcion + ", tareas=" + tareas + "]";
	}
	
   }
