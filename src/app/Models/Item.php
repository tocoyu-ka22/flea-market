<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items';

    protected $primaryKey = 'id';


    public function categories()
    {
        return $this->belongsTo('App\Category');
    }

    public function conditions()
    {
        return $this->belongsTo('App\Condition');
    }
    
    public function findAllItems()
    {
        return Item::all();
    }

}
