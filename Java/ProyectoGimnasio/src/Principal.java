
import java.time.LocalDate;
import java.util.Map;

import gimnasio.*;


public class Principal {

    public static void main(String[] args) {
        
        // Generamos Alumnos
        Alumno alumno1 = new Alumno("12345678A", "Ana Garcia", "612345678", LocalDate.of(2023, 1, 15));
        Alumno alumno2 = new Alumno("87654321B", "Luis Martin", "698765432", LocalDate.of(2024, 3, 10));
        
        // Mostrar resultado
        System.out.println("=== ALUMNOS ===");
        System.out.println(alumno1);
        System.out.println(" ");
        System.out.println(alumno2);
        System.out.println(" ");

        // Generamos Entrenadores
        Entrenador entrenador1 = new Entrenador("11111111C", "Carlos Ruiz", "611111111", LocalDate.of(2020, 6, 1), 35.0);
        Entrenador entrenador2 = new Entrenador("22222222D", "Maria Lopez", "622222222", LocalDate.of(2021, 9, 15), 40.0);
        
        // Mostrar resultado
        System.out.println("=== ENTRENADORES ===");
        System.out.println(entrenador1);
        System.out.println(" ");
        System.out.println(entrenador2);
        System.out.println(" ");
        
        // Generamos elemento gimnasio y reserva
        Gimnasio gimnasio = new Gimnasio("FitZone");
        Reserva reserva1 = new Reserva(1, entrenador1, alumno1, LocalDate.of(2025, 5, 10));
        reserva1.addEjercicio("Sentadillas");
        reserva1.addEjercicio("Press banca");

        Reserva reserva2 = new Reserva(2, entrenador1, alumno2, LocalDate.of(2025, 5, 10));
        reserva2.addEjercicio("Dominadas");
        
        // Añadimos al gimnasio una reserva 2 veces (para mostrar resultado que permite que no se dupliquen)
        System.out.println("=== RESERVAS (DUPLICADAS) ===");
        System.out.println("Añadir reserva 1: " + gimnasio.addReserva(reserva1));
        System.out.println("Añadir reserva 1 duplicada: " + gimnasio.addReserva(reserva1));
        System.out.println("Añadir reserva 2: " + gimnasio.addReserva(reserva2));
        System.out.println(" ");
        
        // Mostramos las reservas que se han generado al final
        System.out.println("=== TODAS LAS RESERVAS DEL GIMNASIO ===");

        for (Reserva r : gimnasio.getAllReservas().values()) {
            System.out.println(r);
            System.out.println("-------------");
        }
        System.out.println(" ");

        // Mostramos datos del alumno1 almacenado en gimnasio (mostramos sus datos, su entrenador y sus ejercicios)
        System.out.println("=== DATOS ALUMNO1 (Ana Garcia) ===");
        Map<Integer, Reserva> resAlumno = gimnasio.getReservasAlumno(alumno1.getDni());
        for (Reserva r : resAlumno.values()) {
            System.out.println(r);
        }
        System.out.println(" ");
        
        // Cancelamos reserva2 2 veces para demostrar que no se genera error
        System.out.println("=== CANCELAR RESERVAS (DUPLICADAS) ===");
        System.out.println("Cancelar reserva 2: " + gimnasio.cancelarReserva(2));
        System.out.println("Cancelar reserva 2 otra vez: " + gimnasio.cancelarReserva(2));
        System.out.println(" ");
        
        // Mostramos las reservas para comprobar que se ha borrado correctamente
        System.out.println("=== TODAS LAS RESERVAS DEL GIMNASIO ===");

        for (Reserva r : gimnasio.getAllReservas().values()) {
            System.out.println(r);
            System.out.println("-------------");
        }
        System.out.println(" ");
        

        
    }
}