<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Admin;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function index(): View
    {

        $agent = Admin::all();
        return view('userModifAgent', compact('agent'));
    }


    public function create(): View
    {
        return view('create');
    }


    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Admin::create($input);
        return redirect('student')->with('flash_message', 'Student Addedd!');
    }
    public function show($id)

    {
        $agent = Admin::findOrFail($id);
        return view('edit', compact('agent'));
    }

    public function show2($id)

    {
        $agent = Admin::findOrFail($id);
        return view('show', compact('agent'));
    }

    public function edit(string $id): View
    {
        $agent =  Admin::findorFail($id);
        return view('edit');


    }

    public function update(Request $request): RedirectResponse
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'matricule' => 'required',
            'sexe' => 'required',
            'date_de_naissance' => 'required',
        ]);

        $agent = Admin::find($request->id);
        $agent->name = $request->get('name');
        $agent->matricule = $request->get('matricule');
        $agent->email = $request->get('email');
        $agent->sexe = $request->get('sexe');
        $agent->date_de_naissance = $request->get('date_de_naissance');

        $agent->update();

        return redirect()->route('modification.information')->with('flash_message', 'student Updated!');
    }


    public function destroy(string $id): RedirectResponse
    {
        Admin::destroy($id);
        return redirect('userModifAgent')->with('success', 'Student deleted!');
    }
}
