<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;



use Illuminate\Database\Eloquent\Model;

class ProcurementModel extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'id', 
        'pr_no', 
        'office', 
        'user_id', 
        'admin_id', 
        'action_date', 
        'pr_date', 
        'target_date', 
        'submitted_date', 
        'received_date', 
        'received_by', 
        'status', 
        'availability_code', 
        'created_at', 
        'updated_at' 
    ];


}
