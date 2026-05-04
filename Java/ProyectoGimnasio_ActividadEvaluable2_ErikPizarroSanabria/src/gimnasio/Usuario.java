package gimnasio;

import java.util.Map;

public abstract class Usuario {

    private String dni;
    private String nombre;
    private String telefono;

    // Constructor
    public Usuario(String dni, String nombre, String telefono) {
        this.dni = dni;
        this.nombre = nombre;
        this.telefono = telefono;
    }

    // Getters y Setters
    public String getDni() {
        return dni;
    }

    public void setDni(String dni) {
        this.dni = dni;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public String getTelefono() {
        return telefono;
    }

    public void setTelefono(String telefono) {
        this.telefono = telefono;
    }

    // Método abstracto
    public abstract Map<Integer, Reserva> getReservas(Gimnasio gimnasio);

    // toString
    @Override
    public String toString() {
        return "DNI: " + dni +
               "\nNombre: " + nombre +
               "\nTeléfono: " + telefono;
    }
}