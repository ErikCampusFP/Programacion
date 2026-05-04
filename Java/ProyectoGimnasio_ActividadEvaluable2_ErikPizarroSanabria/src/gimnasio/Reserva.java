package gimnasio;

import java.time.LocalDate;
import java.util.ArrayList;

public class Reserva {

    private int id;
    private Entrenador entrenador;
    private Alumno alumno;
    private LocalDate fecha;
    private ArrayList<String> ejercicios;

    // Constructor
    public Reserva(int id, Entrenador entrenador, Alumno alumno, LocalDate fecha) {
        this.id = id;
        this.entrenador = entrenador;
        this.alumno = alumno;
        this.fecha = fecha;
        this.ejercicios = new ArrayList<>();
    }

    // Getters y Setters
    public int getId() {
        return id;
    }

    public Entrenador getEntrenador() {
        return entrenador;
    }

    public void setEntrenador(Entrenador entrenador) {
        this.entrenador = entrenador;
    }

    public Alumno getAlumno() {
        return alumno;
    }

    public void setAlumno(Alumno alumno) {
        this.alumno = alumno;
    }

    public LocalDate getFecha() {
        return fecha;
    }

    public void setFecha(LocalDate fecha) {
        this.fecha = fecha;
    }

    public ArrayList<String> getEjercicios() {
        return ejercicios;
    }

    public void setEjercicios(ArrayList<String> ejercicios) {
        this.ejercicios = ejercicios;
    }

    // Método útil
    public void addEjercicio(String ejercicio) {
        ejercicios.add(ejercicio);
    }

    @Override
    public String toString() {
        return "Reserva ID: " + id +
               "\nFecha: " + fecha +
               "\nEntrenador: " + entrenador.getNombre() +
               "\nAlumno: " + alumno.getNombre() +
               "\nEjercicios: " + ejercicios;
    }
}