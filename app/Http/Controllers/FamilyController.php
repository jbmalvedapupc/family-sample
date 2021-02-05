<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Family;
use App\Child;

class FamilyController extends Controller
{
    public function index()
    {
        $families = Family::all();
        return view('families.index', compact('families'));
    }

    public function show($id)
    {
        $family = Family::findOrFail($id);
        return view('families.show', compact('family'));   
    }

    public function store(Request $request, Family $family)
    {
        $child = new Child($request->all());
        $family->children()->save($child);

        return redirect()->back();
    }
}
