<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Test;
use App\TestAnswer;
use App\Topic;
use App\Question;
use App\Option;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTestRequest;

class TicketsController extends Controller
{public function index()
{
    // $topics = Topic::inRandomOrder()->limit(10)->get();

    $questions = Question::inRandomOrder()->limit(10)->get();
    foreach ($questions as &$question) {
        $question->options = Option::where('question_id', $question->id)->inRandomOrder()->get();
    }

    /*
    foreach ($topics as $topic) {
        if ($topic->questions->count()) {
            $questions[$topic->id]['topic'] = $topic->title;
            $questions[$topic->id]['questions'] = $topic->questions()->inRandomOrder()->first()->load('options')->toArray();
            shuffle($questions[$topic->id]['questions']['options']);
        }
    }
    */
    return view('tickets', compact('questions'));
}


    public function store(Request $request)
    {
        $result = 0;

        $test = Test::create([
            'user_id' => Auth::id(),
            'result'  => $result,
        ]);

        foreach ($request->input('questions', []) as $key => $question) {
            $status = 0;

            if ($request->input('answers.'.$question) != null
                && Option::find($request->input('answers.'.$question))->is_correct
            ) {
                $status = 1;
                $result++;
            }
            TestAnswer::create([
                'user_id'     => Auth::id(),
                'test_id'     => $test->id,
                'question_id' => $question,
                'option_id'   => $request->input('answers.'.$question),
                'correct'     => $status,
            ]);
        }

        $test->update(['result' => $result]);

        return redirect()->route('results.show', [$test->id]);
    }


}
