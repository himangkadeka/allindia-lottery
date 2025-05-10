<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultModel extends Model
{
    use HasFactory;
    protected $table = 'main_result_lottery';
    protected $primaryKey = 'id';
    protected $fillable = ['date','time_slot','chetak','sangam','super','bhagya_rekha','mp_delux','diamond'];
}
