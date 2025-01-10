@extends('layouts.manufacturerapp')

@section('content')
<div class="container-fluid page-body-wrapper">
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="container mt-5">
                <h3 class="text-center">Manage Bar Code Allocation</h3>
                <p class="text-center text-muted">It shows the list of Bar Code allocation</p>
                <div class="row text-center">
                    <div class="col-md-3">
                        <div class="card text-white bg-total mb-3">
                            <div class="card-body">
                                {{-- <i class="fa-solid fa-barcode"></i> --}}
                                <h5 class="card-title text-white">5347</h5>
                                <p class="card-text text-white">TOTAL DEVICE</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-white mb-3" style="background-color: #086c57">
                            <div class="card-body">
                                <h5 class="card-title text-white">86</h5>
                                <p class="card-text text-white">AVAILABLE DEVICE</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-white mb-3" style="background-color: #e9b517">
                            <div class="card-body">
                                <h5 class="card-title text-white">5261</h5>
                                <p class="card-text text-white">ALLOCATED DEVICE</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-white bg-danger mb-3">
                            <div class="card-body">
                                <h5 class="card-title">3449</h5>
                                <p class="card-text">INSTALLED DEVICE</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="search" placeholder="search">
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#allocate-barcode">
                                    Allocate Barcodes
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">


                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Allocate Barcode</h4>
                                <form action="{{ route('barcode.allocate') }}" method="post">
                                    @csrf
                                    <div class="row my-2">
                                        <div class="col-md-3">
                                            <label for="">Country</label>
                                            <select name="country" class="form-control form-control-sm country">
                                                <option disabled @selected(true)>Choose Country
                                                </option>
                                                <option value="china" @selected(old('country')=='china' )>China
                                                </option>
                                                <option value="india" @selected(old('country')=='india' )>India
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="" class="form-label">State</label>
                                            <select class="form-control form-control-sm state" name="state"
                                                id=""></select>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="" class="form-label">Distributor
                                                {{-- <span
                                                    class="text-danger">*</span> --}}
                                            </label>
                                            <Select class="form-control distributor" name="distributor">
                                                <option value="">Select Distributor</option>
                                            </Select>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="" class="form-label">Dealer
                                                {{-- <span
                                                    class="text-danger">*</span> --}}
                                            </label>
                                            <Select class="form-control dealer" name="dealer">
                                                <option value="">Select Dealer</option>

                                            </Select>
                                        </div>

                                        <div class="col-md-3">
                                            <label for="" class="form-label">Element<span
                                                    class="text-danger">*</span></label>
                                            <Select class="form-control element" name="element">
                                                <option>Select Element</option>
                                                @foreach ($element as $data)
                                                <option value="{{ $data->id }}">{{ $data->name }}
                                                </option>
                                                @endforeach
                                            </Select>
                                        </div>

                                        <div class="col-md-3">
                                            <label for="" class="form-label">Element Type<span
                                                    class="text-danger">*</span></label>
                                            <Select class="form-control element_type" name="element_type">
                                                <option value="">Select Element Type</option>

                                            </Select>
                                        </div>

                                        <div class="col-md-3">
                                            <label for="" class="form-label">Device Model Number<span
                                                    class="text-danger">*</span></label>
                                            <select name="model_no" class="form-control model-no">
                                                <option value="">Select Element Type</option>
                                            </select>
                                        </div>

                                        <div class="col-md-3">
                                            <label for="" class="form-label">Voltage<span
                                                    class="text-danger">*</span></label>
                                            <Select class="form-control voltage" name="voltage">
                                                <option value="">Select Voltage</option>
                                            </Select>
                                        </div>

                                        <div class="col-md-3">
                                            <label for="" class="form-label">Device Part Number<span
                                                    class="text-danger">*</span></label>
                                            <Select class="form-control partNo" name="DevicePartNumber">
                                                <option value="">Select Part Number</option>
                                            </Select>
                                        </div>

                                        <div class="col-md-3">
                                            <label for="" class="form-label">Type<span
                                                    class="text-danger">*</span></label>
                                            <Select class="form-control" name="type" id="type">
                                                <option value="">NEW</option>
                                                <option value="">RENEW</option>
                                            </Select>
                                        </div>

                                        <div class="container mt-5">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label for="available_barcodes" class="form-label">BarCode</label>
                                                    <select class="form-select" multiple size="10" id="available_barcodes">

                                                    </select>
                                                </div>

                                                <div class="col-md-2 d-flex flex-column justify-content-center align-items-center">
                                                    <button type="button" id="btn-add" class="btn btn-primary mb-2">&rarr;</button>
                                                    <button type="button" id="btn-remove" class="btn btn-primary">&larr;</button>
                                                </div>

                                                <div class="col-md-5">
                                                    <label for="allocated_barcodes" class="form-label">
                                                        Allocated BarCode (<span id="allocated_count">0</span>)
                                                    </label>
                                                    <select id="allocated_barcodes" class="form-select" multiple size="10" name="allocated_barcodes[]">
                                                        <!-- Allocated barcodes will be dynamically added here -->
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary my-3 float-end">Allocate</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Map Device -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Map Device</h4>
                                <form action="{{route('manufacturer.store.map.device')}}" method="post" enctype="multipart/form-data">
                                    <!-- RFC Header -->
                                    @csrf
                                    <div class="border border-secondary rounded m-3">
                                        <div class="bg-light p-2 border rounded-top">
                                            <h5 class="text-center mb-0">RFC Info</h5>
                                        </div>

                                        <!-- Form Body -->
                                        <div class="border rounded p-3">
                                            <div class="row">
                                                <!-- Country Dropdown -->
                                                <div class="form-group col-md-3">
                                                    <label for="country">Country<span class="text-danger">*</span></label>
                                                    <select name="country" class="form-control form-control-sm country">
                                                        <option disabled @selected(true)>Choose Country
                                                        </option>
                                                        <option value="china" @selected(old('country')=='china' )>China
                                                        </option>
                                                        <option value="india" @selected(old('country')=='india' )>India
                                                        </option>
                                                    </select>
                                                </div>

                                                <!-- State Dropdown -->
                                                <div class="form-group col-md-3">
                                                    <label for="state">State <span class="text-danger">*</span></label>
                                                    <select class="form-control form-control-sm state" name="state"
                                                        id=""></select>
                                                </div>

                                                <!-- Distributor Dropdown -->
                                                <div class="form-group col-md-3">
                                                    <label for="distributor">Distributor <span class="text-danger">*</span></label>
                                                    <Select class="form-control distributor" name="distributor">
                                                        <option value="">Select Distributor</option>
                                                    </Select>
                                                </div>

                                                <!-- Dealer Dropdown -->
                                                <div class="form-group col-md-3">
                                                    <label for="dealer">Dealer <span class="text-danger">*</span></label>
                                                    <Select class="form-control dealer" name="dealer">
                                                        <option value="">Select Dealer</option>
                                                    </Select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="border border-secondary rounded m-3">
                                        <!-- Device Info Header -->
                                        <div class="bg-light p-2 border rounded-top">
                                            <h5 class="text-center mb-0">Device Info</h5>
                                        </div>

                                        <!-- Form Body -->
                                        <div class="border rounded p-3">
                                            <div class="row">
                                                <!-- Device Type Dropdown -->
                                                <div class="form-group col-md-3">
                                                    <label for="deviceType">Device Type <span class="text-danger">*</span></label>
                                                    <select id="deviceType" name="deviceType" class="form-control">
                                                        <option>Select Device Type</option>
                                                        <option value="New">New</option>
                                                        <option value="Renewal">Renewal</option>
                                                        <!-- Add more device types here if needed -->
                                                    </select>
                                                </div>

                                                <!-- Device No Dropdown -->
                                                <div class="form-group col-md-3">
                                                    <label for="deviceNo">Device No <span class="text-danger">*</span></label>
                                                    <select name="deviceNo" class="form-control deviceno">
                                                        <option>Select Device Number</option>
                                                        <!-- Add more device numbers here if needed -->
                                                    </select>
                                                </div>

                                                <!-- Voltage Input (disabled) -->
                                                <div class="form-group col-md-2">
                                                    <label for="voltage">Voltage</label>
                                                    <input type="text" class="form-control" id="voltage" name="voltage" placeholder="">
                                                </div>

                                                <!-- Element Type Input (disabled) -->
                                                <div class="form-group col-md-2">
                                                    <label for="elementType">Element Type</label>
                                                    <input type="text" class="form-control" id="elementType" name="elementType" placeholder="">
                                                </div>

                                                <!-- Batch No Input (disabled) -->
                                                <div class="form-group col-md-2">
                                                    <label for="batchNo">Batch No.</label>
                                                    <input type="text" class="form-control" id="batchNo" name="batchNo" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="border border-secondary rounded m-3">
                                        <!-- Form Header -->
                                        <div class="bg-light p-2 border rounded-top">
                                            <h5 class=" text-center mb-0">(Accessories Accessories = SIM)</h5>
                                        </div>

                                        <!-- Form Body -->
                                        <div class="border rounded p-3" id="simdata">
                                            <div class="row" id="addextrasim">
                                                <!-- Accessory Dropdown -->
                                                <div class="form-group col-md-3">
                                                    <label for="accessory">Accessory</label>
                                                    <select id="accessory" name='accessory' class="form-control">
                                                        <option value="">Select Accessory</option>
                                                        <option value='1'>SIM</option>
                                                        <!-- Add more options as needed -->
                                                    </select>
                                                </div>

                                                <!-- Element Dropdown -->
                                                <div class="form-group col-md-3">
                                                    <label for="element">Element</label>
                                                    <select name='element' class="form-control element">
                                                        <option value="">Select Element</option>
                                                        @foreach ($element as $data)
                                                        <option value="{{ $data->id }}">{{ $data->name }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <!-- Element Type Dropdown -->
                                                <div class="form-group col-md-2">
                                                    <label for="element_type">Type</label>
                                                    <select name='accessories_type' class="form-control element_type">
                                                        <option value="">Select Type</option>
                                                    </select>
                                                </div>


                                                <!-- Model Dropdown -->
                                                <div class="form-group col-md-2">
                                                    <label for="model">Model</label>
                                                    <select name='model' class="form-control model-no">
                                                        <option value="">Select Model</option>
                                                    </select>
                                                </div>

                                                <!-- Part Dropdown -->
                                                <div class="form-group col-md-2">
                                                    <label for="part">Part</label>
                                                    <select name="part" class="form-control partNo">
                                                        <option value="">Select Part</option>
                                                    </select>
                                                </div>

                                                <!-- Barcode Dropdown -->
                                                <div class="form-group col-md-2">
                                                    <label for="barcode">Barcode</label>
                                                    <select id="available_barcodes" name="available_barcodes" class="form-control available_barcodes">
                                                        <option value="">Select barcode</option>
                                                        <!-- Add more options as needed -->
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="border border-secondary rounded m-3">
                                        <div class="bg-light p-2 border rounded-top">
                                            <h5 class="text-center mb-0">
                                                Vehicle Info
                                            </h5>
                                        </div>
                                        <div class="border rounded p-3">
                                            <div class="row">
                                                <div class="form-group col-md-2">
                                                    <label for="vehicleBirth">Vehicle Birth<span class="text-danger">*</span></label>
                                                    <select id="vehicleBirth" name="vehicleBirth" class="form-control">
                                                        <option selected value="Old">Old</option>
                                                        <option value="New">New</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-2" id="vaicleregNumber">
                                                    <label for="regNumber">Registration Number<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="regNumber" name="regNumber"
                                                        placeholder="Enter Registration Number">
                                                </div>
                                                <div class="form-group col-md-2" id="vaicledate">
                                                    <label for="date">Date<span class="text-danger">*</span></label>
                                                    <input type="date" class="form-control" id="date" name="regdate">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="chassisNumber">Chassis Number<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="chassisNumber" name="chassisNumber"
                                                        placeholder="Enter Chassis Number">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="engineNumber">Engine Number<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="engineNumber" name="engineNumber"
                                                        placeholder="Enter Engine Number">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-2">
                                                    <label for="vehicleType">Vehicle Type<span class="text-danger">*</span></label>
                                                    <select id="vehicleType" name="vehicleType" class="form-control">
                                                        <option selected>Choose Vehicle Type</option>
                                                        <option value="AUTO">AUTO</option>
                                                        <option value="BUS">BUS</option>
                                                        <option value="JCB">JCB</option>
                                                        <option value="MAXI CAB">MAXI CAB</option>
                                                        <option value="OIL TANK">OIL TANK</option>
                                                        <option value="PICKUP">PICKUP</option>
                                                        <option value="SCHOOL BUS">SCHOOL BUS</option>
                                                        <option value="TANK TRUCK">TANK TRUCK</option>
                                                        <option value="TAXI">TAXI</option>
                                                        <option value="TEMPO">TEMPO</option>
                                                        <option value="TRACTOR">TRACTOR</option>
                                                        <option value="TRAILER TRUCK">TRAILER TRUCK</option>
                                                        <option value="TRAVILER">TRAVILER</option>
                                                        <option value="TRUCK">TRUCK</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="makeModel">Make & Model<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="vaiModel" name="vaiclemodel"
                                                        placeholder="Enter Make & Model">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="modelYear">Model Year<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="modelYear" name="vaimodelyear"
                                                        placeholder="Enter Model Year">
                                                </div>

                                                <div class="form-group col-md-2">
                                                    <label for="insurance">Insurance Renew date</label>
                                                    <input type="date" class="form-control" id="insurance" name="vaicleinsurance">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="panicButton">Pollution Renew date</label>
                                                    <input type="date" class="form-control" id="panicButton" name="pollutiondate">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="border border-secondary rounded m-3">
                                        <div class="bg-light p-2 border rounded-top">
                                            <h5 class="text-center mb-0">
                                                Customer Info
                                            </h5>
                                        </div>
                                        <div class="border rounded p-3">
                                            <div class="row">
                                                <div class="form-group col-md-3">
                                                    <label for="customerName">Name</label>
                                                    <input type="text" class="form-control" id="customerName" name="customerName"
                                                        placeholder="Enter Name">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control" id="email" name="customerEmail"
                                                        placeholder="Enter Email">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="mobile">Mobile</label>
                                                    <input type="text" class="form-control" id="mobile" name="customerMobile"
                                                        placeholder="Enter Mobile">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="gstin">GSTIN Number</label>
                                                    <input type="text" class="form-control" id="gstin" name="customergstin" value="">
                                                </div>
                                            </div>
                                            <div class="row form-group">

                                                <div class=" col-md-3">
                                                    <label for="country">Country</label>
                                                    <select id="country" name="coustomerCountry" class="form-select">
                                                        <option selected>India</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="state">State<span class="text-danger">*</span></label>
                                                    <select name="coustomerState" id="state" class="form-select" onchange="updateDistricts();">
                                                        <option value="" hidden>Select State</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="">District<span class="text-danger">*</span></label>
                                                    <select name="coustomerDistrict" id='District' class="form-select" onchange="updateAreas();">
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="area">Area<span class="text-danger">*</span></label>
                                                    <select name="coustomerArea" id="area" class="form-select" onchange="updatePinCodes();">
                                                        <option value="" hidden>Select Area</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="pincode">Pin Code<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="coustomerpincode" id="pincode" readonly>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="aadhaar">Address<span class="text-danger">*</span></label></label>
                                                    <input type="text" class="form-control" id="address" name="coustomeraddress"
                                                        placeholder="Enter Address">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="rtoDivision">RTO Division<span class="text-danger">*</span></label></label>
                                                    <input type="text" class="form-control" name="coustomerRtoname" id="rtoname">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="aadhaar">Aadhaar<span class="text-danger">*</span></label></label>
                                                    <input type="text" class="form-control" id="aadhaar" name="customeraadhar" placeholder="Enter Aadhaar">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="panNo">Pan No<span class="text-danger">*</span></label></label>
                                                    <input type="text" class="form-control" id="panNo" name="customerpanno">
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="border border-secondary rounded m-3">
                                        <div class="bg-light p-2 border rounded-top">
                                            <h5 class="text-center mb-0">Packages</h5>
                                        </div>
                                        <div class="border rounded p-3">
                                            <div class="row">

                                                <div class="col-md-4 mb-4">
                                                    <div class="card text-center shadow-sm h-100 select-subscription"
                                                        data-id="" style="width: 100%; cursor: pointer;">
                                                        <!-- Added cursor:pointer for click indication -->
                                                        <div class="card-body">
                                                            <div class="d-flex justify-content-between">
                                                                <h5 class="card-title fw-bold"></h5>
                                                                <div class="d-flex align-items-center">
                                                                    <i class="bi bi-clock me-1"></i>
                                                                    <span></span>
                                                                </div>
                                                            </div>
                                                            <h3 class="mt-3">₹</h3>
                                                            <p class="text-muted"></p>
                                                            <p class="card-text"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="text" name="subscriptionpackage" id="subscriptionpackage" value="" hidden>
                                        </div>
                                    </div>
                                    <div class="border border-secondary rounded m-3">

                                        <div class="bg-light border rounded-top d-flex justify-content-center align-items-center">
                                            <div class="col-md-8">
                                                <h5 class="text-center mb-0">Technician Info</h5>
                                            </div>
                                            <div class=" col-md-2 d-flex py-1">
                                                <select class="form-select technician" id="" name="techniciaId">
                                                    <option>Select Technician</option>
                                                </select>
                                            </div>
                                            <div class="col-md-2 px-2">
                                                <a href="#" class="btn btn-primary p-2">Add Technician</a>
                                            </div>

                                        </div>
                                        <div class="border rounded p-3">
                                            <div class="row">
                                                <div class="form-group col-md-2">
                                                    <label for="firstName" class="form-label">First Name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="firstName" name="techfirstName"
                                                        placeholder="First Name">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="lastName" class="form-label">Last Name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="lastName" name="techlastName"
                                                        placeholder="Last Name">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="Email" name="techemail" placeholder="Email">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="gender" class="form-label">Gender <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="Gender" name="techgender" placeholder="Gender">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="mobile" class="form-label">Mobile <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="Mobile" name="techmobile" placeholder="Mobile">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="dob" class="form-label">Date Of Birth</label>
                                                    <input type="date" class="form-control" id="dob" name="techdob" placeholder="Date Of Birth">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border border-secondary rounded m-3">
                                        <div class="bg-light p-2 border rounded-top">
                                            <h5 class="text-center mb-0">Installation Detail</h5>
                                        </div>
                                        <div class="border rounded p-3">
                                            <div class="row">
                                                <div class="form-group col-md-2">
                                                    <label for="InvoiceNo" class="form-label">Invoice No<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="InvoiceNo" name="InvoiceNo">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="Vehicle KM Reading" class="form-label">Vehicle KM Reading<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="VehicleKMReading" name="VehicleKMReading">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="Driver License No" class="form-label">Driver License No<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="DriverLicenseNo" name="DriverLicenseNo">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="Mapped Date" class="form-label">Mapped Date<span
                                                            class="text-danger">*</span></label>
                                                    <input type="date" class="form-control" id="MappedDate" name="MappedDate">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="No Of Panic Buttons" class="form-label">No Of Panic Buttons<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="NoOfPanicButtons" name="NoOfPanicButtons">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border border-secondary rounded m-3">
                                        <div class="bg-light p-2 border rounded-top">
                                            <h5 class="text-center mb-0">Vehicle Document (* document)</h5>
                                        </div>
                                        <div class="border rounded p-3">
                                            <p class="text-danger small mb-2 d-inline-block text-center">* File type supported PNG, JPG, JPEG, and
                                                PDF
                                                only and file size should be up to 6MB.</p>
                                            <div class="row mb-3">
                                                <div class="col-md-3">
                                                    <label for="vehicle" class="form-label">Vehicle</label>
                                                    <input type="file" class="form-control" id="vehicle" name="vehicleimg">
                                                </div>
                                                <div class="col-md-3 mx-5">
                                                    <label for="rc" class="form-label">RC</label>
                                                    <input type="file" class="form-control" id="rc" name="vehiclerc">
                                                </div>
                                                <div class="col-md-3 mx-5">
                                                    <label for="device" class="form-label">Device</label>
                                                    <input type="file" class="form-control" id="device" name="vaicledeviceimg">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-3">
                                                    <label for="pan" class="form-label">Pan Card</label>
                                                    <input type="file" class="form-control" id="pan" name="pancardimg">
                                                </div>
                                                <div class="col-md-3 mx-5">
                                                    <label for="aadhaar" class="form-label">Aadhaar Card</label>
                                                    <input type="file" class="form-control" id="aadhaar" name="aadharcardimg">
                                                </div>
                                                <div class="col-md-3 mx-5">
                                                    <label for="invoice" class="form-label">Invoice</label>
                                                    <input type="file" class="form-control" id="invoice" name="invoiceimg">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-3">
                                                    <label for="signature" class="form-label">Signature</label>
                                                    <input type="file" class="form-control" id="signature" name="signatureimg">
                                                </div>
                                                <div class="col-md-3 mx-5">
                                                    <label for="panic" class="form-label">Panic Button with Sticker</label>
                                                    <input type="file" class="form-control" id="panic" name="panicbuttonimg">
                                                </div>
                                            </div>

                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <button type="reset" class="btn btn-secondary">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="allocate-barcode" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>
<style>
    .bg-total {
        background: rgb(53, 88, 230);

    }
</style>

<script>
    $(document).ready(function() {
        $('#btn-add').click(function() {
            $('#available_barcodes option:selected').each(function() {
                const option = $(this);
                option.remove();
                $('#allocated_barcodes').append(option);
            });
            updateAllocatedCount();
        });

        $('#btn-remove').click(function() {
            $('#allocated_barcodes option:selected').each(function() {
                const option = $(this);
                option.remove();
                $('#available_barcodes').append(option);
            });
            updateAllocatedCount();
        });

        function updateAllocatedCount() {
            const count = $('#allocated_barcodes option').length;
            $('#allocated_count').text(count);
        }
    });
</script>


<script>
    $(document).ready(function() {
        const $element = $('.element');
        $element.on('change', function() {
            const selectedValue = $(this).val();
            console.log('Selected Value:', selectedValue); // Log the selected value for debugging
            const $form = $(this).parents("form"); // Cache the form for reuse
            const $elementType = $form.find(
                ".element_type"); // Target the dropdown within the same form

            $elementType.empty(); // Clear previous options
            $elementType.append('<option value="">Loading...</option>'); // Temporary loading indicator

            $.ajax({
                url: `/superadmin/fetch/element-type/${selectedValue}`,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $elementType.empty(); // Clear loading message
                    if (data && data.length > 0) {
                        data.forEach(type => {
                            $elementType.append(
                                `<option value="${type.id}">${type.type}</option>`
                            );
                        });
                    } else {
                        $elementType.append(
                            '<option value="">No options available</option>');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error); // Log the error for debugging
                    $elementType.empty();
                    $elementType.append('<option value="">Failed to load options</option>');
                }
            });
        });

        const $element_type = $('.element_type');
        $element_type.on('change', function() {
            alert($(this).val());
            const $form = $(this).parents("form"); // Cache the form for reuse
            const $model_no = $form.find(
                ".model-no"); // Target the dropdown within the same form
            $model_no.empty(); // Clear previous options
            $model_no.append('<option value="">Loading...</option>'); // Temporary loading indicator

            const $voltage = $form.find(
                ".voltage"); // Target the dropdown within the same form
            $voltage.empty(); // Clear previous options
            $voltage.append('<option value="">Loading...</option>');

            $.ajax({
                url: `/superadmin/fetch/model-no/${$(this).val()}`,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $model_no.empty(); // Clear loading message
                    if (data && data.length > 0) {
                        data.forEach(modelNo => {
                            $model_no.append(
                                `<option value="${modelNo.id}">${modelNo.model_no}</option>`
                            );
                            $voltage.append(
                                `<option value="${modelNo.id}">${modelNo.voltage}</option>`
                            );
                        });
                    } else {
                        $model_no.append(
                            '<option value="">No options available</option>');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error); // Log the error for debugging
                    $model_no.empty();
                    $model_no.append('<option value="">Failed to load options</option>');
                }
            });
        })


        const $modelNo = $('.model-no');
        $modelNo.on('change', function() {
            alert($(this).val());
            const $form = $(this).parents("form"); // Cache the form for reuse
            const $partNo = $form.find(
                ".partNo"); // Target the dropdown within the same form
            $partNo.empty(); // Clear previous options
            $partNo.append('<option value="">Loading...</option>'); // Temporary loading indicator

            $.ajax({
                url: `/superadmin/fetch/part-no/${$(this).val()}`,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $partNo.empty(); // Clear loading message
                    if (data && data.length > 0) {
                        data.forEach(partlNo => {
                            $partNo.append(
                                `<option value="${partlNo.id}">${partlNo.part_no}</option>`
                            );
                        });
                    } else {
                        $partNo.append(
                            '<option value="">No options available</option>');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error); // Log the error for debugging
                    $partNo.empty();
                    $partNo.append('<option value="">Failed to load options</option>');
                }
            });

        })


        const $partNo = $('.partNo');
        $partNo.on('change', function() {
            alert($(this).val());
            const $form = $(this).parents("form"); // Cache the form for reuse
            const $available_barcodes = $form.find(
                "#available_barcodes"); // Target the dropdown within the same form
            $available_barcodes.empty(); // Clear previous options
            //$available_barcodes.append('<option value="">Loading...</option>');
            $.ajax({
                url: `/superadmin/fetch/barcode/${$(this).val()}`,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    alert(JSON.stringify(response));
                    $('#available_barcodes').empty();

                    if (response.barcodes && response.barcodes.length > 0) {
                        response.barcodes.forEach(function(barcode) {
                            const option = `<option value="${barcode.id}">${barcode.barcodeNo}</option>`;
                            $('#available_barcodes').append(option);
                            $('.available_barcodes').append(option);
                        });
                    } else {
                        $('#available_barcodes').append('<option disabled>No barcodes available</option>');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching barcodes:', error);
                }
            });




        })


    });
