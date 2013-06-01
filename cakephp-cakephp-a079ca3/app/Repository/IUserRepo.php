<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jmunro
 * Date: 5/31/13
 * Time: 8:42 PM
 * To change this template use File | Settings | File Templates.
 */

interface IUserRepo {
    public function GetByEmail($email);
}