<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\PharmacyServices;
use App\Http\Requests\Api\Pharmacy\StorePharmacyRequest;


class PharmacyController extends Controller
{
    protected $pharmacyServices;

    public function __construct(PharmacyServices $pharmacyServices)
    {
        $this->pharmacyServices = $pharmacyServices;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->pharmacyServices->getAllPharmacies();
    }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create(Request $request)
    // {
    //     return $this->pharmacyServices->createPharmacy($request->all());
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePharmacyRequest $request)
    {
        $pharmacy = $this->pharmacyServices->createPharmacy($request->all());
        return response()->json([
            'success' => true,
            'message' => 'Pharmacy created successfully',
            'data' => $pharmacy
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pharmacy = $this->pharmacyServices->getPharmacyById($id);
        return response()->json([
            'success' => true,
            'message' => 'Pharmacy fetched successfully',
            'data' => $pharmacy
        ], 200);
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(string $id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pharmacy = $this->pharmacyServices->updatePharmacy($id, $request->all());
        return response()->json([
            'success' => true,
            'message' => 'Pharmacy updated successfully',
            'data' => $pharmacy
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pharmacy = $this->pharmacyServices->deletePharmacy($id);
        return response()->json([
            'success' => true,
            'message' => 'Pharmacy deleted successfully',
            'data' => $pharmacy
        ], 200);
    }
}
