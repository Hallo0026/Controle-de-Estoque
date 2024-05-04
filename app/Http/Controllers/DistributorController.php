<?php

namespace App\Http\Controllers;

use App\Models\Distributor;
use Illuminate\Http\Request;

class DistributorController extends Controller
{

    public $distributor;

    public function __construct(Distributor $distributor)
    {
        $this->distributor = $distributor;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->distributor->all();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate($this->distributor->rules(), $this->distributor->feedback());
        return $this->distributor->create($request->all());
    }
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $distributor = $this->distributor->find($id);
        if ($distributor === null) {
            return response()->json(['error' => 'Not Found'], 404);
        }

        return response()->json($distributor, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $distributor = $this->distributor->find($id);
        $request->validate($distributor->rules(), $distributor->feedback());
        $distributor->update($request->all());
        return response()->json($distributor, 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $distributor = $this->distributor->find($id);
        $distributor->delete();
        return response()->json(null, 204);
    }
}
