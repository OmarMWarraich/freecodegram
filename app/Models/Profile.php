<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function profileImage() {
        $imagePath = ($this->image) ? $this->image : 'profile/F2wi2ochYmw3Qf54ks9mU0c4rzj4j40pAMsBq8rJ.png';
        return '/storage/' . $imagePath;
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
