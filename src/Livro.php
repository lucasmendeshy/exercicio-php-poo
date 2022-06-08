<?php
class Livro {
    private string $titulo;
    private string $autor;
    private int $paginas = 0;
    
    public function getTitulo():string{
        return $this->titulo;
    }

    public function getAutor():string{
        return $this->autor;
    }

    public function getPaginas():int{
        return $this->paginas;
    }

    public function setTitulo(string $titulo) {
        $this-> titulo = $titulo;
    }

    public function setAutor(string $autor) {
        $this-> autor = $autor;
    }

    public function setPaginas(int $paginas) {
        $this->paginas = $paginas;
    }

}


?>