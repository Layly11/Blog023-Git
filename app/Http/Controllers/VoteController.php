<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vote;
use App\Models\Content;
use App\Http\Requests\VoteRequest;

class VoteController extends Controller
{
    public function index()
    {
        $votes = Vote::all();
        $sumlike = Vote::where('vote', "Like")->count();
        $sumUnlike = Vote::where('vote', "Unlike")->count();
        return view('vote.index', compact('votes','sumlike','sumUnlike'));
    }
    public function create(Request $request,$id)
    {
        $votess = new Vote;
        $contents = Content::find($id);
        $votess->contents_id = $contents->id;
        $votess->vote = $request->input('vote_checkbox');
        $votess->save();
        return redirect('/vote');

    }

    public function edit($id)
    {
        $votes = new Vote;
        $contents = Content::find($id);
        return view('vote.form',compact('votes','contents'));
    }



}
