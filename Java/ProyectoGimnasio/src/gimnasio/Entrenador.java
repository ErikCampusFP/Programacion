package gimnasio;

import java.time.LocalDate;
import java.util.Map;

/**
 * Clase que representa a un entrenador del gimnasio.
 * Hereda de la clase Usuario y añade información específica
 * como la fecha de ingreso y el precio por entrenamiento.
 */
public class Entrenador extends Usuario {

    private LocalDate fechaIngreso;
    private double precioEntrenamiento;

    /**
     * Constructor de la clase Entrenador.
     * 
     * @param dni DNI del entrenador
     * @param nombre nombre del entrenador
     * @param telefono teléfono del entrenador
     * @param fechaIngreso fecha de ingreso en el gimnasio
     * @param precioEntrenamiento precio por sesión de entrenamiento
     */
    public Entrenador(String dni, String nombre, String telefono, LocalDate fechaIngreso, double precioEntrenamiento) {
        super(dni, nombre, telefono);
        this.fechaIngreso = fechaIngreso;
        this.precioEntrenamiento = precioEntrenamiento;
    }

    /**
     * Obtiene la fecha de ingreso del entrenador.
     * 
     * @return fecha de ingreso
     */
    public LocalDate getFechaIngreso() {
        return fechaIngreso;
    }

    /**
     * Establece la fecha de ingreso del entrenador.
     * 
     * @param fechaIngreso nueva fecha de ingreso
     */
    public void setFechaIngreso(LocalDate fechaIngreso) {
        this.fechaIngreso = fechaIngreso;
    }

    /**
     * Obtiene el precio por entrenamiento del entrenador.
     * 
     * @return precio por entrenamiento
     */
    public double getPrecioEntrenamiento() {
        return precioEntrenamiento;
    }

    /**
     * Establece el precio por entrenamiento del entrenador.
     * 
     * @param precioEntrenamiento nuevo precio por entrenamiento
     */
    public void setPrecioEntrenamiento(double precioEntrenamiento) {
        this.precioEntrenamiento = precioEntrenamiento;
    }

    /**
     * Obtiene las reservas asociadas a este entrenador en un gimnasio.
     * 
     * @param gimnasio gimnasio del que se quieren obtener las reservas
     * @return mapa de reservas del entrenador
     */
    @Override
    public Map<Integer, Reserva> getReservas(Gimnasio gimnasio) {
        return gimnasio.getReservasEntrenador(this.getDni());
    }

    /**
     * Devuelve una representación en forma de texto del entrenador,
     * incluyendo la información heredada y sus atributos propios.
     * 
     * @return representación en String del entrenador
     */
    @Override
    public String toString() {
        return super.toString() +
               "\nFecha ingreso: " + fechaIngreso +
               "\nPrecio entrenamiento: " + precioEntrenamiento;
    }
}