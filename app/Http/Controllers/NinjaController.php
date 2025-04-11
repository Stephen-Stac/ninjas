<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ninja;
use App\Models\Dojo;

class NinjaController extends Controller
{
    public function index() {
      // route --> /ninjas/
      $ninjas = Ninja::with('dojo')->orderBy('created_at', 'desc')->paginate(10);
      return view('tuts.index', ['ninjas'=> $ninjas]);

      // $ninjas = Ninja::all();
    }

    public function show(Ninja $ninja) {
      // route --> /ninjas/{id}
      $ninja->load('dojo');
      return view('tuts.show', ['ninja' => $ninja]);
    }

    public function create() {
      // route --> /ninjas/create
      $dojos = Dojo::all();
      return view('tuts.create', ['dojos' => $dojos]);
    }

    public function store(Request $request) {
      // --> /ninjas/ (POST)

      
      $validated = $request->validate([
        'name' => 'required|string|max:255',
        'skill' => 'required|integer|min:0|max:100',
        'bio' => 'required|string|min:3|max:1000',
        'dojo_id' => 'required|exists:dojos,id',
      ]);

      Ninja::create($validated);

      return redirect()->route('index')->with('success', 'Member created successfully!');

    }

    public function destroy(Ninja $ninja) {
      // --> /ninjas/{id} (DELETE)
      $ninja->delete();

      return redirect()->route('index')->with('success', 'Member deleted!');
    }

    // edit() and update() for edit view and update requests
    // we won't be using these routes
}