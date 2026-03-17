package zoo.animales;

public class Gato {
    private String raza;
    private int peso;
    private int mesNacimiento;
    private int anioNacimiento;
    private int diaNacimiento;

    public Gato(String raza, int peso, int mesNacimiento,
                int anioNacimiento, int diaNacimiento) {

        this.raza = raza;
        this.peso = peso;
        this.mesNacimiento = mesNacimiento;
        this.anioNacimiento = anioNacimiento;
        this.diaNacimiento = diaNacimiento;
    }

    public String estado() {
        return "Gato " + raza + " " + peso + " kilos, nacido el "
                + diaNacimiento + "/" + mesNacimiento + "/"
                + anioNacimiento;
    }
}