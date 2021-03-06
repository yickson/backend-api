<?php
Load::models('sistema/usuario');
/**
 *
 */
class UsuarioController extends RestController
{

  public function getAll()
  {
    $this->data = (New Usuario)->find();
    View::select(null, 'json');
  }

  public function get($id)
  {
    //Encuentra el usuario por el ID
    $this->data = (New Usuario)->find_by_sql("SELECT nombre, apellido, email, login FROM usuario WHERE id = $id");
    View::select(null, 'json');
  }

  public function get_buscarUsuario($dato)
  {
    $this->data = (New Usuario)->find_all_by_sql("SELECT * FROM usuario WHERE nombre LIKE '%$dato%' OR apellido LIKE '%$dato%' OR email LIKE '%$dato%'");
    View::select(null, 'json');
  }

  public function post_crearUsuario()
  {
    $datos = $this->param();
    $usuario = (New Usuario)->crear($datos);
    if($usuario){
        $this->data = 'Usuario creado';
    }else{
        $this->data = 'Error en la creación del usuario';
    }
    View::select(null, 'json');
  }

  public function put_editarUsuario()
  {
    $datos = $this->param();
    $usuario = (New Usuario)->editar($datos);
    if($usuario){
        $this->data = 'Usuario editado';
    }else{
        $this->data = 'Error en la edición del usuario';
    }
    View::select(null, 'json');
  }

  public function delete($id)
  {
    $buscar = (New Usuario)->find($id);
    if(!empty($buscar)){
      $estado = (New EstadoUsuario)->delete("usuario_id = $id");
      $usuario = (New Usuario)->delete($id);
      if($usuario){
        $this->data = 'Usuario eliminado';
      }else{
        $this->data = 'No se pudo eliminar este usuario';
      }
    }else{
      $this->data = 'Este usuario no existe en nuestra Base de Datos';
    }
    View::select(null, 'json');
  }
}



?>
