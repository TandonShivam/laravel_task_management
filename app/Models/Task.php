<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;  //Enables model factories for testing/seeding
    protected $fillable=['title','description']; //which fields can be mass assigned
}
