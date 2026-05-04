public class Principal {
    public static void main(String[] args) {
        // Ejemplo con Integer
        Calculadora<Integer> calcEnteros = new Calculadora<>(5, 3);
        System.out.println("Suma de enteros: " + calcEnteros.suma());


        // Ejemplo con Float
        Calculadora<Float> calcDecimales = new Calculadora<>(2.345f, 1.234f);
        System.out.println("Suma de decimales (redondeado): " + calcDecimales.suma());


        // Ejemplo con String
        Calculadora<String> calcCadenas = new Calculadora<>("Hola ", "mundo");
        System.out.println("Concatenación de cadenas: " + calcCadenas.suma());
    }
}