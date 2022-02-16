<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
	protected $table = 'hotel';
	protected $primaryKey = "id";
	public $timestamps = false;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'id', 'name', 'address', 'parkingfacility', 'wifi','ac','powerbackup','tv','rooms','roomsize','price','vaccine','image','image1','image2','image3','image4'
	];
}