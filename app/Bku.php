<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bku extends Model
{
    protected $table = 'bku';

	public function jenisPengeluaran(){
		return $this->belongsTo(JenisPengeluaran::class);
	}
}
