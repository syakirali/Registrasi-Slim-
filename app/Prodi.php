<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model {
    protected $table = 'prodi';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'nama', 'fakultas'
    ];

    public $timestamps = false;
}
