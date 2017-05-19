<?php

namespace App\Http\Controllers;

use App\Model\Exam;
use Illuminate\Http\Request;

class ExamsController extends Controller
{
    public function index()
    {
        $exams = Exam::all();
        return view('admin.exams.index', ['exams' => $exams]);
    }

    public function create()
    {
        return view('admin.exams.create');
    }

    public function store(Request $request)
    {

    }

    public function edit($id)
    {
        $exam = Exam::findOrFail($id);
        return view('admin.exams.edit', ['exam' => $exam]);
    }

    public function update($id, Request $request)
    {
        $exam = Exam::findOrFail($id);
    }

    public function destroy($id)
    {
        $exam = Exam::findOrFail($id);
    }
}
