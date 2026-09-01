<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    use HasFactory;

    /**
     * Role names used throughout the app for role checks and seeding.
     * Keep these in sync with database/seeders/RoleSeeder.php.
     */
    public const CUSTOMER = 'customer';

    public const OPERATIONS_STAFF = 'operations_staff';

    public const ADMIN = 'admin';

    protected $fillable = [
        'name',
        'display_name',
    ];

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
