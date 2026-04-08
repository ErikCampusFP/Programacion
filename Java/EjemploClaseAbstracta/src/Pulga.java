
public class Pulga extends Animal {

	public Pulga () {
		super("Pulga");
		// TODO Auto-generated constructor stub
	}

	@Override
	public String morder(Animal ani) {
		// TODO Auto-generated method stub
		return "Pulga muerde a " + ani.getNombre();
	}

	@Override
	public String mover() {
		// TODO Auto-generated method stub
		return "La pulga se ha movido";
	}


}
