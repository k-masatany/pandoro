<?php
namespace App\Database\Type;

use Cake\Database\Driver;
use Cake\Database\Type;
use PDO;
use Cake\Auth\DefaultPasswordHasher;

class PasswordType extends Type
{

    /**
     * データベースに保存するときにhash化
     *
     * @author masatani
     */
    public function toDatabase($value, Driver $driver)
    {
        if (strlen($value) > 0) {
            return (new DefaultPasswordHasher)->hash($value);
        }
        return ($value);
    }
}
