<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{
    protected $table = "Kategori";

    protected $fillable = array('nama');
    // Tambah kalau pake modal

    // use SoftDeletes;
}
