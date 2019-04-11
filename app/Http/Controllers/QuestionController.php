<?php
namespace App\Http\Controllers;

use App\Question;
use Illuminate\Database\Eloquent\Collection;

class QuestionController extends Controller{

    /**
     * Get all questions from database.
     *
     * @return Question[]|Collection
     */
    public function list(){
        $questions = Question::all();
        return $questions;
    }
}
