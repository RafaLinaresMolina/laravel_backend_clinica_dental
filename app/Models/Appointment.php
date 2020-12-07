<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $guarded = [];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'observations',
        'date',
        'status',
        'ClientId',
        'DentistId'
        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'ClientId',
        'DentistId'
    ];

    public function clients()
    {
        return $this->belongsTo('App\Models\User', 'ClientId', 'id');
    }

    public function dentists()
    {
        return $this->belongsTo('App\Models\User', 'DentistId', 'id');
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'date' => 'datetime',
    ];
}
