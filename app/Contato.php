<?php

namespace oliver;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
     protected $fillable = ['nome','e-mail','texto','fone'];
}
