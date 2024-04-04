<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    use HasFactory;
    protected $primaryKey = 'abbreviation';
    public $incrementing = false;
    public $timestamps = false;
    protected $keyType = 'string';
    protected $fillable = [
        'abbreviation',
        'name',
        'name_pt',
        'type',
        'semesters',
        'ECTS',
        'places',
        'contact',
        'objectives',
        'objectives_pt',
    ];
}
