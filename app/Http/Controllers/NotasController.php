<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Note;

class NotasController extends Controller
{
    public function index()
    {
    	$notes = Note::all();
    	return view('notes', compact('notes'));
    }
}
