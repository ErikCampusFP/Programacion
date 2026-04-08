
public class JuegoDeporte extends Juego {
	private int partidosGanados;
	private int golesMarcados;
	
	
	public JuegoDeporte(String titulo, String empresa, int puntuacionBase, int partidosGanados, int golesMarcados) {
		super(titulo, empresa, puntuacionBase);
		this.partidosGanados = partidosGanados;
		this.golesMarcados = golesMarcados;
	}
	
	@Override
	public double calcularPuntuacionFinal() {
		return getPuntuacionBase() + (partidosGanados * 3) + (golesMarcados / 2.0);
	}

	public int getPartidosGanados() {
		return partidosGanados;
	}

	public void setPartidosGanados(int partidosGanados) {
		this.partidosGanados = partidosGanados;
	}

	public int getGolesMarcados() {
		return golesMarcados;
	}

	public void setGolesMarcados(int golesMarcados) {
		this.golesMarcados = golesMarcados;
	}

	@Override
	public String toString() {
		return "JuegoDeporte [partidosGanados=" + partidosGanados + ", golesMarcados=" + golesMarcados + ", toString()="
				+ super.toString() + "]";
	}
	
	
	
}
