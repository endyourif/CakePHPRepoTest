<?php
App::uses('BaseRepo', 'Repository/Impl');
App::uses('IUserRepo', 'Repository');

class UserRepo extends BaseRepo implements IUserRepo {

    public function GetByEmail($email) {
        return $this->Model->find('first', array('conditions' => array('email' => $email)));
    }

}