<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrdonnanceResource;
use App\Models\Ordonnance;
use Illuminate\Http\Request;

class OrdonnanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return OrdonnanceResource::collection(Ordonnance::orderBy('updated_at')->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Ordonnance = Ordonnance::create([
            'desc' => $request->desc,
            'od' => $request->od,
            'og' => $request->og,
            'client_id' => $request->client_id
        ]);

        return new OrdonnanceResource($Ordonnance);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ordonnance = Ordonnance::findOrFail($id);
        return new OrdonnanceResource($ordonnance);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ordonnance = Ordonnance::findOrFail($id);
        $ordonnance->update([
            'desc' => $request->desc,
            'od' => $request->od,
            'og' => $request->og
        ]);

        return new OrdonnanceResource($ordonnance);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ordonnance::destroy($id);
        return response()->noContent();
    }
}
