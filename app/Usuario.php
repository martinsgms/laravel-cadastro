<?php
//model : validações (regras de negócio)
namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
    	'name', 'email', 'password', 'birth'
    ];

    public $rules = [
    	'name' 		=> 'required|max:255',
    	'email' 	=> 'required|max:255',
    	'password' 	=> 'required|min:8',
    	'birth' 	=> 'max:10',
    ];
}
