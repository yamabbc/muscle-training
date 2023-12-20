<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model{
        // 1人の管理者は複数のトレーニング管理を持てる
        public function trainings() {
            return $this->hasMany(Training::class);
    }
}