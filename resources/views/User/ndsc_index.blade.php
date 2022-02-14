@extends('layouts.app')

@section('content')

<section class="content">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <p class="text-xl font-bold p-2">Menu</p>
    <div class="row">

        <div class="col-sm-4 py-2">
            <div class="card h-100 text-white bg-dark">
                <div class="card-body">
                    <h3 class="card-title">My Report History</h3>
                    <p class="card-text">View all my reports history</p>
                    <a href="{{ route('report.history') }}" class="btn btn-outline-light">View History</a>
                </div>
            </div>
        </div>

    </div>
    <p class="text-xl font-bold p-2">List of All Reports</p>
    <div class="row">
        <div class="col-sm-4 py-2">
            <div class="card h-100 text-white" style="background-color:#0d8368">
                <div class="card-body">
                    <h3 class="card-title">Document Review Form</h3>
                    <p class="card-text">IIUM-IIUMMC-SHAR-F001</p>
                    <a href="{{ route('document-review.create') }}" class="btn btn-outline-light">Create Report</a>
                </div>
            </div>
        </div>

        <div class="col-sm-4 py-2">
            <div class="card h-100 text-white " style="background-color:#0d8368">
                <div class="card-body">
                    <h3 class="card-title">Food Premise Inspection</h3>
                    <p class="card-text">IIUM-IIUMMC-SHAR-F002</p>
                    <a href="{{ route('food.create') }}" class="btn btn-outline-light">Create Report</a> 
                </div>
            </div>
        </div>

        <div class="col-sm-4 py-2">
            <div class="card h-100 text-white " style="background-color:#0d8368">
                <div class="card-body">
                    <h3 class="card-title">Referral Form</h3>
                    <p class="card-text">IIUM-IIUMMC-SHAR-F004</p>
                    <a href="{{ route('referral.create') }}" class="btn btn-outline-light">Create Report</a> 
                </div>
            </div>
        </div>

        <div class="col-sm-4 py-2">
            <div class="card h-100 text-white " style="background-color:#0d8368">
                <div class="card-body">
                    <h3 class="card-title">Program Monitoring Form</h3>
                    <p class="card-text">IIUM-IIUMMC-SHAR-F006</p>
                    <a href="{{ route('program.create') }}" class="btn btn-outline-light">Create Report</a> 
                </div>
            </div>
        </div>

        <div class="col-sm-4 py-2">
            <div class="card h-100 text-white " style="background-color:#0d8368">
                <div class="card-body">
                    <h3 class="card-title">Activity Monitoring Form</h3>
                    <p class="card-text">IIUM-IIUMMC-SHAR-F007</p>
                    <a href="{{ route('document-review.create') }}" class="btn btn-outline-light">Create Report</a> 
                </div>
            </div>
        </div>

        <div class="col-sm-4 py-2">
            <div class="card h-100 text-white " style="background-color:#0d8368">
                <div class="card-body">
                    <h3 class="card-title">Complaint Form</h3>
                    <p class="card-text">IIUM-IIUMMC-SHAR-F008</p>
                    <a href="{{ route('complaint.create') }}" class="btn btn-outline-light">Create Report</a> 
                </div>
            </div>
        </div>

        <div class="col-sm-4 py-2">
            <div class="card h-100 text-white  " style="background-color:#0d8368">
                <div class="card-body">
                    <h3 class="card-title">Terms and Condition Form</h3>
                    <p class="card-text">IIUM-IIUMMC-SHAR-F009</p>
                    <a href="{{ route('terms.create') }}" class="btn btn-outline-light">Create Report</a> 
                </div>
            </div>
        </div>

        <div class="col-sm-4 py-2">
            <div class="card h-100 text-white " style="background-color:#0d8368">
                <div class="card-body">
                    <h3 class="card-title">SLO Report</h3>
                    <p class="card-text">IIUM-IIUMMC-SHAR-F010</p>
                    <a href="{{ route('slo-report.create') }}" class="btn btn-outline-light">Create Report</a> 
                </div>
            </div>
        </div>

        <div class="col-sm-4 py-2">
            <div class="card h-100 text-white  " style="background-color:#0d8368">
                <div class="card-body">
                    <h3 class="card-title">Shariah Clinic Form</h3>
                    <p class="card-text">IIUM-IIUMMC-SHAR-F011</p>
                    <a href="{{ route('clinic.create') }}" class="btn btn-outline-light">Create Report</a> 
                </div>
            </div>
        </div>

        <div class="col-sm-4 py-2">
            <div class="card h-100 text-white " style="background-color:#0d8368">
                <div class="card-body">
                    <h3 class="card-title">Speaker Consent Form</h3>
                    <p class="card-text">IIUM-IIUMMC-SHAR-F012</p>
                    <a href="{{ route('speaker.create') }}" class="btn btn-outline-light">Create Report</a> 
                </div>
            </div>
        </div>
        
    </div>
</section>


@endsection