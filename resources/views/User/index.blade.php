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
                    <h3 class="card-title">My Task</h3>
                    <p class="card-text">View my task</p>
                    <a href="{{ route('view.task') }}" class="btn btn-outline-light">View Task</a>
                </div>
            </div>
        </div>

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
            <div class="card h-100 text-white bg-primary">
                <div class="card-body">
                    <h3 class="card-title">Document Review Form</h3>
                    <p class="card-text">IIUM-IIUMMC-SHAR-F001</p>
                    <a href="{{ route('document-review.create') }}" class="btn btn-outline-light">Create Report</a>
                    <a href="{{ route('document-review.view-all') }}" class="btn btn-outline-light">Manage Reports</a>
                </div>
            </div>
        </div>

        <div class="col-sm-4 py-2">
            <div class="card h-100 text-white bg-secondary">
                <div class="card-body">
                    <h3 class="card-title">Food Premise Inspection Form</h3>
                    <p class="card-text">IIUM-IIUMMC-SHAR-F002</p>
                    <a href="{{ route('food.create') }}" class="btn btn-outline-light">Create Report</a>
                    <a href="{{ route('referral.view-all') }}" class="btn btn-outline-light">Manage Reports</a>
                </div>
            </div>
        </div>

        <div class="col-sm-4 py-2">
            <div class="card h-100 text-white bg-success">
                <div class="card-body">
                    <h3 class="card-title">Referral Form</h3>
                    <p class="card-text">IIUM-IIUMMC-SHAR-F004</p>
                    <a href="{{ route('referral.create') }}" class="btn btn-outline-light">Create Report</a>
                    <a href="{{ route('referral.view-all') }}" class="btn btn-outline-light">Manage Reports</a>
                </div>
            </div>
        </div>

        <div class="col-sm-4 py-2">
            <div class="card h-100 text-white bg-danger">
                <div class="card-body">
                    <h3 class="card-title">Program Monitoring Form</h3>
                    <p class="card-text">IIUM-IIUMMC-SHAR-F006</p>
                    <a href="{{ route('program.create') }}" class="btn btn-outline-light">Create Report</a>
                    <a href="{{ route('program.view-all') }}" class="btn btn-outline-light">Manage Reports</a>
                </div>
            </div>
        </div>

        <div class="col-sm-4 py-2">
            <div class="card h-100 text-white bg-warning">
                <div class="card-body">
                    <h3 class="card-title">Activity Monitoring Form</h3>
                    <p class="card-text">IIUM-IIUMMC-SHAR-F007</p>
                    <a href="{{ route('document-review.create') }}" class="btn btn-outline-light">Create Report</a>
                    <a href="{{ route('referral.view-all') }}" class="btn btn-outline-light">Manage Reports</a>
                </div>
            </div>
        </div>

        <div class="col-sm-4 py-2">
            <div class="card h-100 text-white bg-info">
                <div class="card-body">
                    <h3 class="card-title">Complaint Form</h3>
                    <p class="card-text">IIUM-IIUMMC-SHAR-F008</p>
                    <a href="{{ route('complaint.create') }}" class="btn btn-outline-light">Create Report</a>
                    <a href="{{ route('complaint.view-all') }}" class="btn btn-outline-light">Manage Reports</a>
                </div>
            </div>
        </div>

        <div class="col-sm-4 py-2">
            <div class="card h-100 text-white bg-primary">
                <div class="card-body">
                    <h3 class="card-title">Terms and Condition Form</h3>
                    <p class="card-text">IIUM-IIUMMC-SHAR-F009</p>
                    <a href="{{ route('terms.create') }}" class="btn btn-outline-light">Create Report</a>
                    <a href="{{ route('terms.view-all') }}" class="btn btn-outline-light">Manage Reports</a>
                </div>
            </div>
        </div>

        <div class="col-sm-4 py-2">
            <div class="card h-100 text-white bg-secondary">
                <div class="card-body">
                    <h3 class="card-title">SLO Report</h3>
                    <p class="card-text">IIUM-IIUMMC-SHAR-F010</p>
                    <a href="{{ route('slo-report.create') }}" class="btn btn-outline-light">Create Report</a>
                    <a href="{{ route('slo-report.view-all') }}" class="btn btn-outline-light">Manage Reports</a>
                </div>
            </div>
        </div>

        <div class="col-sm-4 py-2">
            <div class="card h-100 text-white bg-success">
                <div class="card-body">
                    <h3 class="card-title">Shariah Clinic Form</h3>
                    <p class="card-text">IIUM-IIUMMC-SHAR-F011</p>
                    <a href="{{ route('clinic.create') }}" class="btn btn-outline-light">Create Report</a>
                    <a href="{{ route('clinic.view-all') }}" class="btn btn-outline-light">Manage Reports</a>
                </div>
            </div>
        </div>

        <div class="col-sm-4 py-2">
            <div class="card h-100 text-white bg-danger">
                <div class="card-body">
                    <h3 class="card-title">Speaker Consent Form</h3>
                    <p class="card-text">IIUM-IIUMMC-SHAR-F012</p>
                    <a href="{{ route('speaker.create') }}" class="btn btn-outline-light">Create Report</a>
                    <a href="{{ route('speaker.view-all') }}" class="btn btn-outline-light">Manage Reports</a>
                </div>
            </div>
        </div>
        
    </div>
</section>


@endsection