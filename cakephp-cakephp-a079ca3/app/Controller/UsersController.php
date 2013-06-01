<?php
App::uses('AppController' , 'Controller');
App::uses('UserRepo', 'Repository/Impl');

class UsersController extends AppController {
    var $UserRepository;

    public function __construct($request = null, $response = null) {
        parent::__construct($request, $response);

        $this->UserRepository = new UserRepo($this->User);
    }

    public function index() {
        $users = $this->UserRepository->GetAll();
        debug($users);

        $this->render(false);
    }

    public function view($id) {
        $user = $this->UserRepository->GetById($id);
        debug($user);

        $this->render(false);
    }

    public function find($email) {
        $user = $this->UserRepository->GetByEmail($email);
        debug($user);

        $this->render(false);
    }
}