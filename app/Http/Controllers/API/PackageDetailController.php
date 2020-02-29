<?php

namespace App\Http\Controllers\API;

use App\PackageDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PackageDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Package::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $packageDetail = PackageDetail::create($request->all());

        return response()->json([
            'data' => $packageDetail,
            'message' => 'Package detail created successfully!'
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PackageDetail  $packageDetail
     * @return \Illuminate\Http\Response
     */
    public function show(PackageDetail $packageDetail)
    {
        return response()->json($packageDetail, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PackageDetail  $packageDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PackageDetail $packageDetail)
    {
        $packageDetail->update($request->all());

        return response()->json('Updated successfully', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PackageDetail  $packageDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(PackageDetail $packageDetail)
    {
        $packageDetail->delete();

        return response()->json('Deleted successfully', 200);
    }
}
