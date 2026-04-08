package sala.teatro;

public class Obra {
	private String nombre;
	private String genero;
	private String horario;
	private String hora_inicio;
	private String cia;
	
	
	public Obra(String nombre, String genero, String horario, String hora_inicio, String cia) {
		super();
		this.nombre = nombre;
		this.genero = genero;
		this.horario = horario;
		this.hora_inicio = hora_inicio;
		this.cia = cia;
	}


	public String getNombre() {
		return nombre;
	}


	public void setNombre(String nombre) {
		this.nombre = nombre;
	}


	public String getGenero() {
		return genero;
	}


	public void setGenero(String genero) {
		this.genero = genero;
	}


	public String getHorario() {
		return horario;
	}


	public void setHorario(String horario) {
		this.horario = horario;
	}


	public String getHora_inicio() {
		return hora_inicio;
	}


	public void setHora_inicio(String hora_inicio) {
		this.hora_inicio = hora_inicio;
	}


	public String getCia() {
		return cia;
	}


	public void setCia(String cia) {
		this.cia = cia;
	}


	@Override
	public String toString() {
		return "Titulo: " + nombre + "\n" + "Genero: " + genero + "\n" + "Horario: " + horario + "\n" + "Genero: " + genero;
	}
	
	
	

	
	
}