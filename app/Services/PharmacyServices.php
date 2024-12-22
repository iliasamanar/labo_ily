<?php

namespace App\Services;

use App\Models\Pharmacy;
/**
 * Class PharmacyServices.
 */
class PharmacyServices
{

    public function getAllPharmacies()
    {
        return Pharmacy::all();
    }

    public function getPharmacyById($id)
    {
        return Pharmacy::find($id);
    }

    public function createPharmacy(array $data)
    {
        return Pharmacy::create($data);
    }

    public function updatePharmacy($id, array $data)
    {
        return Pharmacy::find($id)->update($data);
    }

    public function deletePharmacy($id)
    {
        return Pharmacy::find($id)->delete();
    }
}
