<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    // Show all sections
    public function index()
    {
        $sections = Section::all();
        return view('sections.index', compact('sections'));
    }

    // Show form to create a section
    public function create()
    {
        return view('sections.create');
    }

    // Save a new section
    public function store(Request $request)
    {
        Section::create($request->all());
        return redirect()->route('sections.index');
    }

    // Show form to edit a section
    public function edit($id)
    {
        $section = Section::findOrFail($id);
        return view('sections.edit', compact('section'));
    }

    // Update section
    public function update(Request $request, $id)
    {
        $section = Section::findOrFail($id);
        $section->update($request->all());
        return redirect()->route('sections.index');
    }

    // Delete section
    public function destroy($id)
    {
        $section = Section::findOrFail($id);
        $section->delete();
        return redirect()->route('sections.index');
    }
}
