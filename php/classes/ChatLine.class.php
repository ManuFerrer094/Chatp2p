<?php

/* ChatLine es  usado por todas las demas entradas */

class ChatLine extends ChatBase{
	
	protected $text = '', $author = '', $gravatar = '';
	
	public function save(){
		DB::query("
			INSERT INTO webchat_lines (author, gravatar, text)
			VALUES (
				'".DB::esc($this->author)."',
				'".DB::esc($this->gravatar)."',
				'".DB::esc($this->text)."'
		)");
		
		// Devuelve el objeto MySQLi de la clase DB 
		
		return DB::getMySQLiObject();
	}
}

?>