<?php


namespace App\Controllers;
use App\Models\Contact;
class ContactController extends Controller{
    public function index(){
        $model = new Contact;

        //return $model->select('name','email')->get();
        
        if(isset($_GET['search'])){
            $contacts = $model->where('name','LIKE','%' . $_GET['search'] . '%')->paginate(3);
            //return $this->view('contacts.index', ['contacts'=>$contacts]);
        }else{
            $contacts = $model->paginate(3);
        }

        //$model= new Contact;
        //$contacts = $model->all();
        //$contacts = $model->paginate(3);
        //return $contacts;
        //compact('contacts') => ['contacts'=>$contacts]
        return $this->view('contacts.index', ['contacts'=>$contacts]);
    }
    public function create(){
        return $this->view('contacts.create');
    }
    public function store(){
        $data = $_POST;
        $model = new Contact;
        $model->create($data);
        //rederigir
        $this->redirect('/contacts');

    }
    public function show($id){
        $model = new Contact;
        $contact =$model->find($id);
        return $this->view('contacts/show', compact('contact'));
    }
    public function edit($id){
        $model = new Contact;
        $contact = $model->find($id);
        return $this->view('contacts.edit',compact('contact'));
    }
    public function update($id){
        //recuperamos dato del formulario
        $data = $_POST;
        //-----------
        $model = new Contact;
        $model->update($id, $data);
        //redireccion
        $this->redirect("/contacts/{$id}");

    }
    public function destroy($id){
        $model = new Contact;
        $model->delete($id);
        $this->redirect('/contacts');
    }

}