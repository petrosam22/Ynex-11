<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
class Status extends Model
{
    use HasFactory,SoftDeletes;


    protected $fillable = ['name','user_id','model'];


    public function user(){
    return    $this->belongsTo(User::class,'user_id');
    }
}
