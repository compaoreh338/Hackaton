<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use App\Http\Requests\StoreApprenantRequest;
use App\Http\Requests\UpdateApprenantRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ApprenantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function list(Request $request): View
    {

        $apprenants = Apprenant::all();
        return view('apprenant.list');
    }
    public function new(Request $request): View
    {

        return view('apprenant.new');
    }
    public function index()
    {

        return view('apprenant');
    }
    public function create(StoreapprenantRequest $request)
    {

        $apprenant = new Apprenant([

            'name' => $request->input('name'),

        ]);

        $apprenant->save();
        return redirect()->route('apprenant.list');
    }

    public function edit(Request $request, int $id): View
    {
        $apprenant = Apprenant::findOrFail($id);

        return view('apprenant.edit', compact('apprenant'));
    }
    public function update(UpdateapprenantRequest $request, int $id)
    {
        $apprenant = Apprenant::findOrFail($id);

        $apprenant->update([
            'name' => $request->name,

        ]);
        $apprenant->save();

        return redirect()->route('apprenant.list');
    }
    public function destroy($id)
    {
        $apprenant = Apprenant::findOrFail($id);

        $apprenant->delete();

        return redirect()->route('apprenant.list')->with('success', 'Apprenant Deleted');;
    }
}
