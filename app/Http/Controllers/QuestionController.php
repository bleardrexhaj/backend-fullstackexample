<?php
namespace App\Http\Controllers;

use App\Question;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;

class QuestionController extends Controller{

    /**
     * Get all questions from database.
     *
     * @return Question[]|Collection
     */
    public function list(){
        $questions = Question::all();
        return response()->json($questions);
    }

    /**
     * Get question by id.
     *
     * @param $id
     * @return JsonResponse
     */
    public function getById($id){
       $question = Question::find($id);
       if($question != null && $question->exists()){
           return $question;
       }else{
           return response()->json(['error' => 'not_found'],403);
       }
    }

    /**
     * Delete question by id.
     *
     * @param $id
     * @return JsonResponse
     */
    public function delete($id){
        $question = Question::find($id);
        if($question != null && $question->exists()){
            $question->delete();
            return response()->json(['message'=>'record_deleted']);
        }else{
            return response()->json(['error'=>'not_deleted']);
        }
    }

    //@TODO edit
}
