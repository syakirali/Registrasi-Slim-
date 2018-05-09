<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class User extends Model {
    protected $keyType = "string";
    protected $table = 'users';
    protected $primaryKey = 'email';

    public $timestamps = false;
}
