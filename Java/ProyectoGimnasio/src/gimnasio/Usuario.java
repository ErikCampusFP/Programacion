package gimnasio;

import java.util.Map;

/**
 * Clase abstracta que representa un usuario del gimnasio.
 * Sirve como clase base para Alumno y Entrenador.
 */
public abstract class Usuario {

    private String dni;
    private String nombre;
    private String telefono;

    /**
     * Constructor de la clase Usuario.
     * 
     * @param dni DNI del usuario
     * @param nombre nombre del usuario
     * @param telefono teléfono de contacto del usuario
     */
    public Usuario(String dni, String nombre, String telefono) {
        this.dni = dni;
        this.nombre = nombre;
        this.telefono = telefono;
    }

    /**
     * Obtiene el DNI del usuario.
     * 
     * @return DNI del usuario
     */
    public String getDni() {
        return dni;
    }

    /**
     * Establece el DNI del usuario.
     * 
     * @param dni nuevo DNI
     */
    public void setDni(String dni) {
        this.dni = dni;
    }

    /**
     * Obtiene el nombre del usuario.
     * 
     * @return nombre del usuario
     */
    public String getNombre() {
        return nombre;
    }

    /**
     * Establece el nombre del usuario.
     * 
     * @param nombre nuevo nombre
     */
    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    /**
     * Obtiene el teléfono del usuario.
     * 
     * @return teléfono del usuario
     */
    public String getTelefono() {
        return telefono;
    }

    /**
     * Establece el teléfono del usuario.
     * 
     * @param telefono nuevo teléfono
     */
    public void setTelefono(String telefono) {
        this.telefono = telefono;
    }

    /**
     * Obtiene las reservas del usuario en un gimnasio.
     * Este método debe ser implementado por las clases hijas.
     * 
     * @param gimnasio gimnasio del que se obtienen las reservas
     * @return mapa de reservas del usuario
     */
    public abstract Map<Integer, Reserva> getReservas(Gimnasio gimnasio);

    /**
     * Devuelve una representación en texto del usuario.
     * 
     * @return información básica del usuario
     */
    @Override
    public String toString() {
        return "DNI: " + dni +
               "\nNombre: " + nombre +
               "\nTeléfono: " + telefono;
    }
}