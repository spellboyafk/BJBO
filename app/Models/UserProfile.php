<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    public function up()
{
    Schema::create('user_profiles', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->string('phone')->nullable();
        $table->string('address')->nullable();
        $table->timestamps();
    });
}

  public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
