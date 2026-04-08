
public class Principal {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Animal a1 = new Tiranosaurio();
		Animal a2 = new Pulga();
		System.out.println(a1.morder(a2));
		System.out.println(a2.morder(a1));
		System.out.println(a1.mover());
		
	}

}
				