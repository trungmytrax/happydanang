<?php

namespace happydanang;

use Illuminate\Database\Eloquent\Model;

class products_detail extends Model {
	//
	public function products_categories() {
		return $this->belongto('App\products_detail');
	}
}
