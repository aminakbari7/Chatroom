<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    use HasFactory;
    protected $fillable = [
        'Sender_id',
        'Reveiver_id',
        'Read',
        'Body',
        'Type',
        'Conversation_id',
    ];
    public function conversation()
    {
        return $this->belongsTo(Conversation::class);
    }
    public function user()
    {
       return $this->belongsTo(User::class,'Sender_id');
    }
    
}
