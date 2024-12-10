<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class OfferController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        if ($request->action === 'delete')
        {
            $this->destroy($request->id);
            return Redirect::to(route('home'));
        }

        $offers = Offer::all();

        return view('index', compact('offers'));
    }

        public function create()
        {
            return view('create');
        }

    /**
     * Display the specified resource.
     */

     public function store(Request $request)
    {
        $offer = Offer::create([
            'title' => $request->title,
            'enterprise' => $request->enterprise,
            'description' => $request->description,
            'workspace' => $request->workspace,
            'status' => $request->status
        ]);
        $offer->save();

        return Redirect::to(route('home'));
    }

    public function show(string $id)
    {
        $offer = Offer::findOrFail($id);
        return view('show', compact('offer'));
    }

    public function edit(string $id)
    {
        $offer = Offer::find($id);

        return view('edit', compact('offer'));
    }

    public function update(Request $request, string $id)
    {
        $offer = Offer::find($id);

        $offer -> update([
            'title' => $request->title,
            'enterprise' => $request->enterprise,
            'description' => $request->description,
            'workspace' => $request->workspace,
            'status' => $request->status
        ]);
        $offer->save();
        return Redirect::to(route('home'));
    }

    public function destroy(string $id)
    {
        $offer = Offer::find($id);
        $offer->delete();
    }
}
