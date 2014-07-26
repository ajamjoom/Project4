<?php
class MainController extends BaseController{
	
	public function showhomepage(){
	
		return View::make('homepage');
	
	}
	
	public function showaddquestion(){

		return View::make('add_question');

	}

	public function processaddquestion(){
		
		$questions = new Question();

		$questions->Question = Input::get('Question');
		$questions->Context = Input::get('Context');
		$questions->Genre = Input::get('Genre');

		$questions->save();

		return "Forum is Published";
	}

	public function showallquestions(){

		$query = Input::get('query');

	# If there is a query, search the library with that query
		if($query) {

		
		# Here's a better option because it searches across multiple fields
			$questions = Question::where('Question', 'LIKE', "%$query%")
				->orWhere('Context', 'LIKE', "%$query%")
				->orWhere('Genre', 'LIKE', "%$query%")
				->get();

		}
	# Otherwise, just fetch all books
		else {
			$questions = Question::all();	
		}

		return View::make('view_all_questions')->with('questions',$questions);	
	}

	public function processallquestions(){

		$questions= Question::all();
		return View::make('view_all_questions');

	}

	public function showallmyforums(){

		return View::make('view_all_my_forums');
	}

}