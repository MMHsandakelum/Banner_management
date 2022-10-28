<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    
    use HasFactory;
    protected $fillable = ['company_id', 'website', 'email', 'title', 'description', 'banner_type', 'amount', 'starting_date', 'expire_date', 'img_path'];
    
}