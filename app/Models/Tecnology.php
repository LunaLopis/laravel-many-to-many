<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tecnology extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = ['name', 'slug'];
    public function tecnologies(){
        return $this->hasMany(Tecnology::class);
    }
    public static function generateSlug($name)
    {
        return Str::slug($name, '-');
    }
}
