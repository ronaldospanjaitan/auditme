<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class init_po1 extends Model
{
    protected $table = 'init_po1s';
    protected $primaryKey = 'id';
    protected $fillable = [
        'firstName', 'lastName', 'companyName','companyAddress','email',
    ];
    public function user(){
        return $this->belongsTo(User::class,'userid');
    }
    public function po1(){
        return $this->hasOne(po1::class);
    }
}