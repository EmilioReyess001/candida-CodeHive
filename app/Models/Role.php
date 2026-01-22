<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'rol';
    protected $primaryKey = 'idRol';
    public $timestamps = false;

    protected $fillable = [
        'nombreRol',
        'descripcion',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'idRol', 'idRol');
    }
}
