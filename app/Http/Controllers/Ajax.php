<?php

namespace App\Http\Controllers;

use App\Models\Barcode;
use Illuminate\Http\Request;
use App\Models\Distributor;
use App\Models\ElementType;
use App\Models\DeviceModelNo;
use App\Models\DevicePartNo;
use App\Models\Customfields;
use App\Models\Dealer;
use App\Models\Technician;

use function PHPSTORM_META\elementType;

class Ajax extends Controller
{
    public function fetchdistributer($state)
    {
        $distributer = Distributor::where('manuf_id', auth()->user()->id)->where('state', $state)->get();

        return response()->json($distributer);
    }

    public function fetchdealer($distributer_id)
    {
        $dealer = Dealer::where('distributor_id', $distributer_id)->get();

        return response()->json($dealer);
    }

    public function fetchElementTypeByElemeNt($element_id)
    {
        $type = ElementType::where('element_id', $element_id,)->get();
        return $type;
    }

    public function fetchBarcodeByPartNo($part_id)
    {
        $barcode = Barcode::where('part_id', $part_id,)->get();
        return response()->json(['barcodes' => $barcode]);
    }

    public function fetchModelNoByType($type_id)
    {
        $model = DeviceModelNo::where('type_id', $type_id)->get();
        return $model;
    }

    public function fetchPartNoByModel($model_id)
    {
        $partNo = DevicePartNo::where('model_id', $model_id)->get();
        return $partNo;
    }

    public function fetchCustomFields($id, $parent)
    {
        if ($parent == 'element') {
            $customField = Customfields::where('element_id', $id)
                ->where('model_id', null)
                ->where('type_id', null)
                ->where('part_id', null)
                ->get(['colSize', 'select', 'inputType', 'id']);
        } elseif ($parent == 'type') {
            $customField = Customfields::where('type_id', $id)
                ->where('model_id', null)
                ->where('part_id', null)
                ->get(['colSize', 'select', 'inputType', 'id']);
        } elseif ($parent == 'modelNo') {
            $customField = Customfields::where('model_id', $id)
                ->where('part_id', null)
                ->get(['colSize', 'select', 'inputType', 'id']);
        }


        return $customField;
    }

    public function fetchTechnician(){
        $technician = Technician::all();
        return response()->json($technician);

    }

    public function fetchModelNoByElement($element_id)
    {
        $models = DeviceModelNo::where('element_id', $element_id)->get(['id', 'model_no', 'voltage']);
        if ($models->isEmpty()) {
            return response()->json(['error' => 'No models found'], 404);
        }
        return response()->json($models);
    }

    public function fetchPartNoByModelNo($model_id)
    {
        $parts = DevicePartNo::where('model_id', $model_id)->get(['id', 'part_no','type_id']);
        if ($parts->isEmpty()) {
            return response()->json(['error' => 'No models found'], 404);
        }
        return response()->json($parts);
    }

    public function fetchDeviceNo(){
        $deviceno = Barcode::where('manuf_id', auth()->user()->id)->get();
        return response()->json($deviceno);
    }

    
}
