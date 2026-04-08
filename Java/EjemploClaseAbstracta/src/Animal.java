/* 
   Esta es una clase abstracta.
   Sólo puede ser usada para crear clases derivadas
*/

public abstract class Animal {
	private String nombre;
	
	public Animal(String n) {
		this.nombre = n;
	}
	

	
	public String getNombre() {
		return nombre;
	}
	
	@Override
	public String toString() {
		return "Saludos desde Animal";
	}

	// Métodos abstractos
	// Se implementan en las clases derivadas.
	public abstract String morder(Animal ani);
	public abstract String mover();
	
	
}
