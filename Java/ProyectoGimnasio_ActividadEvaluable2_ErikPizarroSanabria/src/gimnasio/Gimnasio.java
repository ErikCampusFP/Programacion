package gimnasio;

import java.time.LocalDate;
import java.util.HashMap;
import java.util.Map;

public class Gimnasio implements IGimnasio {

    private String nombre;
    private Map<Integer, Reserva> reservas;

    public Gimnasio(String nombre) {
        this.nombre = nombre;
        this.reservas = new HashMap<>();
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public Map<Integer, Reserva> getReservas() {
        return reservas;
    }

    public void setReservas(Map<Integer, Reserva> reservas) {
        this.reservas = reservas;
    }

    @Override
    public String toString() {
    	return null;
    }
}