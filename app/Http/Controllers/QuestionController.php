<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

  public function index()
  {
    return view('fatawa.index', [
      'questions' => Question::latest()->with(['subQuestions', 'answeredBy'])->paginate(20),
    ]);
  }

}
