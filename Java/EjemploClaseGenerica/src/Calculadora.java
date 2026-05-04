public class Calculadora<T> {
    private T a;
    private T b;


    public Calculadora(T a, T b) {
        this.a = a;
        this.b = b;
    }


    public Object suma() {
        if (a instanceof Integer) {
            return (Integer) a + (Integer) b;
        } else if (a instanceof Float) {
            float resultado = (Float) a + (Float) b;
            return Math.round(resultado * 100) / 100f;
        } else if (a instanceof String) {
            return (String) a + (String) b;
        }
        return null;
    }
    public T getA() {
        return a;
    }
    public T getB() {
        return b;
    }
}
