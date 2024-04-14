<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use App\Models\Event;
class Status extends Model
{
    use HasFactory,SoftDeletes;


    protected $fillable = [
        'name',
        'user_id',
        'model',
        'is_accept',
        'color',
    
    ];


    public function user(){
    return    $this->belongsTo(User::class,'user_id');
    }

    public function events(){
        return    $this->hasMany(Event::class);
        }
}
