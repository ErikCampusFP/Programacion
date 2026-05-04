package gimnasio;

import java.time.LocalDate;
import java.util.ArrayList;

/**
 * Clase que representa una reserva en el gimnasio.
 * Cada reserva está asociada a un alumno, un entrenador,
 * una fecha y una lista de ejercicios.
 */
public class Reserva {

    private int id;
    private Entrenador entrenador;
    private Alumno alumno;
    private LocalDate fecha;
    private ArrayList<String> ejercicios;

    /**
     * Constructor de la clase Reserva.
     * 
     * @param id identificador de la reserva
     * @param entrenador entrenador asignado a la reserva
     * @param alumno alumno que realiza la reserva
     * @param fecha fecha de la reserva
     */
    public Reserva(int id, Entrenador entrenador, Alumno alumno, LocalDate fecha) {
        this.id = id;
        this.entrenador = entrenador;
        this.alumno = alumno;
        this.fecha = fecha;
        this.ejercicios = new ArrayList<>();
    }

    /**
     * Obtiene el identificador de la reserva.
     * 
     * @return id de la reserva
     */
    public int getId() {
        return id;
    }

    /**
     * Obtiene el entrenador asociado a la reserva.
     * 
     * @return entrenador de la reserva
     */
    public Entrenador getEntrenador() {
        return entrenador;
    }

    /**
     * Establece el entrenador de la reserva.
     * 
     * @param entrenador nuevo entrenador
     */
    public void setEntrenador(Entrenador entrenador) {
        this.entrenador = entrenador;
    }

    /**
     * Obtiene el alumno asociado a la reserva.
     * 
     * @return alumno de la reserva
     */
    public Alumno getAlumno() {
        return alumno;
    }

    /**
     * Establece el alumno de la reserva.
     * 
     * @param alumno nuevo alumno
     */
    public void setAlumno(Alumno alumno) {
        this.alumno = alumno;
    }

    /**
     * Obtiene la fecha de la reserva.
     * 
     * @return fecha de la reserva
     */
    public LocalDate getFecha() {
        return fecha;
    }

    /**
     * Establece la fecha de la reserva.
     * 
     * @param fecha nueva fecha
     */
    public void setFecha(LocalDate fecha) {
        this.fecha = fecha;
    }

    /**
     * Obtiene la lista de ejercicios de la reserva.
     * 
     * @return lista de ejercicios
     */
    public ArrayList<String> getEjercicios() {
        return ejercicios;
    }

    /**
     * Establece la lista de ejercicios de la reserva.
     * 
     * @param ejercicios nueva lista de ejercicios
     */
    public void setEjercicios(ArrayList<String> ejercicios) {
        this.ejercicios = ejercicios;
    }

    /**
     * Añade un ejercicio a la reserva.
     * 
     * @param ejercicio ejercicio a añadir
     */
    public void addEjercicio(String ejercicio) {
        ejercicios.add(ejercicio);
    }

    /**
     * Devuelve una representación en texto de la reserva.
     * 
     * @return información de la reserva en formato String
     */
    @Override
    public String toString() {
        return "Reserva ID: " + id +
               "\nFecha: " + fecha +
               "\nEntrenador: " + entrenador.getNombre() +
               "\nAlumno: " + alumno.getNombre() +
               "\nEjercicios: " + ejercicios;
    }
}