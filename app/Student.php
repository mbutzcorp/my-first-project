<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	// Nama table
    protected $table = "students";

    // protected $primaryKey = "id";
    
    // Kolom yang boleh diisi
    protected $fillable = [
    	"name"
    ];

    // Kolom yang disembunyikan saat get data
    protected $hidden = [
    	"created_at",
    	"updated_at"
    ];
}
