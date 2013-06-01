<?php
App::uses('IRepo', 'Repository');

abstract class BaseRepo implements IRepo {

    protected $Model;

    public function __construct($model) {
        $this->Model = $model;
    }

    public function GetById($id) {
        return $this->Model->find('first', array('conditions' => array('id' => $id)));
    }

    public function GetAll() {
        return $this->Model->find('all');
    }

}