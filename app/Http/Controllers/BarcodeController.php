<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barcode;
use App\Models\BarcodeAllocation;
use App\Models\Distributor;
use App\Models\IMEINO;
use App\Models\Element;
use App\Models\BracodeCustomValue;

class BarcodeController extends Controller
{

    public function index()
    {
        $barcode = Barcode::with('elementType', 'modelNo')->where('manuf_id', auth()->user()->id)->get()->groupBy('barcode_no');
        return view('manufacturer.barcode')->with(compact('barcode'));
    }
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);

        $barcode = new Barcode;
        $barcode->manuf_id = auth()->user()->id;
        $barcode->element_id = $request['element'];
        $barcode->type_id = $request['element_type'];
        $barcode->model_id = $request['model_no'];
        $barcode->part_id = $request['device_part_no'];
        $barcode->serialNumber = $request['barcodeNo'];
        $barcode->barcodeNo = $request['barcodeNo'];
        $barcode->IMEINO = $request['barcodeNo'];
        $barcode->BatchNo = $request['batchNo'];
        $barcode->save();

        unset($data['_token'], $data['element'], $data['element_type'], $data['model_no'], $data['device_part_no'], $data['voltage'], $data['batchNo'], $data['BarCodeCreationType'], $data['barcodeNo'], $data['is_renew'], $data['UniqueID']);
        // dd($data);
        foreach ($data as $key => $value) {
            $customValue = new BracodeCustomValue;
            $customValue->barcode_id = $barcode->id;
            $customValue->customFieldId = $key;
            $customValue->value = $value;
            $customValue->save();
        }

        return redirect()->back()->with("success", "Barcode Created!");
    }

    public function allocate()
    {
        $element = Element::all();
        $imei = IMEINO::all();
        $distributer = Distributor::where('manuf_id', auth()->user()->id)->get();
        return view('manufacturer.allocate', compact('distributer', 'element', 'imei'))->render();
    }

    public function saveBarcodeAllocation(Request $request)
    {

        // $request->validate([
        //     'distributor_id' => 'required|exists:users,id',
        //     'dealer_id' => 'required|exists:users,id',
        //     'allocated_barcodes' => 'required|array',
        //     'allocated_barcodes.*' => 'exists:barcodes,id',
        // ]);

        // Iterate over allocated barcodes


        foreach ($request->allocated_barcodes as $barcode_id) {
            BarcodeAllocation::create([
                'manufacturer_id' => auth()->user()->id,
                'distributor_id' => $request->distributor,
                'dealer_id' => $request->dealer,
                'barcode_id' => $barcode_id,
                'status' => 'allocated',
            ]);
        }

        return redirect()->back()->with('success', 'Barcodes allocated successfully!');
    }
}
