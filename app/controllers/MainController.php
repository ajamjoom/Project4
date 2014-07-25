<?php
class MainController extends BaseController{
	
	public function showhomepage(){
	
		return View::make('homepage');
	
	}
	
	public function showaddquestion(){

		return View::make('add_question');

	}

	public function showallquestions(){

		return View::make('view_all_questions');
	}

	public function showallmyforums(){

		return View::make('view_all_my_forums');
	}

}