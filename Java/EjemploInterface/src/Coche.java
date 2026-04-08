
public class Coche implements Vehiculo {
	private String modelo;
	private int velocidad;
	
	

	public Coche(String modelo) {
		super();
		this.modelo = modelo;
		this.velocidad = 0;
	}

    @Override
    public String frenar(int cuanto) {
        this.velocidad -= cuanto;
        return "Vas a " + this.velocidad + " km/hora";
    }

	@Override
	public String acelerar(int cuanto) {
		this.velocidad += cuanto;
		if(this.velocidad > VELOCIDAD_MAXIMA) {
			return "Has sobrepasado la velocidad máxima, vas a " + this.velocidad + " km/hora";
		}
		return "Vas a " + this.velocidad + " km/hora";
	}

	@Override
	public String toString() {
		return "Coche [modelo=" + modelo + ", velocidad=" + velocidad + "]";
	}
	

}
	