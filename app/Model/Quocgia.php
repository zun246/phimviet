<?php 
App::uses('AppModel','Model');

class Quocgia extends AppModel
{
	public $name='Quocgia';
	public $hasMany = array(
		'Phim'
	);
}