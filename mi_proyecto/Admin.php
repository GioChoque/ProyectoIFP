<?php
include_once 'conexion.php';

class Admin {
    private $conexion;

    public function __construct() {
        $this->conexion = conexionphp();
    }

    public function entrar($username, $password) {
       
    }

    public function verBlog() {
       
    }

    public function publicarBlog($titulo, $cuerpo) {
        
    }

    public function editarBlog($id, $titulo, $cuerpo) {
        
    }

    public function borrarBlog($id) {
        
    }

    public function publicarComentario($blogId, $usuario, $comentario) {
        
    }

    public function editarComentario($comentarioId, $comentario) {
        
    }

    public function borrarComentario($comentarioId) {
        
    }

    public function establecerPrivacidad($blogId, $privacidad) {
       
    }
}
?>
