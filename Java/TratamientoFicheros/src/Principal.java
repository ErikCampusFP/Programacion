import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;

public class Principal {

	/*
	public static void main(String[] args) {
		try {
			FileWriter myWriter = new FileWriter("filename.txt", true); // El true es como un append, sirve para que se escriba sin sobrescribir
			myWriter.write("Files in Java might be tricky, but it is fun enough!");
			myWriter.close(); // must close manually
			System.out.println("Successfully wrote to the file.");
			
		} catch (IOException e) {
			System.out.println("An error occurred.");
			e.printStackTrace();
		}
	}
	*/
	
	/*
	public static void main(String[] args) {
		// FileWriter will be closed automatically here
		try (FileWriter myWriter = new FileWriter("filename.txt")) {
			myWriter.write("Files in Java might be tricky, but it is fun enough!");
			System.out.println("Successfully wrote to the file.");
		} catch (IOException e) {
			System.out.println("An error occurred.");
			e.printStackTrace();
		}
	}
}
	*/
	
	/*
	  public static void main(String[] args) {
		    try (BufferedWriter bw = new BufferedWriter(new FileWriter("filename.txt"))) {
		      bw.write("First line");
		      bw.newLine();  // add line break
		      bw.write("Second line");
		      System.out.println("Successfully wrote to the file.");
		      
		    } catch (IOException e) {
		      System.out.println("Error writing file.");
		    }
		  }
		}
	*/
	
	public static void main(String[] args) {
	    try (BufferedReader br = new BufferedReader(new FileReader("filename.txt"))) {
	      String line;
	      while ((line = br.readLine()) != null) {
	        System.out.println(line);
	      }
	    } catch (IOException e) {
	      System.out.println("Error reading file.");
	    }
	  }
	}




