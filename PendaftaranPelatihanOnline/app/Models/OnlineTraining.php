<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class OnlineTraining extends Model
{
    use HasFactory, HasApiTokens;
    protected $table = 'online_trainings';
    protected $fillable = ['participant_name, training_name', 'training_date', 'location', 'category'];
}
