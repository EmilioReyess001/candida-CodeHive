<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasName;
use Filament\Panel;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements FilamentUser, HasName
{
    use Notifiable;

    protected $table = 'usuario';
    protected $primaryKey = 'idUsuario';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'passwordHash',
        'activo',
        'idRol',
    ];

    protected $hidden = [
        'passwordHash',
    ];

    // 🔐 Laravel Auth
    public function getAuthPassword()
    {
        return $this->passwordHash;
    }

    // 👤 Nombre que usa Filament (NUNCA devuelve null)
    public function getFilamentName(): string
    {
        if (!empty($this->nombre) || !empty($this->apellido)) {
            return trim(($this->nombre ?? '') . ' ' . ($this->apellido ?? ''));
        }

        return $this->email ?? 'Usuario';
    }

    // 🚪 Permiso para acceder al panel
    public function canAccessPanel(Panel $panel): bool
    {
        return true; // luego puedes validar rol o activo  
        // return $this->isAdmin() || $this->isEditor();
    }

    // Defino helpers de rol
 
    public function isAdmin(): bool
{
    return (int) $this->idRol === 1;
}

public function isEditor(): bool
{
    return (int) $this->idRol === 2;
}

public function isLector(): bool
{
    return (int) $this->idRol === 3;
}





    public function role()
    {
        return $this->belongsTo(Role::class, 'idRol', 'idRol');
    }
}
