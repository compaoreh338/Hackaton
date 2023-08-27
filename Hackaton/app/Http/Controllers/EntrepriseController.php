<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use App\Http\Requests\StoreEntrepriseRequest;
use App\Http\Requests\UpdateEntrepriseRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EntrepriseController extends Controller
{
    public function list(Request $request): View
    {

        $entreprises = entreprise::all();
        return view('entreprise.list');
    }
    public function new(Request $request): View
    {

        return view('entreprise.new');
    }
    public function create(StoreentrepriseRequest $request)
    {

        $entreprise = new Entreprise([

            'name' => $request->input('name'),

        ]);

        $entreprise->save();
        return redirect()->route('entreprise.list');
    }

    public function edit(Request $request, int $id): View
    {
        $entreprise = Entreprise::findOrFail($id);

        return view('entreprise.edit', compact('entreprise'));
    }
    public function update(UpdateentrepriseRequest $request, int $id)
    {
        $entreprise = Entreprise::findOrFail($id);

        $entreprise->update([
            'name' => $request->name,

        ]);
        $entreprise->save();

        return redirect()->route('entreprise.list');
    }
    public function destroy($id)
    {
        $entreprise = Entreprise::findOrFail($id);

        $entreprise->delete();

        return redirect()->route('entreprise.list')->with('success', 'entreprise Deleted');;
    }
}
