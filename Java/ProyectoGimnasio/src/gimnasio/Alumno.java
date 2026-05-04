package gimnasio;

import java.time.LocalDate;
import java.util.Map;

/**
 * Clase que representa a un alumno del gimnasio.
 * Hereda de la clase Usuario y añade la fecha de alta.
 */
public class Alumno extends Usuario {

    private LocalDate fechaAlta;

    /**
     * Constructor de la clase Alumno.
     * 
     * @param dni DNI del alumno
     * @param nombre nombre del alumno
     * @param telefono teléfono del alumno
     * @param fechaAlta fecha de alta en el gimnasio
     */
    public Alumno(String dni, String nombre, String telefono, LocalDate fechaAlta) {
        super(dni, nombre, telefono);
        this.fechaAlta = fechaAlta;
    }

    /**
     * Obtiene la fecha de alta del alumno.
     * 
     * @return fecha de alta
     */
    public LocalDate getFechaAlta() {
        return fechaAlta;
    }

    /**
     * Establece la fecha de alta del alumno.
     * 
     * @param fechaAlta nueva fecha de alta
     */
    public void setFechaAlta(LocalDate fechaAlta) {
        this.fechaAlta = fechaAlta;
    }

    /**
     * Obtiene las reservas asociadas a este alumno en un gimnasio.
     * 
     * @param gimnasio gimnasio del que se quieren obtener las reservas
     * @return mapa de reservas del alumno
     */
    @Override
    public Map<Integer, Reserva> getReservas(Gimnasio gimnasio) {
        return gimnasio.getReservasAlumno(this.getDni());
    }

    /**
     * Devuelve una representación en forma de texto del alumno,
     * incluyendo la información heredada y la fecha de alta.
     * 
     * @return representación en String del alumno
     */
    @Override
    public String toString() {
        return super.toString() + "\nFecha alta: " + fechaAlta;
    }
}