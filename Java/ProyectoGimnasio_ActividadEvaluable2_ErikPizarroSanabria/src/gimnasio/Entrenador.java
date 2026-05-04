package gimnasio;

import java.time.LocalDate;
import java.util.Map;

public class Entrenador extends Usuario {

    private LocalDate fechaIngreso;
    private double precioEntrenamiento;

    // Constructor
    public Entrenador(String dni, String nombre, String telefono, LocalDate fechaIngreso, double precioEntrenamiento) {
        super(dni, nombre, telefono);
        this.fechaIngreso = fechaIngreso;
        this.precioEntrenamiento = precioEntrenamiento;
    }

    // Getters y Setters
    public LocalDate getFechaIngreso() {
        return fechaIngreso;
    }

    public void setFechaIngreso(LocalDate fechaIngreso) {
        this.fechaIngreso = fechaIngreso;
    }

    public double getPrecioEntrenamiento() {
        return precioEntrenamiento;
    }

    public void setPrecioEntrenamiento(double precioEntrenamiento) {
        this.precioEntrenamiento = precioEntrenamiento;
    }

    @Override
    public Map<Integer, Reserva> getReservas(Gimnasio gimnasio) {
        return gimnasio.getReservasEntrenador(this.getDni());
    }

    @Override
    public String toString() {
        return super.toString() +
               "\nFecha ingreso: " + fechaIngreso +
               "\nPrecio entrenamiento: " + precioEntrenamiento;
    }
}