</script>


<script>
    $(document).ready(function() {
        $('.state').change(function() {
            $('.distributor').empty();
            $('.distributor').append('<option value="null">select distributer</option>');
            const state = $(this).val();
            //alert(state);
            if (state) {
                $.ajax({
                    url: `/manufacturer/fetch/distributer/${state}`,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        //alert(JSON.stringify(data));
                        data.forEach(distributer => {
                            $(`.distributor`).append(`
                    <option value="${distributer.user_id}">${distributer.business_name}</option>
                  `);
                        });
                    }
                });
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('.distributor').change(function() {
            $('.dealer').empty(); // Clear existing options in the dealer dropdown
            $('.dealer').append('<option value="null">select dealer</option>');
            const distributer_id = $(this).val(); // Get the selected distributor ID
            if (distributer_id) { // Ensure a valid distributor ID is selected
                $.ajax({
                    url: `/manufacturer/fetch/dealer/${distributer_id}`, // API endpoint
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        // Check if data is an array and populate dealer dropdown
                        if (Array.isArray(data) && data.length > 0) {
                            data.forEach(dealer => {
                                $('.dealer').append(`
                                    <option value="${dealer.id}">${dealer.business_name}</option>
                                `);
                            });
                        } else {
                            alert('No dealers found for the selected distributor.');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX error:', status, error);
                        alert('Failed to fetch dealers. Please try again.');
                    }
                });
            } else {
                alert('Please select a valid distributor.');
            }
        });
    });
</script>


<script>
    $(document).ready(function() {
        $.ajax({
            url: `/manufacturer/fetch/deviceno`,
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                //alert(JSON.stringify(data));
                data.forEach(deviceno => {
                    $(`.deviceno`).append(`
                    <option value="${deviceno.id}">${deviceno.serialNumber}</option>
                  `);
                });
            }
        });


    });
</script>

<script>
    $(document).ready(function() {
        $.ajax({
            url: `/manufacturer/fetch/technician`,
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                // alert(JSON.stringify(data));
                data.forEach(technician => {
                    $(`.technician`).append(`
                    <option value="${technician.user_id}">${technician.business_name}</option>
                  `);
                });
            }
        });


    });
