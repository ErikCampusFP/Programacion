import java.util.ArrayList;

public class Principal {

	public static void main(String[] args) {
		
        Empleado empleado1 = null;
		Tarea tarea1 = null;
		Tarea tarea2 = null;

        
		
		// Creación de Empleados
		try {
			empleado1 = new Empleado (1, "Carlos Rodriguez", "Supervisor", "carlos23R@gmail.com", "651234598");
		} catch (TelephoneException e) {
			e.printStackTrace(); // Muestra en pantalla el error, sin abortar el programa
		}
		
		Empleado empleado2 = new Empleado(2, "Laura Gomez", "Desarrolladora");
		
        // Mostrar resultado
        System.out.println(empleado1);
        System.out.println(empleado2);
        System.out.println(" ");


		// Creación Tarea
		try {
			tarea1 = new Tarea(1, "Diseñar base de datos", "Alta", "Modelar el esquema relacional", empleado2, 16);
		} catch (TelephoneException e) {
			e.printStackTrace();
		}

		
		try {
			tarea2 = new Tarea(2, "Revisar documentación", "Baja", "Revisar la documentación del cliente", empleado2, 15);
		} catch (TelephoneException e) {
			e.printStackTrace();
		}
		
        // Mostrar resultado
        System.out.println(tarea1);
        System.out.println(tarea2);
        System.out.println(" ");


		
		// Lista de tareas
        ArrayList<Tarea> listaTareas = new ArrayList<>();
        listaTareas.add(tarea1);
        listaTareas.add(tarea2);

        // Creación del Proyecto
        Proyecto proyecto1 = new Proyecto(
            "Sistema Gestión",
            "Proyecto para gestionar tareas y empleados",
            listaTareas
        );
        
        // Mostrar resultado
        System.out.println(proyecto1);


	}

}
