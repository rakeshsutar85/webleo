<?php

namespace App\Http\Controllers;

use App\Models\Dealer;
use App\Models\MapDevice;
use Illuminate\Http\Request;
use App\Services\UserService;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class MapDeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function index()
    {
        //
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
        $userData = ['name' => $request['customerName'], 'email' => $request['customerEmail']];
        $user = $this->userService->store($userData, 'user');
        //
        $mapDevice = new MapDevice();
        $mapDevice->user_id = $user;
        $mapDevice->state = $request['state'];
        $mapDevice->distributor_id = $request['distributor'];
        $mapDevice->dealer_id = $request['dealer'];
        $mapDevice->device_type = $request['deviceType'];
        $mapDevice->device_seriel_no = $request['deviceNo'];
        $mapDevice->voltage = $request['voltage'];
        $mapDevice->element_type = $request['elementType'];
        $mapDevice->batch_no = $request['batchNo'];
        $mapDevice->accessory = $request['accessory'];
        $mapDevice->element_id = $request['element'];
        $mapDevice->accessories_type = $request['accessories_type'];
        $mapDevice->element_model = $request['model'];
        $mapDevice->part = $request['part'];
        $mapDevice->barcode = $request['available_barcodes'];
        $mapDevice->vehicle_birth = $request['vehicleBirth'];
        $mapDevice->vehicle_registration_number = $request['regNumber'];
        $mapDevice->vehicle_date = $request['regdate'];
        $mapDevice->vehicle_chassis_no = $request['chassisNumber'];
        $mapDevice->vehicle_engine_no = $request['engineNumber'];
        $mapDevice->vehicle_type = $request['vehicleType'];
        $mapDevice->vehicle_make_model = $request['vaiclemodel'];
        $mapDevice->vehicle_model_year = $request['vaimodelyear'];
        $mapDevice->vehicle_insurance_renew_date = $request['vaicleinsurance'];
        $mapDevice->vehicle_pollution_renew_date = $request['pollutiondate'];
        $mapDevice->customer_name = $request['customerName'];
        $mapDevice->customer_email = $request['customerEmail'];
        $mapDevice->customer_mobile = $request['customerMobile'];
        $mapDevice->customer_gst_no = $request['customergstin'];
        $mapDevice->customer_state = $request['coustomerState'];
        $mapDevice->customer_district = $request['coustomerDistrict'];
        $mapDevice->customer_arear = $request['coustomerArea'];
        $mapDevice->customer_pincode = $request['coustomerpincode'];
        $mapDevice->customer_address = $request['coustomeraddress'];
        $mapDevice->customer_rto_division = $request['rtoname'];
        $mapDevice->customer_aadhaar = $request['customeraadhar'];
        $mapDevice->customer_pan = $request['customerpanno'];
        $mapDevice->technician_id = $request['techniciaId'];
        $mapDevice->invoice_no = $request['InvoiceNo'];
        $mapDevice->vehicle_km_reading = $request['VehicleKMReading'];
        $mapDevice->driver_license_no = $request['DriverLicenseNo'];
        $mapDevice->mapped_date = $request['MappedDate'];
        $mapDevice->no_of_panic_buttons = $request['NoOfPanicButtons'];
        $vehicleimgfilePath = $request->file('vehicleimg')->store('uploads', 'public');
        $mapDevice->vehicle = $vehicleimgfilePath;
        $vehiclercfilePath = $request->file('vehiclerc')->store('uploads', 'public');
        $mapDevice->rc = $vehiclercfilePath;
        $vaicledeviceimgfilePath = $request->file('vaicledeviceimg')->store('uploads', 'public');
        $mapDevice->device = $vaicledeviceimgfilePath;
        $pancardimgfilePath = $request->file('pancardimg')->store('uploads', 'public');
        $mapDevice->pan = $pancardimgfilePath;
        $aadhaarfilePath = $request->file('aadharcardimg')->store('uploads', 'public');
        $mapDevice->aadhaar = $aadhaarfilePath;
        $invoiceimgfilePath = $request->file('invoiceimg')->store('uploads', 'public');
        $mapDevice->invoice = $invoiceimgfilePath;
        $signatureimgfilePath = $request->file('signatureimg')->store('uploads', 'public');
        $mapDevice->signature = $signatureimgfilePath;
        $panicbuttonimgfilePath = $request->file('panicbuttonimg')->store('uploads', 'public');
        $mapDevice->panic_button = $panicbuttonimgfilePath;
        $mapDevice->save();
        return redirect()->back()->with('success', 'Device Mapped!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function showImage($filename): Response
    {
        $path = "private/uploads/{$filename}";

        if (Storage::exists($path)) {
            $file = Storage::get($path);
            $mimeType = Storage::mimeType($path);

            return response($file, 200)->header('Content-Type', $mimeType);
        }

        abort(404, 'Image not found');
    }

    public function certificate()
    {
        $mapDevicedata = MapDevice::find(1);
        $mapDevicedealerData =  Dealer::find($mapDevicedata->dealer_id);
        // return $mapDevicedata;
        //return $mapDevicedealerData;
        return view('manufacturer.certificate', compact('mapDevicedata', 'mapDevicedealerData'));
    }
}
