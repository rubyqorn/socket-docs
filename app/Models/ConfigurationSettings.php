<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConfigurationSettings extends Model
{
    /**
     * @var string 
     */ 
    protected $table = 'configuration_settings';

    /**
     * Has many relationships with Configuration model
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany 
     */ 
    public function configurations()
    {
        return $this->belongsTo(Configuration::class);
    }
}
