<?php

class Mere
{
	public function __construct()
	{
		echo '<h3>Utilisation de static</h3>';
		echo static::class;
		echo '<br>';
		echo '<h3>Utilisation de static</h3>';
		echo self::class;
		echo '<br>';
		echo '<h3>Utilisation de static</h3>';
		echo get_called_class();

	}

}

class Fille extends Mere{

}

new Fille ;