<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

final class Book extends Model {

  const VALIDATION_RULES = [
    'title'            => 'required',
    'publication_date' => 'required|date',
    'isbn'             => 'required|string|size:13',
    'author_id'        => 'required|integer'
  ];

  protected $guarded = ['id'];

}
