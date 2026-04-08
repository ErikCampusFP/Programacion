
public class JuegoAccion extends Juego {
	private int numeroMisiones;
	private int numeroEnemigosDerrotados;
	
	
	public JuegoAccion(String titulo, String empresa, int puntuacionBase, int numeroMisiones, int numeroEnemigosDerrotados) {
		super(titulo, empresa, puntuacionBase);
		this.numeroMisiones = numeroMisiones;
		this.numeroEnemigosDerrotados = numeroEnemigosDerrotados;
	}
	
		
	public int getNumeroMisiones() {
		return numeroMisiones;
	}

	public void setNumeroMisiones(int numeroMisiones) {
		this.numeroMisiones = numeroMisiones;
	}

	public int getNumeroEnemigosDerrotados() {
		return numeroEnemigosDerrotados;
	}


	public void setNumeroEnemigosDerrotados(int numeroEnemigosDerrotados) {
		this.numeroEnemigosDerrotados = numeroEnemigosDerrotados;
	}

	

	@Override
	public String toString() {
		return "JuegoAccion [numeroMisiones=" + numeroMisiones + ", numeroEnemigosDerrotados="
				+ numeroEnemigosDerrotados + ", toString()=" + super.toString() + "]";
	}


	@Override
	public double calcularPuntuacionFinal() {
		return getPuntuacionBase() + numeroMisiones + (numeroEnemigosDerrotados / 10.0);
	}

}
