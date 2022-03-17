<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prodotti extends Model

{
    use HasFactory;
    protected $table = 'prodotti';
    public function clienti()
    {
        return $this->belongsToMany(clienti::class)->using(Many_t_many::class);
    }
    

}
