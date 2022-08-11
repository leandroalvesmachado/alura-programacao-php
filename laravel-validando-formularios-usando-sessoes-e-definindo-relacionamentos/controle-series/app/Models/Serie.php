<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;

    protected $table = "series";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nome'];

    public function temporadas()
    {
        return $this->hasMany(Season::class);
    }
}
