<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReadOnlyBase
{
    //
    protected $tiles_array=[];
    public function all(){
        return $this->tiles_array;
    }
    public function get($id){
        return $this->tiles_array[$id];
    }
}
