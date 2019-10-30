<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spicie;

class SpiciesController extends Controller
{
    public function add(Request $request)
    {
        $spicy = new Spicie();
        $spicy->spicy = $request->spicy;
        $spicy->save();
        return back()->with('status', 'Company Successfully Added');
    }

    public function delete($id)
    {
        $spicy = Spicie::where('id', $id)->firstOrFail();
        $spicy->delete();
        return back()->with('delete', 'Company Deleted Successfully');
    }

    public function update($id, Request $request){
        $spicy = Spicie::where('id', $id)->firstOrFail();
        $spicy->spicy = $request->spicy;
        $spicy->save();
        return back()->with('update', 'Company Updated Successfully');
    }

    public function get()
    {
        $spicies = Spicie::all();
        return view('admin.Spicies', ['spicies' => $spicies]);
    }
}
