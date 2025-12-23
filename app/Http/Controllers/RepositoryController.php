<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class RepositoryController extends Controller
{
    public function index()
    {
        $documents = Document::with('user')->latest()->paginate(10);
        return view('repository.index', compact('documents'));
    }
}
