import java.util.ArrayList;
import java.util.HashMap;
import java.util.HashSet;
import java.util.LinkedList;
import java.util.List;
import java.util.Map;
import java.util.Queue;
import java.util.Set;
import java.util.TreeSet;
import java.util.Vector;

public class Principal {

	public static void main(String[] args) {
		ArrayList<String> listaP = new ArrayList<String>(); // Lista de Objetos
		
		/*
		 * ---------------------------------------------------- ARRAYLIST -------------------------------------------------
		List<String> lista2 = new ArrayList<String>(); // List es un objeto polimorfico, por lo cual sirve para hacer polimorfismo
		lista2.add("Pepe");
		lista2.add("Juan");
		lista2.add("Enrique");
		lista2.add("Antonio");
		lista2.add("Pepa");
		lista2.add("Eva");
		lista2.add("Carlos");
		lista2.add("Antonio");
		lista2.add("Samuel");
		
		for (String l: lista2) {
			System.out.println(l);
		}
		*/
		
		/*
		 * ----------------------------------------------- VECTOR -------------------------------------------------
		List<String> lista = new Vector<String>(); // Vector es más agil que arrayList y permite hacer multitarea
		lista.add("Pepe");
		lista.add("Juan");
		lista.add("Enrique");
		lista.add("Antonio");
		lista.add("Pepa");
		lista.add("Eva");
		lista.add("Carlos");
		lista.add("Antonio");
		lista.add("Samuel");
		
		for (String l: lista) {
			System.out.println(l);
		}
		
		System.out.println("Elementos: "+ lista.size());
		System.out.println(lista.get(3));
		System.out.println(" ");
		
		for(int i=0; i<lista.size(); i++) {
			System.out.println(i+ " "+ lista.get(i));
		}
		
		lista.remove(0); // Podemos eliminar por posición
		lista.remove("Antonio"); // O indicamos el objeto
		System.out.println(lista);
		 */
		
		/*
		*----------------------------------------------- QUEUE ---------------------------------------
		Queue<String> lista = new LinkedList<String>(); // Queue es una cola (cola de supermercado)
		lista.add("Pepe");
		lista.add("Juan");
		lista.add("Enrique");
		lista.add("Antonio");
		lista.add("Pepa");
		lista.add("Eva");
		lista.add("Carlos");
		lista.add("Antonio");
		lista.add("Samuel");
		
		for (String l: lista) {
			System.out.println(l);
		}
		
		lista.remove(); // Borra el primer elemento de la lista
		System.out.println(lista);
		*/
		
		/*
		*----------------------------------------------- HASHSET ---------------------------------------
		Set<String> lista = new HashSet<String>(); // Es un tipo de colección que no admiten duplicados
		lista.add("Pepe");
		lista.add("Juan");
		lista.add("Enrique");
		lista.add("Antonio");
		lista.add("Pepa");
		lista.add("Eva");
		lista.add("Carlos");
		lista.add("Antonio");
		lista.add("Samuel");
		
		System.out.println(lista);
		*/
		
		/*
		*----------------------------------------------- TREESET ---------------------------------------
		Set<String> lista = new TreeSet<String>(); // Es un tipo de colección que ordena alfabeticamente los elementos
		lista.add("Pepe");
		lista.add("Juan");
		lista.add("Enrique");
		lista.add("Antonio");
		lista.add("Pepa");
		lista.add("Eva");
		lista.add("Carlos");
		lista.add("Antonio");
		lista.add("Samuel");
		
		System.out.println(lista);
		*/
		
		
		Map<String, String> nombres = new HashMap<String, String>(); // HashMap es un diccionario la cual se indica como clave - valor
        
        nombres.put("51666443R", "Carlos Maldonado Gómez");
        // Luis sustituye a carlos, ya que poseen la misma clave
        nombres.put("51666443R", "Luis Santos Gómez");
        nombres.put("52664443A", "Alicia Torres Durán");
        nombres.put("31234443H", "Soledad Delgado Perico");
        nombres.put("45666443R", "Miguel Rubio gonzález");
        nombres.put("82333333T", "Alicia Pimiento Pérez");
        nombres.put("51777788Z", "Angel Ruiz Califato");
        nombres.put("91549494P", "Fernándo García Solera");
        
        // Acceder a un elemento por la clave
        System.out.println(nombres.get("31234443H"));
        System.out.println(nombres);
        
        Set<String> llaves = nombres.keySet();
        
        for(String n: llaves) {
        	System.out.println(n + " - "+ nombres.get(n));
        }

	}

}
