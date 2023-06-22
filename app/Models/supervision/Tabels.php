<?php

namespace App\Models\supervision;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabels extends Model
{
    use HasFactory;
    protected $table = 'arsys_research';
    protected $fillable = ['research_code'];
}
