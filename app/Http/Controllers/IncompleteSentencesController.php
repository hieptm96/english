<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\IncompleteSentences;

class IncompleteSentencesController extends Controller
{
    public function index()
    {
      $sentences = IncompleteSentences::all();
      return view('admin.incompletesentences.index', ['sentences' => $sentences]);
    }

    public function create()
    {
      return view('admin.incompletesentences.create');
    }

    public function store(Request $request)
    {

    }

    public function edit($id)
    {
        $sentence = IncompleteSentences::findOrFail($id);
        return view('admin.incompletesentences.edit', ['sentence' => $sentence]);
    }

    public function update($id, Request $request)
    {
        $sentence = IncompleteSentences::findOrFail($id);
    }

    public function destroy($id)
    {
        $sentence = IncompleteSentences::findOrFail($id);
    }
}
