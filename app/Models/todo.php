<?php

namespace App\Models;

use App\Models\items;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    // use HasFactory;

    // Defining a relationship one todo list can have many items in it
    public function todoItems(){
        return $this->hasMany(items::class,'todo_id');
    }
}
