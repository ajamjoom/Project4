<?php

class Question extends Eloquent{
	 
	 public function question() {
            # Author has many Books
            return $this->belongsToMany('User');
        }

}