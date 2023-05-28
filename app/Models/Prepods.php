<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prepods extends Model
{
    use Filterable;
    protected $table = 'Prepods';
    protected $guarded = false;
    public function category(){
        return $this->belongsTo(predmet::class, 'predmet_id', 'id');
    }
}
