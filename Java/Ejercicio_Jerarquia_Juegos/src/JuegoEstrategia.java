
public class JuegoEstrategia extends Juego {
	private int numeroPartidasGanadas;
	private int numeroRecursosConstruidos;
	
	
	public JuegoEstrategia(String titulo, String empresa, int puntuacionBase, int numeroPartidasGanadas, int numeroRecursosConstruidos) {
		super(titulo, empresa, puntuacionBase);
		this.numeroPartidasGanadas = numeroPartidasGanadas;
		this.numeroRecursosConstruidos = numeroRecursosConstruidos;
	}
	
	
	
	public int getNumeroPartidasGanadas() {
		return numeroPartidasGanadas;
	}



	public void setNumeroPartidasGanadas(int numeroPartidasGanadas) {
		this.numeroPartidasGanadas = numeroPartidasGanadas;
	}



	public int getNumeroRecursosConstruidos() {
		return numeroRecursosConstruidos;
	}



	public void setNumeroRecursosConstruidos(int numeroRecursosConstruidos) {
		this.numeroRecursosConstruidos = numeroRecursosConstruidos;
	}

	@Override
	public String toString() {
		return "JuegoEstrategia [numeroPartidasGanadas=" + numeroPartidasGanadas + ", numeroRecursosConstruidos="
				+ numeroRecursosConstruidos + ", toString()=" + super.toString() + "]";
	}



	@Override
	public double calcularPuntuacionFinal() {
		return getPuntuacionBase() + (numeroPartidasGanadas * 2) + (numeroRecursosConstruidos / 5.0);
	}
	
	
}
