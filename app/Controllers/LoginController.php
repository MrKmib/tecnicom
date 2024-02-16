<?php

namespace App\Controllers;

use App\Models\Message;

//este controlador se extiende de Controller.php

class LoginController extends Controller{


    public function sesion(){
        // return "hola login";
        // return $this->view('auth/login');
        return $this->view('auth/login');
    }
    public function vistaAdmin(){
        $model = new Message;

        //$messages = $model->paginate(3);
        
        if(isset($_GET['search'])){
            $messages = $model->where('tema','LIKE','%' . $_GET['search'] . '%')->paginate(3);
            //return $this->view('contacts.index', ['contacts'=>$contacts]);
        }else{
            $messages = $model->paginate(3);
        }

        //$model= new Contact;
        //$contacts = $model->all();
        //$contacts = $model->paginate(3);
        //return $contacts;
        //compact('contacts') => ['contacts'=>$contacts]
        return $this->view('mensajes', ['messages'=>$messages]);
    }
    public function vistaCliente(){
        return $this->view('mensajes');
    }
    public function send(){
        return $this->view('send');
    }
    public function show($id){
        $model = new Message;
        $mensaje =$model->find($id);
        return $this->view('mensajes.show', compact('mensaje'));
    }
    public function store(){
        $data = $_POST;
        $model = new Message;
        $model->create($data);
        //rederigir
        //$this->redirect('/');
        header("Location: /send");
        exit;

    }
    public function destroy($id){
        $model = new Message;
        $model->delete($id);
        $this->redirect('/mensajes');
    }
    public function logout(){
        // Iniciar sesión
        session_start();

        // Destruir todas las variables de sesión
        $_SESSION = array();

        // Si se desea destruir la sesión, también se debe borrar la cookie de sesión
        // Nota: Esto destruirá la sesión y no solo los datos de la sesión
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        // Finalmente, destruir la sesión
        session_destroy();

        // Redirigir a la página de inicio o a donde sea apropiado después del logout
        header("Location: /login");
        exit;
    }
    public function validar(){

        //recuperamos del post
        $usuario=$_POST['usuario'];
        $contraseña=$_POST['contraseña'];
        //sesion 
        session_start();
        $_SESSION['usuario']=$usuario;

        $conexion=mysqli_connect("localhost","root","","rol");

        $consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
        $resultado=mysqli_query($conexion,$consulta);

        $filas=mysqli_fetch_array($resultado);

        if($filas['id_cargo']==1){ //administrador
            header("location: /mensajes");

        }else
        if($filas['id_cargo']==2){ //cliente
        header("location: /mensajes");
        }
        else{
            ?>
            <?php
            header("location: /login");
            ?>
            <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
            <?php
        }
        mysqli_free_result($resultado);
        mysqli_close($conexion);


        
    }
    


}


