<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offers = Offer::all();

        return view('index', compact('offers'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $offer = Offer::findOrFail($id);
        return view('show', compact('offer'));
    }
}
