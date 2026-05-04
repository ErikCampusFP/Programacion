package gimnasio;

import java.time.LocalDate;
import java.util.HashMap;
import java.util.Map;

/**
 * Clase que representa un gimnasio y gestiona las reservas asociadas.
 */
public class Gimnasio implements IGimnasio {

    private String nombre;
    private Map<Integer, Reserva> reservas;

    /**
     * Constructor de la clase Gimnasio.
     * 
     * @param nombre Nombre del gimnasio
     */
    public Gimnasio(String nombre) {
        this.nombre = nombre;
        this.reservas = new HashMap<>();
    }

    /**
     * Obtiene el nombre del gimnasio.
     * 
     * @return nombre del gimnasio
     */
    public String getNombre() {
        return nombre;
    }

    /**
     * Establece el nombre del gimnasio.
     * 
     * @param nombre nuevo nombre del gimnasio
     */
    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    /**
     * Obtiene el mapa de reservas.
     * 
     * @return mapa de reservas
     */
    public Map<Integer, Reserva> getReservas() {
        return reservas;
    }

    /**
     * Establece el mapa de reservas.
     * 
     * @param reservas nuevo mapa de reservas
     */
    public void setReservas(Map<Integer, Reserva> reservas) {
        this.reservas = reservas;
    }

    /**
     * Devuelve una representación en forma de texto del gimnasio.
     * 
     * @return representación en String del gimnasio
     */
    @Override
    public String toString() {
        return null;
    }
    
    /**
     * Añade una nueva reserva al gimnasio.
     * 
     * @param reserva la reserva a añadir
     * @return true si se añade correctamente, false si es nula o ya existe
     */
    @Override
    public boolean addReserva(Reserva reserva) {
        if (reserva == null || existeReserva(reserva.getId())) {
            return false;
        }
        reservas.put(reserva.getId(), reserva);
        return true;
    }

    /**
     * Cancela una reserva existente.
     * 
     * @param idReserva identificador de la reserva
     * @return true si se elimina correctamente, false si no existe
     */
    @Override
    public boolean cancelarReserva(int idReserva) {
        if (!existeReserva(idReserva)) {
            return false;
        }
        reservas.remove(idReserva);
        return true;
    }

    /**
     * Obtiene todas las reservas del gimnasio.
     * 
     * @return copia del mapa de reservas
     */
    @Override
    public Map<Integer, Reserva> getAllReservas() {
        return new HashMap<>(reservas);
    }

    /**
     * Obtiene las reservas asociadas a un alumno concreto.
     * 
     * @param dniAlumno DNI del alumno
     * @return mapa de reservas del alumno
     */
    @Override
    public Map<Integer, Reserva> getReservasAlumno(String dniAlumno) {
        Map<Integer, Reserva> resultado = new HashMap<>();
 
        for (Map.Entry<Integer, Reserva> entry : reservas.entrySet()) {
            Reserva reserva = entry.getValue();
            if (reserva.getAlumno().getDni().equals(dniAlumno)) {
                resultado.put(entry.getKey(), reserva);
            }
        }
        return resultado;
    }

    /**
     * Obtiene las reservas asociadas a un entrenador concreto.
     * 
     * @param dniEntrenador DNI del entrenador
     * @return mapa de reservas del entrenador
     */
    @Override
    public Map<Integer, Reserva> getReservasEntrenador(String dniEntrenador) {
        Map<Integer, Reserva> resultado = new HashMap<>();

        for (Map.Entry<Integer, Reserva> entry : reservas.entrySet()) {
            Reserva reserva = entry.getValue();
            if (reserva.getEntrenador().getDni().equals(dniEntrenador)) {
                resultado.put(entry.getKey(), reserva);
            }
        }
        return resultado;
    }

    /**
     * Obtiene las reservas para una fecha concreta.
     * 
     * @param fecha fecha de las reservas
     * @return mapa de reservas en esa fecha
     */
    @Override
    public Map<Integer, Reserva> getReservasPorFecha(LocalDate fecha) {
        Map<Integer, Reserva> resultado = new HashMap<>();
 
        for (Map.Entry<Integer, Reserva> entry : reservas.entrySet()) {
            Reserva reserva = entry.getValue();
            if (reserva.getFecha().equals(fecha)) {
                resultado.put(entry.getKey(), reserva);
            }
        }
        return resultado;
    }

    /**
     * Comprueba si existe una reserva con un identificador dado.
     * 
     * @param idReserva identificador de la reserva
     * @return true si existe, false en caso contrario
     */
    @Override
    public boolean existeReserva(int idReserva) {
        return reservas.get(idReserva) != null; // Devuelve null si no lo encuentra
    }
}