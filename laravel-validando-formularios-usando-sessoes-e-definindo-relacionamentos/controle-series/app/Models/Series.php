<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Series extends Model
{
    use HasFactory;

    protected $table = "series";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nome'];

    // protected $primaryKey = 'series_id';

    public function seasons()
    {
        // informando a FK do model Season (tabela)
        return $this->hasMany(Season::class, 'series_id');
    }

    // escopo global
    protected static function booted()
    {
        self::addGlobalScope('ordered', function (Builder $queryBuilder) {
            $queryBuilder->orderBy('nome');
        });
    }

    // escopo local
    // public function scopeActive(Builder $query)
    // {
    //     return $query->where('active', true);
    // }
}
