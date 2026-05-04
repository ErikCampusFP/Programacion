package gimnasio;

import java.time.LocalDate;
import java.util.Map;

/**
 * Interfaz que define las operaciones básicas para la gestión
 * de reservas en un gimnasio.
 */
public interface IGimnasio {

    /**
     * Añade una nueva reserva al gimnasio.
     * 
     * @param reserva la reserva a añadir
     * @return true si se añade correctamente, false si es nula o ya existe
     */
    boolean addReserva(Reserva reserva);

    /**
     * Cancela una reserva existente.
     * 
     * @param idReserva identificador de la reserva
     * @return true si se elimina correctamente, false si no existe
     */
    boolean cancelarReserva(int idReserva);

    /**
     * Obtiene todas las reservas del gimnasio.
     * 
     * @return mapa con todas las reservas
     */
    Map<Integer, Reserva> getAllReservas();

    /**
     * Obtiene las reservas de un alumno específico.
     * 
     * @param dniAlumno DNI del alumno
     * @return mapa de reservas asociadas al alumno
     */
    Map<Integer, Reserva> getReservasAlumno(String dniAlumno);

    /**
     * Obtiene las reservas de un entrenador específico.
     * 
     * @param dniEntrenador DNI del entrenador
     * @return mapa de reservas asociadas al entrenador
     */
    Map<Integer, Reserva> getReservasEntrenador(String dniEntrenador);

    /**
     * Obtiene las reservas de una fecha concreta.
     * 
     * @param fecha fecha de las reservas
     * @return mapa de reservas en esa fecha
     */
    Map<Integer, Reserva> getReservasPorFecha(LocalDate fecha);

    /**
     * Comprueba si existe una reserva con un identificador dado.
     * 
     * @param idReserva identificador de la reserva
     * @return true si existe, false en caso contrario
     */
    boolean existeReserva(int idReserva);
}