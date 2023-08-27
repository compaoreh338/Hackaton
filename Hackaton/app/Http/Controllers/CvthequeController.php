<?php

namespace App\Http\Controllers;

use App\Models\Cvtheque;
use App\Http\Requests\StoreCvthequeRequest;
use App\Http\Requests\UpdateCvthequeRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CvthequeController extends Controller
{
    public function list(Request $request): View
    {

        $cvtheques = Cvtheque::all();
        return view('cvtheque.list');
    }
    public function new(Request $request): View
    {

        return view('cvtheque.new');
    }
    public function create(StorecvthequeRequest $request)
    {

        $cvtheque = new cvtheque([

            'name' => $request->input('name'),

        ]);

        $cvtheque->save();
        return redirect()->route('cvtheque.list');
    }

    public function edit(Request $request, int $id): View
    {
        $cvtheque = Cvtheque::findOrFail($id);

        return view('cvtheque.edit', compact('cvtheque'));
    }
    public function update(UpdatecvthequeRequest $request, int $id)
    {
        $cvtheque = Cvtheque::findOrFail($id);

        $cvtheque->update([
            'name' => $request->name,

        ]);
        $cvtheque->save();

        return redirect()->route('cvtheque.list');
    }
    public function destroy($id)
    {
        $cvtheque = Cvtheque::findOrFail($id);

        $cvtheque->delete();

        return redirect()->route('cvtheque.list')->with('success', 'cvtheque Deleted');;
    }
}
