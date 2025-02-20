class Libro:
    def __init__(self, titulo, autor):
        self.titulo = titulo
        self.autor = autor

    def mostrar_info(self):
        return f"Libro: {self.titulo}, Autor: {self.autor}"

libro = Libro("El Principito", "Antoine de Saint-Exupéry")
print(libro.mostrar_info())