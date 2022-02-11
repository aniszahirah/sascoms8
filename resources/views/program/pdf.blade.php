{{-- @extends('pdf.index')

@section('content')

<section class="content"> --}}

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body> 
    
    <div style="float: left">
      <p>Date: {{ strftime("%d %b %Y",strtotime($program->created_at)) }}<br>Time:{{ strftime("%T",strtotime($program->created_at)) }}</p></div>

    <div style="float: right">
      <p>IIUM-IIUMMC-SHAR-F011<br>VER: 01<br>REV: 01<br>EFFECTIVE DATE: {{ strftime("%d %b %Y",strtotime($program->created_at)) }}</p>
    </div>

    <div style="position: relative; text-align: center">
      <img src="images/iium-logo.jpg" alt="logo" width="200" ></div>
      <div style="position: relative; text-align: center">
      <h4>SULTAN AHMAD SHAH MEDICAL CENTRE @IIUM<br>DEPARTMENT OF SHARIAH COMPLIANCE<br>PROGRAM MONITORING FORM</h4></div>

    <div class="grid grid-cols-10 gap-6">

      <div class="col-span-6 sm:col-span-10">
          <div class="col-sm-9">
            <label for="name" class="col-sm-3 control-label">Name: </label>
              <input type="text" id="name" name="name" value="{{ $program->name }}" placeholder="Name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" style="width:400px">
          </div>
      </div>

      <div class="col-span-6 sm:col-span-10">
          <div class="col-sm-9">
            <label for="date" class="col-sm-3 control-label">Date: </label>
            <input type="text" id="date" value="{{ $program->date }}" name="date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" style="width:100px">
          </div>
      </div>

      <div class="col-span-6 sm:col-span-10">
          <div class="col-sm-9">
            <label for="organizer" class="col-sm-3 control-label">Organizer: </label>
              <input type="text" name="organizer" value="{{ $program->organizer }}" id="organizer" placeholder="Organizer" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" style="width:400px">
          </div>
      </div>

      <div class="col-span-6 sm:col-span-10">
          <div class="col-sm-9">
            <label for="pic" class="col-sm-3 control-label">PIC: </label>
              <input type="text" id="pic" name="pic" value="{{ $program->pic }}" placeholder="Person-In-Charge" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" style="width:400px">
          </div>
      </div>

      <div class="col-span-6 sm:col-span-10">
        <div class="col-sm-9">
          <label for="program_details" class="col-sm-3 control-label">Program Details:</label>
            <input type="text" id="program_details" value="{{ $program->program_details }}" name="program_details" placeholder="Program Details" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" style="width:400px">
            <br>
        </div>
    </div><br>

    <div class="col-span-6 sm:col-span-10">
      <label for="Q1">1. Organizing committee give a briefing about program to Representative from Department 
          of Shariah Compliance?</label>   
  </div>

  <div class="col-span-6 sm:col-span-10">
      <div class="col-sm-9">
        <label for="briefing_date" class="col-sm-3 control-label" >Date:</label>
        <input type="text" id="briefing_date" value="{{ $program->briefing_date }}" name="briefing_date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" style="width:100px">
      </div>
  </div>

  <div class="col-span-6 sm:col-span-10">
      <div class="col-sm-9">
        <label for="briefing_time" class="col-sm-3 control-label" >Time:</label>
        <input type="text" id="briefing_time" value="{{ $program->briefing_time }}" name="briefing_time" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" style="width:100px">
      </div>
  </div>

  <div class="col-span-6 sm:col-span-10">
      <div class="col-sm-9">
        <label for="briefing_person" class="col-sm-3 control-label">Briefing given by:</label>
          <input type="text" id="briefing_person" value="{{ $program->briefing_person }}" name="briefing_person" placeholder="Briefing given by" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" style="width:300px;">
      </div>
  </div><br>

  <div class="col-span-6 sm:col-span-10">
      <label for="Q2">2. Organizing Committee ask an advice from Representative from Department of Shariah
          Compliance regarding to the flow of the program?</label>  
  </div>        

  <div class="col-span-6 sm:col-span-10">
      <div class="col-sm-9">
        <label for="advise_date" class="col-sm-3 control-label" >Date:</label>
        <input type="text" id="advise_date" value="{{ $program->advise_date }}" name="advise_date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" style="width:100px">
      </div>
  </div>      

  <div class="col-span-6 sm:col-span-10">
      <div class="col-sm-9">
        <label for="advise_time" class="col-sm-3 control-label" >Time:</label>
        <input type="text" id="advise_time" value="{{ $program->advise_time }}" name="advise_time" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" style="width:100px">
      </div>
  </div> 

  <div class="col-span-6 sm:col-span-10">
    <label for="advise_details" class="col-sm-3 control-label">Details of advice:</label>
    <div class="col-sm-9">
        <input type="text" id="advise_details" value="{{ $program->advise_details }}" name="advise_details" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" style="width:400px">
    </div>     
</div><br>

  <div class="col-span-6 sm:col-span-10">
    <label for="during_prog_report" class="col-sm-3 control-label">During Program:</label>
    <div class="col-sm-9">
        <textarea id="during_prog_report" name="during_prog_report" cols="300" rows="5" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ $program->during_prog_report }}</textarea>
    </div>   
  </div><br>

  <div class="col-span-6 sm:col-span-10">
    <label for="corrective_action" class="col-sm-3 control-label">After Program:</label>
    <div class="col-sm-9">
        <textarea id="corrective_action" name="corrective_action" cols="300" rows="5" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ $program->corrective_action }}</textarea>
    </div>
</div>

  </div>

    <div style="position: relative; text-align: center">
      <p style="position: fixed; bottom: 0; width:100%;">Sultan Ahmad Shah Medical Centre @IIUM, Jalan Sultan Ahmad Shah, Bandar Indera Mahkota, 25200 Kuantan, Pahang Darul Makmur.<br>Tel: 09-591 2500</p>
      
    </div>

  </body>
</html>

{{-- </section> --}}

<style>
  body{
    font-family: Arial, Helvetica, sans-serif;
  }
  .centre{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
  }
  p{
    font-size: 10px;
  }
  
</style>

{{-- @endsection --}}