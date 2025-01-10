<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TacNo;
class TacNoController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        $tacNo = $request['tac_No'];

        foreach ($tacNo as $key => $value) {
            $table = new TacNo;
            $table->element_id = $request['element'];
            $table->type_id = $request['element_type'];
            $table->model_id = $request['model_no'];
            $table->part_id = $request['device_part_no'];
            $table->tacNo = $tacNo[$key];
            $table->save();

        }

        return redirect()->back()->with('success', 'Tac No Added');
    }
}