<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Configurations extends Model
{
    /**
     * @var string 
     */ 
    protected $table = 'configurations';

    /**
     * Has many relationships with ConfigurationSettings model
     * @return \Illuminate\Database\Eloquent\Relations\HasMany 
     */  
    public function settings()
    {
        return $this->hasMany(ConfigurationSettings::class, 'config_id');
    }
}
