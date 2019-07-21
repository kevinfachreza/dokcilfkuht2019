<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlamatKota extends Model
{
	protected $table = 'alamat_kota';


	public function provinsi()
	{
		return $this->hasOne('App\Models\AlamatProvinsi','id', 'provinsi_id');
	}

}
