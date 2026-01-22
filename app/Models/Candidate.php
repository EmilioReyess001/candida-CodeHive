<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $table = 'candidates';

    protected $primaryKey = 'id';

    public $incrementing = true;

    protected $keyType = 'int';

    public $timestamps = false; // 👈 solo created_at

    protected $fillable = [
        'parteId',
        'name',
        'photo',
        'position',
        'region',
        'age',
        'profession',
        'education',
        'experience',
        'biography',
        'cv_url',
        'plan_gobierno_url',
        'audio_url',
        'video_url',
        'is_promoted',
        'social_links',
        'proposals',
        'created_at',
    ];

    protected $casts = [
        'age'          => 'integer',
        'is_promoted'  => 'boolean',
        'social_links' => 'array',
        'proposals'    => 'array',
        'created_at'   => 'datetime',
    ];

    /**
     * Un candidato pertenece a un partido
     */
    public function party()
    {
        return $this->belongsTo(Party::class, 'partieId');
    }
}
