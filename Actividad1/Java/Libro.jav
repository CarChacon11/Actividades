public class Libro {
    String titulo;
    String autor;

    public Libro(String titulo, String autor) {
        this.titulo = titulo;
        this.autor = autor;
    }

    public void mostrarInfo() {
        System.out.println("Libro: " + titulo + ", Autor: " + autor);
    }

    public static void main(String[] args) {
        Libro libro = new Libro("1984", "George Orwell");
        libro.mostrarInfo();
    }
}