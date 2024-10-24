<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineTraining extends Model
{
    use HasFactory;
    protected $table = 'online_trainings';
    protected $fillable = ['participant_name, training_name', 'training_date', 'location', 'category'];
}
