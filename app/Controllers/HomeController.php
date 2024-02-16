<?php

namespace App\Controllers;

use App\Models\Contact;

//este controlador se extiende de Controller.php

class HomeController extends Controller{


    public function index(){
        return $this->view('home');
    }
    public function prueba(){
        return $this->view('prueba');
    }
    


}