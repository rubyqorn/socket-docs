<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dir extends Model
{
    /**
     * Has many relationships with Classes model
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */ 
    public function classes()
    {
        return $this->hasMany(Classes::class);
    }
}
