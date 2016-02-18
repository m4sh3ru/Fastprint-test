<?php namespace App;
   
use Illuminate\Database\Eloquent\Model;

class Nilaisiswa extends \Eloquent
{
    protected $fillable = [
		'nama', 'tahun', 'nilai'
	];

	protected $table = 'nilai_siswa';

	public $timestamps = false;
}