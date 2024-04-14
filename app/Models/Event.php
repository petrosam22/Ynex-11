<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use App\Models\Status;
class Event extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'name', 
        'date', 
        'from',
        'to',
        'description',
        'user_id',
        'status_id',
        'is_accept',
    ];

    protected function casts(): array
    {
        return [
            'date' => 'datetime',
         ];
    }



    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function status(){
        return $this->belongsTo(Status::class,'status_id');
    }
}
