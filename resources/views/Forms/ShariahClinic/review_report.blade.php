@extends('dsc_user.dsc_master')

@section('content')

<section class="content">

<!-- Validation wizard -->
<div class="box box-default">
    <div class="box box-default">
	<div class="box-header with-border">
		<h4 class="box-title">Complaint Form</h4>
		<h6 class="box-subtitle">IIUM-IIUMMC-SHAR-F010</h6>
	</div>
    <div class="form-preview">
    <div class="row">
        <div class="col-md-4">
            <h4>Type of Reports :</h4>
        </div>
        <div class="col-md-8">
            <p id="showDetails">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <h4>Report Details :</h4>
        </div>
        <div class="col-md-8">
            <p id="showActions">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
</div>
	<!-- /.box-header -->
	<div class="box-body wizard-content">
		<form method="post" action="#" class="validation-wizard wizard-circle">
			@csrf
			<!-- Step 1 -->
			<h6>Investigation</h6>
			<section>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="wfirstName2"> Investigation & Root Cause : <span class="danger text-danger">*</span> </label>
                            <textarea class="form-control required" name="actions" id="actionsInput" rows="7"></textarea>
						</div>
					</div>
				</div>
				<br>
				<!-- <div class="row">
					
				</div> -->
            </section>
			<!-- Step 2 -->
			<h6>Corrective Action</h6>
			<section>
				
					<div class="row">
						<div class="col-md-6">
							<h4>Immediate Action</h4>
                            <textarea class="form-control required" name="actions" id="actionsInput" rows="7"></textarea>
						</div>
                        <div class="col-md-6">
							<h4>Long Term Action </h4>
                            <textarea class="form-control required" name="actions" id="actionsInput" rows="7"></textarea>
						</div>
					</div>

			
			</section>
			<!-- Step 3 -->
			<h6>Declaration</h6>
			<section>
				<div class="form-preview">
					<div class="row">
						<div class="col-md-4">
							<h4>Investigation & Root Cause:</h4>
						</div>
						<div class="col-md-8">
							<p id="showDetails"></p>
						</div>
					</div>

					<div class="row">
						<div class="col-md-4">
							<h4>Corrective Action Taken: </h4>
						</div>
						<div class="col-md-8">
							<p id="showActions"></p>
						</div>
					</div>
				</div>

				<br>

				<div class="row">
					<div class="form-check">
						<input class="form-check-input required" type="checkbox" value="" id="flexCheckDefault">
						<label class="form-check-label" for="flexCheckDefault">
							I hereby agree that all the informations given is true.
							<span class="danger text-danger">*</span>
						</label>
					</div>
				</div>
			</section>
			

		</form>
	</div>
	<!-- /.box-body -->
</div>
<!-- /.box -->

</section>
<!-- /.content -->

<div>
	<button href="{{ route('slo_report.pdf') }}" >View PDF</button>
</div>

<script>
    $("input[type=radio]").on("change", function() {
    //check if radio is checked and value of checked one is `others`
    ($(this).val() == "Others") ? $(this).siblings(".other-text").show(): $(this).siblings(".other-text").hide()
})
</script>



@endsection
