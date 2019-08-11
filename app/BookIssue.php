<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookIssue extends Model
{
	public function Book() {
		return $this->belongsTo("App\Book");
	}

	public function Student() {
		return $this->belongsTo("App\Student");
	}
}
