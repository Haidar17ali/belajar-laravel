<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //kita dapat mengisi dengan fillable atau guarded
    // fillable field yang boleh diisi
    // guarded field yang tidak boleh diisi
    protected $fillable = ['nama', 'nim', 'email', 'jurusan'];
}
