<?php

namespace App\Http\Controllers;

use App\Models\EstimateBudget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class EstimateBudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apiUrl = 'https://openexchangerates.org/api/currencies.json';
        $response = Http::get($apiUrl);

        return view('pages.budget');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        $userBudget = EstimateBudget::create([
            'user_id' => $user->id,
            'amount' => $request->input('amount'),
            'currency' => $request->input('currency'),
            'description' => $request->input('description')
        ]);

        if ($userBudget){
            return redirect()->route('home');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(EstimateBudget $estimateBudget)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EstimateBudget $estimateBudget)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EstimateBudget $estimateBudget)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EstimateBudget $estimateBudget)
    {
        //
    }
}
