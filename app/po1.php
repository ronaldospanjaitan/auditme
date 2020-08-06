<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class po1 extends Model
{
    protected $table = 'po1s';
    protected $primaryKey = 'id';
    protected $fillable = ['question1' ,'rate1','question2a','rate2a','question2b','rate2b',
'question2c','rate2c','question3','rate3','question4','rate4','question5','rate5','question6','rate6',
'question7','rate7','question8','rate8','question9','rate9','question10','rate10','question11','rate11','question12','rate12' ];
    public function init_po1(){
        return $this->belongsTo(init_po1::class,'initid');
        return $this->hasOne(init_po1::class);
    }
    
}
