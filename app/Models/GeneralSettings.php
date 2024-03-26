<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSettings extends Model
{
    protected $fillable = [
        'site_name',
        'site_phone',
        'site_email',
        'site_meta_keywords',
        'site_description',
        'site_address'
    ]; 
    use HasFactory;
}
