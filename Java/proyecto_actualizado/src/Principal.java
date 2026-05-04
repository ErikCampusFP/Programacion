import java.util.ArrayList;

public class Principal {

	public static void main(String[] args) {
		
		// --- 1. Creación de empleados con try-catch ---
		Empleado empleado1 = null;
		Empleado empleado2 = null;
		
		try {
			empleado1 = new Empleado(1, "Carlos Rodriguez", "Supervisor", "carlos23R@gmail.com", "65123459");
			System.out.println("Empleado creado: " + empleado1);
		} catch (TelephoneException e) {
			System.err.println("Error al crear empleado1: " + e.getMessage());
		}
		
		// Constructor 2: sin teléfono ni email
		empleado2 = new Empleado(2, "Laura Gomez", "Desarrolladora");
		System.out.println("Empleado creado: " + empleado2);
		
		// Verificamos con aserción que los empleados se han creado correctamente
		assert empleado1 != null : "empleado1 no debería ser null";
		assert empleado1.getNombre().equals("Carlos Rodriguez") : "El nombre del empleado1 no coincide";
		assert empleado2 != null : "empleado2 no debería ser null";
		
		// --- 2. Creación de tareas ---
		// Tarea con tiempo estimado explícito
		Tarea tarea1 = new Tarea(1, "Diseñar base de datos", "Alta", "Modelar el esquema relacional", empleado1, 16);
		// Tarea sin tiempo estimado: usará DURACION_PREDETERMINADA (8h)
		Tarea tarea2 = new Tarea(2, "Revisar documentación", "Baja", "Revisar la documentación del cliente", empleado2);
		
		System.out.println("\nTarea creada: " + tarea1);
		System.out.println("Duración predeterminada usada: " + Tarea.DURACION_PREDETERMINADA + "h");
		System.out.println("Tarea creada: " + tarea2);
		
		// Aserciones sobre las tareas
		assert tarea1.getTiempoEstimado() == 16 : "El tiempo estimado de tarea1 debería ser 16";
		assert tarea2.getTiempoEstimado() == Tarea.DURACION_PREDETERMINADA : "tarea2 debería usar la duración predeterminada";
		assert !tarea1.isCompletada() : "Una tarea nueva no debería estar completada";
		
		// --- 3. Creación del Proyecto con ArrayList ---
		ArrayList<Tarea> listaTareas = new ArrayList<>();
		listaTareas.add(tarea1);
		listaTareas.add(tarea2);
		
		Proyecto proyecto = new Proyecto("Sistema de Gestión", "Plataforma interna de RRHH", listaTareas);
		System.out.println("\nProyecto creado: " + proyecto);
		
		// Aserción: el proyecto debe tener exactamente 2 tareas
		assert proyecto.getTareas().size() == 2 : "El proyecto debería tener 2 tareas";
		
		// --- 4. Marcar una tarea como completada y verificar ---
		tarea1.setCompletada(true);
		assert tarea1.isCompletada() : "tarea1 debería estar completada ahora";
		System.out.println("\nTarea1 marcada como completada.");
		System.out.println("Estado final tarea1: " + tarea1);
		
		// --- 5. Provocar excepción propia intencionadamente ---
		System.out.println("\n--- Prueba de TelephoneException ---");
		try {
			Empleado empleadoMalTelefono = new Empleado(3, "Pedro", "Técnico", "pedro@mail.com", "123"); // teléfono inválido
			System.out.println(empleadoMalTelefono);
		} catch (TelephoneException e) {
			System.err.println("Excepción capturada correctamente: " + e.getMessage());
		}
		
		System.out.println("\nPrograma finalizado correctamente.");
	}

}
