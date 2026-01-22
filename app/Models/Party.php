<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    protected $table = 'parties';

    protected $primaryKey = 'id';

    public $incrementing = true;

    protected $keyType = 'int';

    public $timestamps = false; // 👈 solo created_at

    protected $fillable = [
        'name',
        'acronym',
        'logo',
        'color',
        'slogan',
        'description',
        'founded',
        'ideology',
        'president_name',
        'president',
        'created_at',
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];

    /**
     * Un partido tiene muchos candidatos
     */
    public function candidates()
    {
        return $this->hasMany(Candidate::class, 'partieId');
    }
}
