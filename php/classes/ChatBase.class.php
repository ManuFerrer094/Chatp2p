<?php

/* Esta es la clase base usada por el both ChatLine y ChatUser */

class ChatBase{

	// Este constructor es usado por todas las clases:

	public function __construct(array $options){
		
		foreach($options as $k=>$v){
			if(isset($this->$k)){
				$this->$k = $v;
			}
		}
	}
}

?>