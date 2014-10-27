<?php

class Box  extends Eloquent {

    protected $table="boxes";

    public function user(){
        return $this->belongsTo('User');
    }
}