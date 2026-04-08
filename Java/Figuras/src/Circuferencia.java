
public class Circuferencia extends Figura {
	private float radio;
	
	public Circuferencia(int coordenadaX, int coordenadaY, float radio) {
		super(coordenadaX, coordenadaY);
		this.radio = radio;
	}

	@Override
	public double area() {
		// TODO Auto-generated method stub
		return Math.PI * (radio * radio);
	}

	@Override
	public String toString() {
		return "Circuferencia [radio=" + radio + ", toString()=" + super.toString() + "]";
	}
	
	
	
	

}
