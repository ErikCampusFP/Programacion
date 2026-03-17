
public class Coche {
	private String matricula;
	private String marca;
	private String modelo;
	private Motor motor;
	
	public Coche(String matricula, String marca, String modelo, 
          int caballos, int tipoCombustible) {
		this.matricula = matricula;
		this.marca = marca;
		this.modelo = modelo;
		this.motor = new Motor(caballos, tipoCombustible);
	}

	public String estado() {
		return "Matricula=" + matricula + ", Marca=" + marca + 
			  ", Modelo=" + modelo + ", Caballos=" + 
			   motor.getCaballos() +
			  ", Tipo Combustible=" + motor.getTipoCombustible();
	}
}
