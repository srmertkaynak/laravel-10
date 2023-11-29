<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $fillable = ['serialNumber', 'brand', 'model', 'user_id']; // Phone isimli bir model oluşturduk

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
