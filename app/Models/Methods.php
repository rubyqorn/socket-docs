<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Methods extends Model
{
    /**
     * @var string 
     */ 
    protected $table = 'methods';

    /**
     * Has many relationships with Classes model
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany 
     */ 
    public function classes()
    {
        return $this->belongsTo(Classes::class, 'class_id');
    }
}