</script>

<script>
    let locationData = {};

    // Load JSON Data
    async function loadLocationData() {
        try {
            const response = await fetch('/data/pincode.json');
            locationData = await response.json();
            populateStates();
        } catch (error) {
            console.error("Error loading location data:", error);
        }
    }

    // Populate State Dropdown
    function populateStates() {
        const stateSelect = document.getElementById('state');
        stateSelect.innerHTML = '<option value="" hidden>Select State</option>'; // Reset dropdown
        for (const state in locationData) { // Loop directly over locationData
            const option = document.createElement('option');
            option.value = state;
            option.textContent = state;
            stateSelect.appendChild(option);
        }
    }


    function updateDistricts() {
        const stateSelect = document.getElementById('state');
        const districtSelect = document.getElementById('District');
        const selectedState = stateSelect.value;

        // Reset district dropdown
        districtSelect.innerHTML = '<option value="" hidden>Select District</option>';

        if (selectedState && locationData[selectedState]) {
            const districts = locationData[selectedState];
            for (const district in districts) {
                const option = document.createElement('option');
                option.value = district;
                option.textContent = district;
                districtSelect.appendChild(option);
            }
        }
    }

    function updateAreas() {
        const stateSelect = document.getElementById('state');
        const districtSelect = document.getElementById('District');
        const areaSelect = document.getElementById('area');
        const selectedState = stateSelect.value;
        const selectedDistrict = districtSelect.value;

        areaSelect.innerHTML = '<option value="" hidden>Select Area</option>';

        if (locationData[selectedState] && locationData[selectedState][selectedDistrict]) {
            const areas = locationData[selectedState][selectedDistrict];
            for (const area in areas) {
                const option = document.createElement('option');
                option.value = area;
                option.textContent = area;
                areaSelect.appendChild(option);
            }
        }
    }

    function updatePinCodes() {
        const areaSelect = document.getElementById('area');
        const pincodeInput = document.getElementById('pincode');
        const selectedArea = areaSelect.value;

        pincodeInput.value = '';

        const stateSelect = document.getElementById('state');
        const districtSelect = document.getElementById('District');
        const selectedState = stateSelect.value;
        const selectedDistrict = districtSelect.value;

        if (locationData[selectedState] && locationData[selectedState][selectedDistrict]) {
            const areas = locationData[selectedState][selectedDistrict];
            if (areas[selectedArea]) {
                pincodeInput.value = areas[selectedArea]; // Set the pin code for the selected area
            }
        }
    }


    // Initialize
    loadLocationData();
</script>

@endsection