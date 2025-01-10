<?php

namespace App\Services;

use App\Models\Technician;
use App\Services\UserService;
class TechnicianService
{
    /**
     * Create a new class instance.
     */
    public function __construct(private UserService $userService)
    {
        //
    }

    public function create($data)
{
    $userData = ['name' => $data['name'], 'email' => $data['email']];
    $user = $this->userService->store($userData, 'technician');

    $technician = new Technician();
    $technician->user_id = $user;
    $technician->dealer_id = auth()->user()->id;
    $technician->business_name = $data['name'];
    $technician->gender = $data['gender'] ?? null;
    $technician->email = $data['email'];
    $technician->mobile = $data['mobile_no'] ?? null;
    $technician->aadhar = $data['aadhar'] ?? null;
    $technician->dob = $data['dob'] ?? null;
    $technician->qualification = $data['qulification'] ?? null;

    $technician->save();

    return 1;
}



}