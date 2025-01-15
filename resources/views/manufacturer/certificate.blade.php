@extends('layouts.manufacturerapp')

@section('content')
<div class="container-fluid page-body-wrapper d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="container-fluid">
                @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong> {{ Session::get('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <!-- <img src="{{ asset('/storage/173530235573logo.jpg') }}" alt="hello"> -->

                <div class="row d-flex justify-content-center align-items-center" style="min-height: 50vh;">
                    <div class="col-md-8 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <table class="table text-black">
                                        <tr>
                                            <td>
                                                <p>
                                                <h2><u><b>Fitment Certificate</b></u></h2>
                                                </p>
                                            </td>
                                            <td rowspan="2">
                                                <img
                                                    src="{{ asset('/storage/173530235573logo.jpg') }}"
                                                    alt="Image"
                                                    style="width: 100%; max-width: 500px; height: 100px; border-radius: 10px;">


                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>
                                                <h3><b>Department Copy</b></h3>
                                                </p>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Fitment Certificate No: TRAXOVLTD111100000</p>
                                            </td>
                                            <td>
                                                <p>An ISO 9001:2015 & NABCB Certified
                                                    Company</p>
                                            </td>
                                        </tr>
                                    </table>

                                    <div class="card" style="border-radius: 40px; border: 1px solid black; overflow: hidden;">
                                        <div class="card-body" style="padding: 0;">
                                            <table class="table text-black">
                                                <tr style="line-height: 1; height: 20px;">
                                                    <td>
                                                        <p>
                                                        <h3><u><b>Vehicle Details</b></u></h3>
                                                        </p>
                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>
                                                        <p></p>
                                                    </td>
                                                    <td rowspan="4">
                                                        <p></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Vehicle No</p>
                                                        <p>{{$mapDevicedata->vehicle_registration_number}}</p>
                                                    </td>
                                                    <td>
                                                        <p>Manufacture Year</p>
                                                        <p>{{$mapDevicedata->vehicle_date}}</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Vehicle Make</p>
                                                        <p>{{$mapDevicedata->vehicle_make_model}}</p>
                                                    </td>
                                                    <td>
                                                        <p>State</p>
                                                        <p>{{$mapDevicedata->customer_state}}</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Vehicle Model</p>
                                                        <p>{{$mapDevicedata->vehicle_model_year}}</p>
                                                    </td>
                                                    <td>
                                                        <p>RTO Code</p>
                                                        <p>{{$mapDevicedata->customer_rto_division}}</p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="card" style="border-radius: 40px; border: 1px solid black; overflow: hidden;">
                                        <div class="card-body" style="padding: 0;">
                                            <table class="table text-black">
                                                <tr>
                                                    <td colspan="3">
                                                        <p>
                                                        <h3><u><b>Vehicle Owner Details</b></u></h3>
                                                        </p>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Name</p>
                                                        <p>{{$mapDevicedata->customer_name}}</p>
                                                    </td>
                                                    <td>
                                                        <p>Mobile No</p>
                                                        <p>{{$mapDevicedata->customer_mobile}}</p>
                                                    </td>
                                                    <td>
                                                        <p>Address</p>
                                                        <p>{{$mapDevicedata->customer_address}}</p>
                                                    </td>
                                                </tr>
                                                <tr style="text-align: center;">

                                                    <td colspan="3">
                                                        <p>E-mail id</p>
                                                        <p>{{$mapDevicedata->customer_email}}</p>
                                                    </td>
                                                </tr>

                                            </table>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="card" style="border-radius: 40px; border: 1px solid black; overflow: hidden;">
                                        <div class="card-body" style="padding: 0;">
                                            <table class="table text-black">
                                                <tr>
                                                    <td colspan="3">
                                                        <p>
                                                        <h3><u><b>VLTD details: Manufactured by : Traxo India Automation</b></u></h3>
                                                        </p>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Model</p>
                                                        <p>{{$mapDevicedata->vehicle_model_year}}</p>
                                                    </td>
                                                    <td>
                                                        <p>Type / Tac No</p>
                                                        <p>xxxxxxx</p>
                                                    </td>
                                                    <td>
                                                        <p>Invoice No</p>
                                                        <p>xxxxxxx</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>IMEI NO</p>
                                                        <p>xxxxxx</p>
                                                    </td>
                                                    <td>
                                                        <p>Installation Date</p>
                                                        <p>xxxxxxx</p>
                                                    </td>
                                                    <td>
                                                        <p>Invoice Date</p>
                                                        <p>xxxxxxx</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>ICCID NO</p>
                                                        <p>xxxxxx</p>
                                                    </td>
                                                    <td>
                                                        <p>Recalibration Date</p>
                                                        <p>xxxxxxx</p>
                                                    </td>
                                                    <td>
                                                        <p>Primary SIM NO ( Network Provider Name)</p>
                                                        <p>xxxxxxx</p>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td colspan="2">
                                                        <p>NO. Of SOS/Panic Button</p>
                                                        <p>xxxxxxx</p>
                                                    </td>
                                                    <td>
                                                        <p>Secondary SIM NO ( Network Provider Name)</p>
                                                        <p>xxxxxxx</p>
                                                    </td>
                                                </tr>

                                            </table>
                                        </div>
                                    </div>
                                    <div class="card" style="border-radius: 40px; border: 1px solid black; overflow: hidden;">
                                        <div class="card-body" style="padding: 0;">
                                            <table class="table text-black">

                                                <tr>
                                                    <td>
                                                        <p>Dealer /Rfc / Installer</p>
                                                        <p>{{$mapDevicedealerData->business_name}}</p>
                                                    </td>
                                                    <td>
                                                        <p>Mobile Number</p>
                                                        <p>{{$mapDevicedealerData->mobile}}</p>
                                                    </td>
                                                    <td>
                                                        <p>Address</p>
                                                        <p>{{$mapDevicedealerData->address}}</p>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td colspan="3">
                                                        <div>
                                                            <img src="{{ asset('/storage/173530235573logo.jpg') }}" alt="" style="width: 50px; height: 50px; margin-left: 20px;">
                                                            <p>Stamp & Sign</p>
                                                        </div>


                                                    </td>

                                                </tr>

                                            </table>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-body">
                                            <p style="color: black;">
                                                This is to acknowledge confirm that we have got our vehicle bearing registration no OD11D973Z . VLT Device
                                                manufactured by TRAXO INDIA AUTOMATION bearing Sr. No........... We have checked the performance of the
                                                vehicle after fitment of the said VLT device the unit is sealed and functioning as per norms laid out in AIS-140.We have
                                                satisfied with the performance of the unit in all respects. We undertake not to raise any dispute or any legal claims
                                                against TRAXO INDIA AUTOMATION in the event that the above mentioned seals at found broken/tampered.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="card" style="border-radius: 40px; border: 1px solid black; overflow: hidden;">
                                        <div class="card-body">
                                            <table class="table text-black">

                                                <tr style="text-align: center;">
                                                    <td colspan="4">
                                                        <p>VLTD INSTALLATION IMAGES</p>
                                                    </td>
                                                </tr>
                                                <tr style="text-align: center;">

                                                    <td>
                                                        <div class="card" style="border-radius: 20px; border: 1px solid black; overflow: hidden;">
                                                            <div class="card-body" style="padding: 0;">
                                                                <p style="margin: 0;"><img
                                                                        src="{{ asset('/storage/173530235573logo.jpg') }}"
                                                                        alt="Image"
                                                                        style="width: 150px; height: 150px; border-radius: 10px; padding: 0;">
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <p>Vehicle Image</p>
                                                    </td>
                                                    <td>
                                                        <div class="card" style="border-radius: 20px; border: 1px solid black; overflow: hidden;">
                                                            <div class="card-body" style="padding: 0;">
                                                                <p style="margin: 0;"><img
                                                                        src="{{ asset('/storage/173530235573logo.jpg') }}"
                                                                        alt="Image"
                                                                        style="width: 150px; height: 150px; border-radius: 10px; padding: 0;">
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p>RC image</p>
                                                    </td>
                                                    <td>
                                                        <div class="card" style="border-radius: 20px; border: 1px solid black; overflow: hidden;">
                                                            <div class="card-body" style="padding: 0;">
                                                                <p style="margin: 0;"><img
                                                                        src="{{ asset('/storage/173530235573logo.jpg') }}"
                                                                        alt="Image"
                                                                        style="width: 150px; height: 150px; border-radius: 10px; padding: 0;">
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p>Device Image</p>
                                                    </td>
                                                    <td>
                                                        <div class="card" style="border-radius: 20px; border: 1px solid black; overflow: hidden;">
                                                            <div class="card-body" style="padding: 0;">
                                                                <p style="margin: 0;"><img
                                                                        src="{{ asset('/storage/173530235573logo.jpg') }}"
                                                                        alt="Image"
                                                                        style="width: 150px; height: 150px; border-radius: 10px; padding: 0;">
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p>Panic Button Image</p>
                                                    </td>

                                                </tr>

                                            </table>
                                        </div>
                                    </div>
                                    <br>
                                    <div style="display: flex; justify-content: space-between;">
                                        <div style="flex: 8;">
                                            <div class="card" style="border-radius: 20px; border: 1px solid black; overflow: hidden;">
                                                <div class="card-body">
                                                    <p><u>TRAXO INDIA AUTOMATION</u></p>
                                                    <p>Plot No: 443/4516, ITI Chowk, Near RTO Office, Balasore, Odisha, 756001, Toll Free 18008911545</p>
                                                </div>
                                            </div>

                                        </div>


                                        <div style="flex: 1; padding-left: 10px; padding-top: 30px;">
                                            <img src="{{ asset('/storage/173530235573logo.jpg') }}" alt="" style="width: 50px; height: 50px;">
                                        </div>
                                        <div style="flex: 1; padding-left: 10px; padding-top: 30px;">
                                            <img src="{{ asset('/storage/173530235573logo.jpg') }}" alt="" style="width: 50px; height: 50px;">
                                        </div>
                                    </div>
                                    <div style="display: flex; justify-content: space-between; width: 100%;">
                                        <div style="flex-grow: 1; text-align: left; padding-left: 20px;">
                                            <p>Email: info@traxo.in</p>
                                        </div>
                                        <div style="flex-grow: 1; text-align: left;">
                                            <p>Website: www.traxoindia.in</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>



                <!-- <div class="row d-flex justify-content-center align-items-center" style="min-height: 50vh;">
                    <div class="col-md-8 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <table class="table text-black">
                                        <tr>
                                            <td>
                                                <p>
                                                <h2><u><b>Fitment Certificate</b></u></h2>
                                                </p>
                                            </td>
                                            <td rowspan="2">
                                                <img
                                                    src="https://placehold.co/800x400/FFFF00/FF"
                                                    alt="Image"
                                                    style="width: 100%; max-width: 500px; height: 100px; border-radius: 10px;">


                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>
                                                <h3><b>Department Copy</b></h3>
                                                </p>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Fitment Certificate No: TRAXOVLTD111100000</p>
                                            </td>
                                            <td>
                                                <p>An ISO 9001:2015 & NABCB Certified
                                                    Company</p>
                                            </td>
                                        </tr>
                                    </table>

                                    <div class="card" style="border-radius: 40px; border: 1px solid black; overflow: hidden;">
                                        <div class="card-body">
                                            <table class="table text-black">
                                                <tr>
                                                    <td>
                                                        <p>
                                                            <u><b>Vehicle Owner Details</b></u>
                                                        </p>
                                                    </td>

                                                    <td colspan="2">
                                                        <p style="text-align: center;">
                                                            <u><b>Vehicle Details</b></u>
                                                        </p>
                                                    </td>
                                                    <td rowspan="4">
                                                        <p><img
                                                                src="https://placehold.co/200x200/000000/FF"
                                                                alt="Image"
                                                                style="width: 100px; height: 100px; border-radius: 10px;">
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Name</p>
                                                        <p>xxxxxx</p>
                                                    </td>
                                                    <td>
                                                        <p>Vehicle No</p>
                                                        <p>xxxxxxx</p>
                                                    </td>
                                                    <td>
                                                        <p>Manufacture Year</p>
                                                        <p>xxxxxx</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Mobile No</p>
                                                        <p>xxxxxx</p>
                                                    </td>
                                                    <td>
                                                        <p>Chassis NO</p>
                                                        <p>xxxxxx</p>
                                                    </td>
                                                    <td>
                                                        <p>Engine No</p>
                                                        <p>xxxxxxx</p>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Address</p>
                                                        <p>xxxxxx</p>
                                                    </td>
                                                    <td>
                                                        <p>Vehicle Make</p>
                                                        <p>xxxxxxx</p>
                                                    </td>
                                                    <td>
                                                        <p>State</p>
                                                        <p>xxxxxxx</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>E-mail id</p>
                                                        <p>xxxxxx</p>
                                                    </td>
                                                    <td>
                                                        <p>Vehicle Model</p>
                                                        <p>xxxxxxx</p>
                                                    </td>
                                                    <td>
                                                        <p>RTO Code</p>
                                                        <p>xxxxxxx</p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="card" style="border-radius: 40px; border: 1px solid black; overflow: hidden;">
                                        <div class="card-body">
                                            <table class="table text-black">
                                                <tr>
                                                    <td colspan="3">
                                                        <p>
                                                        <h3><u><b>VLTD details: Manufactured by : Traxo India Automation</b></u></h3>
                                                        </p>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Model</p>
                                                        <p>xxxxxx</p>
                                                    </td>
                                                    <td>
                                                        <p>Type / Tac No</p>
                                                        <p>xxxxxxx</p>
                                                    </td>
                                                    <td>
                                                        <p>Invoice No</p>
                                                        <p>xxxxxxx</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>IMEI NO</p>
                                                        <p>xxxxxx</p>
                                                    </td>
                                                    <td>
                                                        <p>Installation Date</p>
                                                        <p>xxxxxxx</p>
                                                    </td>
                                                    <td>
                                                        <p>Invoice Date</p>
                                                        <p>xxxxxxx</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>ICCID NO</p>
                                                        <p>xxxxxx</p>
                                                    </td>
                                                    <td>
                                                        <p>Recalibration Date</p>
                                                        <p>xxxxxxx</p>
                                                    </td>
                                                    <td>
                                                        <p>Primary SIM NO ( Network Provider Name)</p>
                                                        <p>xxxxxxx</p>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td colspan="2">
                                                        <p>NO. Of SOS/Panic Button</p>
                                                        <p>xxxxxxx</p>
                                                    </td>
                                                    <td>
                                                        <p>Secondary SIM NO ( Network Provider Name)</p>
                                                        <p>xxxxxxx</p>
                                                    </td>
                                                </tr>

                                            </table>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="card" style="border-radius: 40px; border: 1px solid black; overflow: hidden;">
                                        <div class="card-body" style="color: black;">
                                            <p style="text-align: center;"><b><u>TERMS for Warranty</u></b></p>
                                            <p>
                                                <b>TRAXO INDIA AUTOMATION </b>(herein after called “TRAXO”) guarantees to you, the original Purchaser, the tracker ”TRAXO101” (this warranty and
                                                its clauses apply to all trackers manufactured by TRAXO unless stated separately ), to be in conformance with the applicable TRAXO101 Specifications
                                                current at the time of Manufacture.
                                            </p>
                                            <p>Purchase Date of the First Buyer will be the Warranty Start Date. Valid for 24 months for the Tracker and accessories.</p>
                                            <p>You must inform TRAXO immediately of any of the Tracker which has been found defective.</p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="card" style="border-radius: 40px; border: 1px solid black; overflow: hidden;">
                                        <div class="card-body" style="color: black;">
                                            <p style="text-align: center;"><b><u>CLAIMS</u></b></p>
                                            <p>For Claiming the Warranty of the TRAXO101 Device , In case the device is fitted to Vehicle ,Firstly it should be driven to nearest Authorized Repair or
                                                Service Centre for analysis of the Device after the testing and verification , The device should be sent to TRAXO Office Plot No: 443/4516, ITI Chowk,
                                                Near RTO Office, Balasore, Odisha, 756001, Toll Free 18008911545 with Customer Name , Number , email id , address , Proof of Purchase Copy incase
                                                of warranty claim. If the TRAXO101 device is found faulty before the fitment ,it should be sent to TRAXO Office Plot No: 443/4516, ITI Chowk, Near
                                                RTO Office, Balasore, Odisha( In case of sold ) with Customer Name , Number , email id , address , Proof of Purchase Copy having date of Invoice incase
                                                of warranty claim. All should be returned duly with all packaging and/or accessories as supplied by TRAXO101.</p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="card" style="border-radius: 40px; border: 1px solid black; overflow: hidden;">
                                        <div class="card-body" style="color: black;">
                                            <p style="text-align: center;"><b><u>WHAT IS NOT COVERED BY THE WARRANTY</u></b></p>
                                            <p>Warranty are not covered for the defects are due to damage, misuse, tampering, neglect or in case of alterations / Changes or repairs done by unauthorized persons /
                                                Company.</p>
                                            <p>The following are Points Not Covered</p>
                                            <p>
                                            <ol>
                                                <li>Defects or damage due to abnormal usage or non standard environments .</li>
                                                <li>Defects or damage from misuse, accident or intentional damage .</li>
                                                <li>Defects or damage from due to improper testing and usage by non authorized applications or operations or modifications done to TRAXO101 device .</li>
                                                <li>Tamper Seal is broken / Box opened by unauthorized person .</li>
                                                <li>Breakage or alterations to Device due to excessive force or other means .</li>
                                                <li>TRAXO101 Device disassembled or repaired other than by TRAXO INDIA AUTOMATION .</li>
                                                <li>TRAXO101 Device exposed to conditions not specified or warranted environment or breaching the limits of the stated.</li>
                                                <li>accessories, software applications and peripherals (specific examples include but are not limited to batteries, charges, adapters, and power supplies) when such</li>
                                            </ol>
                                            </p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="card" style="border-radius: 40px; border: 1px solid black; overflow: hidden;">
                                        <div class="card-body" style="color: black;">
                                            <p style="text-align: center;"><b><u>CONDITIONS</u></b></p>
                                            <p style=" text-align: justify;">This warranty will not apply if the type or serial numbers on the Tracker have been altered, deleted, duplicated, removed or made
                                                illegible. TRAXO101 reserves the right to refuse free- of- charge warranty service. If the requested documentation cannot be presented or
                                                if the information is incomplete, illegible or incompatible with the factory records. Repair at TRAXO101’s option, may include re flashing
                                                of software, the replacement of parts or or boards with functionally equivalent , reconditioned or new parts or boards. Replaced parts,
                                                accessories, batteries, or boards are warranted for the balance of the original warranted tie period. The warranty Term will not be
                                                extended. All original accessories, batteries, parts, and tracker equipment that have been replaced shall become the property of
                                                TRAXO101. TRAXO101 does not warrant the installation, maintenance or service of the products , accessories, batteries, or parts.
                                                TRAXO101 will not be responsible in any way for problems or damage caused by any ancillary equipment not furnished by TRAXO101
                                                which is attached to or used in connection with the Tracker or for operation of TRAXO101 equipment with any ancillary equipment and all
                                                such equipment is expressly from this warranty, when the tracker is used in conjunction with ancillary or peripheral equipment not
                                                supplied by TRAXO101. TRAXO101 does not warrant the operation of the tracker / peripheral combination and TRAXO101 will not hon our
                                                any warranty claim where the Tracker is used in such a combination and it is determined by TRAXO101 that there is no fault with the
                                                Tracker. TRAXO101 specifically disclaims any responsibility for any damage, whether or not to TRAXO INDIA AUTOMATION equipment,</p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="card" style="border-radius: 40px; border: 1px solid black; overflow: hidden;">
                                        <div class="card-body" style="color: black;">
                                            <p style="text-align: center;"><b><u>REPAIRS and SERVICES for out of Warranty</u></b></p>
                                            <p><b>TRAXO INDIA AUTOMATION TRAXO</b> , TRAXO101 will repair tracking device any time after the warranty terms of where this warranty does not
                                                apply due to the defect or fault , then TRAXO INDIA AUTOMATION may at its discretion carry out such repairs subject to cost to be borne by Customer
                                                as specified by TRAXO .</p>
                                        </div>
                                    </div>
                                    <br>
                                    <div style="display: flex; justify-content: space-between;">
                                        <div style="flex: 2; padding-left: 10px; padding-top: 100px;">
                                            <p>Customer Sign</p>
                                        </div>


                                        <div style="flex: 2; padding-left: 10px; padding-top: 100px;">
                                            <p>Dealer / RFC / Installer Sign</p>
                                        </div>
                                        <div style="flex: 6;">
                                            <div class="card" style="border-radius: 20px; border: 1px solid black; overflow: hidden; background-color: yellow;">
                                                <div class="card-body">
                                                    <p><u>TRAXO INDIA AUTOMATION</u></p>
                                                    <p>Plot No: 443/4516, ITI Chowk, Near RTO Office, Balasore, Odisha, 756001, Toll Free 18008911545</p>
                                                    <div style="display: flex; justify-content: space-between; width: 100%;">
                                                        <div style="flex-grow: 1; text-align: left;">
                                                            <p>Email: info@traxo.in</p>
                                                        </div>
                                                        <div style="flex-grow: 1; text-align: left;">
                                                            <p>Website: www.traxoindia.in</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <br>
                <br>

                <!-- <div class="row d-flex justify-content-center align-items-center" style="min-height: 50vh;">
                    <div class="col-md-8 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <table class="table text-black">
                                        <tr>
                                            <td>
                                                <p>
                                                <h2><u><b>Installation Certificate</b></u></h2>
                                                </p>
                                            </td>
                                            <td rowspan="2">
                                                <img
                                                    src="https://placehold.co/800x400/FFFF00/FF"
                                                    alt="Image"
                                                    style="width: 100%; max-width: 500px; height: 100px; border-radius: 10px;">


                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>
                                                <h3><b>Department Copy</b></h3>
                                                </p>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Fitment Certificate No: TRAXOVLTD111100000</p>
                                            </td>
                                            <td>
                                                <p>An ISO 9001:2015 & NABCB Certified
                                                    Company</p>
                                            </td>
                                        </tr>
                                    </table>

                                    <div class="card" style="color:black">
                                        <div class="card-body">
                                            <div style="display: flex; align-items: center;">
                                                <div>To</div>
                                                <div style="width: 800px;"></div>
                                                <div>13/01/2025</div>
                                            </div>

                                            <p>The R.T.O. / J.R.T.O : OD-01</p>
                                            <p>Odisha</p>
                                            <p>This is to certify that the VLTD (Vehicle Location Tracking Device) fitted on the below detailed vehicle, is approved by
                                                ICAT, Vide TAC No. CN8737 Dated: 22/06/2022 During Installation it is been thoroughly tested with all the functionality as
                                                per AIS-140 standards and VLT Device working perfectly. Unless the VLT Device, not having proper GSM/GPS Signals (or)
                                                tampered by unauthorized Individual / Technician. No:</p>
                                        </div>
                                    </div>

                                    <div class="card" style="border-radius: 40px; border: 1px solid black; overflow: hidden;">
                                        <div class="card-body">
                                            <table class="table text-black">
                                                <tr>
                                                    <td>
                                                        <p>
                                                            <u><b>Vehicle Owner Details</b></u>
                                                        </p>
                                                    </td>

                                                    <td colspan="2">
                                                        <p style="text-align: center;">
                                                            <u><b>Vehicle Details</b></u>
                                                        </p>
                                                    </td>
                                                    <td rowspan="4">
                                                        <p><img
                                                                src="https://placehold.co/200x200/000000/FF"
                                                                alt="Image"
                                                                style="width: 100px; height: 100px; border-radius: 10px;">
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Name</p>
                                                        <p>xxxxxx</p>
                                                    </td>
                                                    <td>
                                                        <p>Vehicle No</p>
                                                        <p>xxxxxxx</p>
                                                    </td>
                                                    <td>
                                                        <p>Manufacture Year</p>
                                                        <p>xxxxxx</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Mobile No</p>
                                                        <p>xxxxxx</p>
                                                    </td>
                                                    <td>
                                                        <p>Chassis NO</p>
                                                        <p>xxxxxx</p>
                                                    </td>
                                                    <td>
                                                        <p>Engine No</p>
                                                        <p>xxxxxxx</p>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Address</p>
                                                        <p>xxxxxx</p>
                                                    </td>
                                                    <td>
                                                        <p>Vehicle Make</p>
                                                        <p>xxxxxxx</p>
                                                    </td>
                                                    <td>
                                                        <p>State</p>
                                                        <p>xxxxxxx</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>E-mail id</p>
                                                        <p>xxxxxx</p>
                                                    </td>
                                                    <td>
                                                        <p>Vehicle Model</p>
                                                        <p>xxxxxxx</p>
                                                    </td>
                                                    <td>
                                                        <p>RTO Code</p>
                                                        <p>xxxxxxx</p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="card" style="border-radius: 40px; border: 1px solid black; overflow: hidden;">
                                        <div class="card-body">
                                            <table class="table text-black">
                                                <tr>
                                                    <td colspan="3">
                                                        <p>
                                                        <h3><u><b>VLTD details: Manufactured by : Traxo India Automation</b></u></h3>
                                                        </p>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Model</p>
                                                        <p>xxxxxx</p>
                                                    </td>
                                                    <td>
                                                        <p>Type / Tac No</p>
                                                        <p>xxxxxxx</p>
                                                    </td>
                                                    <td>
                                                        <p>Invoice No</p>
                                                        <p>xxxxxxx</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>IMEI NO</p>
                                                        <p>xxxxxx</p>
                                                    </td>
                                                    <td>
                                                        <p>Installation Date</p>
                                                        <p>xxxxxxx</p>
                                                    </td>
                                                    <td>
                                                        <p>Invoice Date</p>
                                                        <p>xxxxxxx</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>ICCID NO</p>
                                                        <p>xxxxxx</p>
                                                    </td>
                                                    <td>
                                                        <p>Recalibration Date</p>
                                                        <p>xxxxxxx</p>
                                                    </td>
                                                    <td>
                                                        <p>Primary SIM NO ( Network Provider Name)</p>
                                                        <p>xxxxxxx</p>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td colspan="2">
                                                        <p>NO. Of SOS/Panic Button</p>
                                                        <p>xxxxxxx</p>
                                                    </td>
                                                    <td>
                                                        <p>Secondary SIM NO ( Network Provider Name)</p>
                                                        <p>xxxxxxx</p>
                                                    </td>
                                                </tr>

                                            </table>
                                        </div>
                                    </div>
                                    <br>
                                    <p style="color: black; margin-left:20px"><b>VALID FOR THE STATE OF ODISHA</b></p>
                                    <div class="card" style="border-radius: 10px; border: 1px solid black; overflow: hidden; color:black">
                                        <div class="card-body">
                                            <p>TRAXO INDIA AUTOMATION Vehicle Location Tracker (VLT) Serial No &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;:TIA/072024A4993</p>
                                            <div style="display: flex;">
                                                <div style="flex: 1;">
                                                    Installation Date : 25/09/2024
                                                </div>
                                                <div style="flex: 1;">
                                                    Renewal Due Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 25/09/2026
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <div style="display: flex; text-align:center;color:black">
                                        <div style="flex: 1;">
                                            Dealers seal & Signature
                                        </div>
                                        <div style="flex: 1;">
                                            Customer Signature
                                        </div>
                                        <div style="flex: 1;">
                                            Authorised Signature
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                    <div class="card" style="border-radius: 20px; border: 1px solid black; overflow: hidden; background-color: yellow;">
                                        <div class="card-body" style="color: black;">
                                            <p style="text-align: center;"><u><b>TRAXO INDIA AUTOMATION</b></u></p>
                                            <p>Plot No: 443/4516, ITI Chowk, Near RTO Office, Balasore, Odisha, 756001, Toll Free 18008911545</p>
                                            <div style="display: flex; justify-content: space-between; width: 100%;">
                                                <div style="flex-grow: 1; text-align: left;">
                                                    <p>Email: info@traxo.in</p>
                                                </div>
                                                <div style="flex-grow: 1; text-align: right;">
                                                    <p>Website: www.traxoindia.in</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
@endsection