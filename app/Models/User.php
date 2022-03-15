<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Cashier\Subscription;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'line1',
        'line2',
        'city',
        'state',
        'postal_code',
        'pm_type',
        'pm_last_four',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * Check if user is admin.
     *
     * @return Boolean
     */
    public function isAdmin()
    {
        return $this->is_admin;
    }

    /**
     * Get the subscriptions that belong to a user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }

    /**
     * Check if user needs to upload files.
     *
     * @return Boolean
     */
    public function hasFiles()
    {
        $hasFiles = false;
        if($this->id_front_filename == null)  $hasFiles = false;
        if($this->id_back_filename == null) $hasFiles = false;
        return $hasFiles;
    }

    /**
     * Check if user needs to upload files.
     *
     * @return Boolean
     */
    public function uploadRequired()
    {
        $this->has_files = 0;
    }

    /**
     * Check if user needs to upload files.
     *
     * @return Boolean
     */
    public function uploadFinished()
    {
        $this->has_files = 1;
    }
}
