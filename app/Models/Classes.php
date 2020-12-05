<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model 
{
    /**
     * @var string
     */ 
    protected $table = 'classes';

    /**
     * Has many relationships with Dir model
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany 
     */ 
    public function dirs()
    {
        return $this->belongsTo(Dir::class);
    }

    /**
     * Has many relationships with Methods model
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */ 
    public function methods()
    {
        return $this->hasMany(Methods::class, 'class_id');
    }
}
