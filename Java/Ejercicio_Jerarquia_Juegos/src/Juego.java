
public class Juego {
	private String titulo;
	private String empresa;
	private double puntuacionBase;
	
	
	public Juego(String titulo, String empresa, int puntuacionBase) {
		super();
		this.titulo = titulo;
		this.empresa = empresa;
		this.puntuacionBase = puntuacionBase;
	}


	@Override
	public String toString() {
		return "Juego [titulo=" + titulo + ", empresa=" + empresa + ", puntuacionBase=" + puntuacionBase + "]";
	}
	
	public double calcularPuntuacionFinal() {
		return puntuacionBase;
	}


	public String getTitulo() {
		return titulo;
	}


	public void setTitulo(String titulo) {
		this.titulo = titulo;
	}


	public String getEmpresa() {
		return empresa;
	}


	public void setEmpresa(String empresa) {
		this.empresa = empresa;
	}


	public double getPuntuacionBase() {
		return puntuacionBase;
	}


	public void setPuntuacionBase(int puntuacionBase) {
		this.puntuacionBase = puntuacionBase;
	}
	
	
}
