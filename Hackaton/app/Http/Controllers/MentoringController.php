<?php

namespace App\Http\Controllers;

use App\Models\Mentoring;
use App\Http\Requests\StoreMentoringRequest;
use App\Http\Requests\UpdateMentoringRequest;
use Illuminate\Support\Facades\Request;
use Illuminate\View\View;

class MentoringController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function list(Request $request): View
    {
        $categories = mentoring::where('user_id', $request->user()->id)->get();
        return view('templates.profile.address.list', [
            'user' => $request->user(),
            'categories' => $categories
        ]);
    }
    public function new(Request $request): View
    {

        return view('mentoring.new');
    }
    public function create(StoreMentoringRequest $request)
    {

        $mentoring = new Mentoring([

            'name' => $request->input('name'),

        ]);

        $mentoring->save();
        return redirect()->route('mentoring.list');
    }

    public function edit(Request $request, int $id): View
    {
        $mentoring = Mentoring::findOrFail($id);

        return view('mentoring.edit', compact('mentoring'));
    }
    public function update(UpdateMentoringRequest $request, int $id)
    {
        $mentoring = Mentoring::findOrFail($id);

        $mentoring->update([
            'name' => $request->name,



        ]);
        $mentoring->save();

        return redirect()->route('mentoring.list');
    }
    public function destroy($id)
    {
        $mentoring = Mentoring::findOrFail($id);

        $mentoring->delete();

        return redirect()->route('mentoring.list')->with('success', 'mentoring Deleted');;
    }
}
