<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function booted()
    {
        static::creating(function ($model) {
            if (!app()->runningInConsole()) {
                $model->logo = createAvatar($model->name, 'uploads/images/');
            }
        });
    }

    public function getLogoAttribute($logo)
    {
        if ($logo == null) {
            return asset('uploads/images/icon.jpg');
        } else {
            return asset($logo);
        }
    }
}
