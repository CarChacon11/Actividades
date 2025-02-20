public class Persona {
    String nombre;
    public void saludar() {
        System.out.println("Hola, soy " + nombre);
    }
    public static void main(String[] args) {
        Persona persona = new Persona();
        persona.nombre = "Carmen";
        persona.saludar();
    }
}