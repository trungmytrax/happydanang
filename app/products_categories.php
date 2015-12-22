<?php

namespace happydanang;

use Illuminate\Database\Eloquent\Model;

class products_categories extends Model {
	//
	public function products_detail() {
		return $this->hasMany('App\products_detail', 'id');
	}
}
