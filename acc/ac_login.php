<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $clave = $_POST['password'];

    require '../vendor/autoload.php';

    $usuario = new YocoTec\Usuario;

    $resultado = $usuario->login($clave);

    if($resultado){

        session_start();
        $_SESSION['usuario_info'] = array(

            'nombre_usuario'=>$resultado['nombre_usuario'],
            'estado' => 1

        );

        header('Location: ../index.php');

    }else {

        header('Location: ../login.php');
    }

}

?>