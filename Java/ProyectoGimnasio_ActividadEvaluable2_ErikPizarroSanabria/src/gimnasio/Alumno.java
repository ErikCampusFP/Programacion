package gimnasio;

import java.time.LocalDate;
import java.util.Map;

public class Alumno extends Usuario {

    private LocalDate fechaAlta;

    // Constructor
    public Alumno(String dni, String nombre, String telefono, LocalDate fechaAlta) {
        super(dni, nombre, telefono);
        this.fechaAlta = fechaAlta;
    }

    // Getter y Setter
    public LocalDate getFechaAlta() {
        return fechaAlta;
    }

    public void setFechaAlta(LocalDate fechaAlta) {
        this.fechaAlta = fechaAlta;
    }

    @Override
    public Map<Integer, Reserva> getReservas(Gimnasio gimnasio) {
        return gimnasio.getReservasAlumno(this.getDni());
    }

    @Override
    public String toString() {
        return super.toString() + "\nFecha alta: " + fechaAlta;
    }
}