<?php

namespace App\Models;

class Order extends Model
{
	protected $table = 'orders';
	protected $primaryKey = 'id';

	protected $fillable = [
		'id',
		'pizza_name',
		'amount',
		'ordered_at',
		'delivery_at'
	];

	/**
	 * The model construct
	 */
	public function __construct() {
		parent::__construct();
	}
}