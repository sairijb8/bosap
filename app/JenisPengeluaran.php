<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisPengeluaran extends Model
{
    protected $table = 'jenis_pengeluaran';

	public function bku(){
		return $this->hasMany(Bku::class);
	}	

}
