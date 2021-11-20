<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['jabatan','divisi','club'];

    public function jabatan(){
        return $this->belongsTo(Jabatan::class);
    }
    public function divisi(){
        return $this->belongsTo(Divisi::class);
    }
    public function club(){
        return $this->belongsTo(Club::class);
    }

}
