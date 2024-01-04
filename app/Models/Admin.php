<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable{
        // 1人の管理者は複数のトレーニング管理を持てる
        public function trainings() {
            return $this->hasMany(Training::class);
    }
}