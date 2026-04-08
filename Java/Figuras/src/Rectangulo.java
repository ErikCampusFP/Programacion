
public class Rectangulo extends Figura {
	private float lado1;
	private float lado2;
	
	public Rectangulo(int coordenadaX, int coordenadaY, float lado1, 
			float lado2) {
		super(coordenadaX, coordenadaY);
		this.lado1 = lado1;
		this.lado2 = lado2;
	}
	
	@Override
	public String toString() {
		return "Rectangulo [lado1=" + lado1 + ", lado2=" + lado2 + ", toString()=" + super.toString() + "]";
	}
	
	@Override
	public double area() {
		return lado1*lado2;
	}
}