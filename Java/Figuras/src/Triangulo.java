
public class Triangulo extends Figura {
	private float base;
	private float altura;
	
	public Triangulo(int coordenadaX, int coordenadaY, float base, float altura) {
		super(coordenadaX, coordenadaY);
		this.base = base;
		this.altura = altura;
	}

	@Override
	public String toString() {
		return "Rectangulo [base=" + base + ", altura=" + altura + ", toString()=" + super.toString() + "]";
	}
	
	@Override
	public double area() {
		// TODO Auto-generated method stub
		return (base * altura)/2 ;
	}

}