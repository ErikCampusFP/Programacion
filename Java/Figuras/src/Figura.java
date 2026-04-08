
public abstract class Figura {
	private int coordenadaX;
	private int coordenadaY;
	
	
	public Figura(int coordenadaX, int coordenadaY) {
		super();
		this.coordenadaX = coordenadaX;
		this.coordenadaY = coordenadaY;
	}


	public int getCoordenadaX() {
		return coordenadaX;
	}


	public void setCoordenadaX(int coordenadaX) {
		this.coordenadaX = coordenadaX;
	}


	public int getCoordenadaY() {
		return coordenadaY;
	}


	public void setCoordenadaY(int coordenadaY) {
		this.coordenadaY = coordenadaY;
	}


	@Override
	public String toString() {
		return "Figura [coordenadaX=" + coordenadaX + ", coordenadaY=" + coordenadaY + "]";
	}
	
	
	
	// Métodos abstractos
	// Se implementan en las clases derivadas.
	public abstract double area();
	
	
}
