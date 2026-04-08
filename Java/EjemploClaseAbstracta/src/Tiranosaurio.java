
public class Tiranosaurio extends Animal {
	
	public Tiranosaurio() {
		super("Tiranosaurio");
	}

	@Override
	public String morder(Animal ani) {
		// TODO Auto-generated method stub
		return "Tiranosaurio muerde a " + ani.getNombre();
	}

	@Override
	public String mover() {
		// TODO Auto-generated method stub
		return "El tiranosaurio se ha movido";
	}

}
