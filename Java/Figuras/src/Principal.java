
public class Principal {
	public static void main(String[] args) {
		Figura dibujo[] = {
			new Rectangulo(12,80, 100, 200),
			new Circuferencia(100, 12, 50),
			new Triangulo(30, 60, 10, 12),
			new Rectangulo(400, 100, 30, 90),
			new Triangulo(90, 12, 7, 7)
		};
		
		for (Figura f : dibujo) {
			System.out.println(f);
		}
	}
}