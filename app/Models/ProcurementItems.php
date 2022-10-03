<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;



class ProcurementItems extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'id',
        'app_id',
        'pr_id',
        'description',
        'unit_id',
        'qty',
        'abc',
        'created_at',
        'updated_at',

    ];
}
