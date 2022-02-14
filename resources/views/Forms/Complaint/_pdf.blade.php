<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    
    <div style="float: left" class="top right">
      <p>Date: {{ strftime("%d %b %Y",strtotime($complaint->created_at)) }} <br>Time: {{ strftime("%T",strtotime($complaint->created_at)) }}</p></div>

    <div style="float: right">
      <p>IIUM-IIUMMC-SHAR-F011<br>VER: 01<br>REV: 01<br>EFFECTIVE DATE: {{ strftime("%d %b %Y",strtotime($complaint->created_at)) }}</p>
    </div>

    <div style="position: relative; text-align: center">
      <img src="images/iium-logo.jpg" alt="logo" width="200" ></div>
      <div style="position: relative; text-align: center">
      <h4>SULTAN AHMAD SHAH MEDICAL CENTRE @IIUM<br>DEPARTMENT OF SHARIAH COMPLIANCE<br>COMPLAINT FORM</h4></div>

      <div class="col-span-6 sm:col-span-10">
        <div class="col-sm-9">
          <label for="name" class="font-semibold leading-none">Complainant Name: </label>
          <input type="text" id="name" name="name" value="{{ $complaint->complainant_name }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" style="width:400px">
        </div>
      </div>

      <div class="col-span-6 sm:col-span-10">
        <div class="col-sm-9">
          <label for="name" class="font-semibold leading-none">Date: </label>
          <input type="text" id="name" name="name" value="{{ $complaint->complaint_date }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" style="width:400px">
        </div>
      </div>

      <div class="col-span-6 sm:col-span-10">
        <div class="col-sm-9">
          <label for="date" class="font-semibold leading-none">Phone No: </label>
          <input type="text" id="date" value="{{ $complaint->phone_no }}" name="date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" style="width:250px">
        </div>
      </div><br>

      <div class="col-span-6 sm:col-span-10">
        <div class="col-sm-9">
          <label for="date" class="font-semibold leading-none">Department: </label>
          <input type="text" id="date" value="{{ $complaint->department }}" name="date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" style="width:250px">
        </div>
      </div><br>

      <div class="col-span-6 sm:col-span-10">
        <div class="col-sm-9">
          <label for="date" class="font-semibold leading-none">Complaint Type: </label>
          <input type="text" id="date" value="{{ $complaint->complaint_type }}" name="date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" style="width:250px">
        </div>
      </div><br>

      <div class="col-span-6 sm:col-span-10">
        <div class="col-sm-9">
          <label for="date" class="font-semibold leading-none">Details: </label>
          <input type="text" id="date" value="{{ $complaint->details }}" name="date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" style="width:250px">
        </div>
      </div><br>

      <div class="col-span-6 sm:col-span-10">
        <div class="col-sm-9">
          <label for="date" class="font-semibold leading-none">Received By: </label>
          <input type="text" id="date" value="{{ $complaint->received_by }}" name="date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" style="width:250px">
        </div>
      </div><br>

      <div class="col-span-6 sm:col-span-10">
        <div class="col-sm-9">
          <label for="date" class="font-semibold leading-none">Received Date: </label>
          <input type="text" id="date" value="{{ $complaint->received_date }}" name="date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" style="width:250px">
        </div>
      </div><br>

      <div class="col-span-6 sm:col-span-10">
        <div class="col-sm-9">
          <label for="date" class="font-semibold leading-none">Investigation: </label>
          <input type="text" id="date" value="{{ $complaint->investigation }}" name="date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" style="width:250px">
        </div>
      </div><br>

      <div class="col-span-6 sm:col-span-10">
        <div class="col-sm-9">
          <label for="date" class="font-semibold leading-none">Immediate Action: </label>
          <input type="text" id="date" value="{{ $complaint->immediate_action }}" name="date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" style="width:250px">
        </div>
      </div><br>

      {{-- <div class="col-span-6 sm:col-span-10">
        <div class="col-sm-9">
          <label for="date" class="font-semibold leading-none">Immediate Completion </label>
          <input type="text" id="date" value="{{ $complaint->immediate_completion }}" name="date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" style="width:250px">
        </div>
      </div><br> --}}

      {{-- <div class="col-span-6 sm:col-span-10">
        <div class="col-sm-9">
          <label for="date" class="font-semibold leading-none">Long-Term Action </label>
          <input type="text" id="date" value="{{ $complaint->long-term_action }}" name="date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" style="width:250px">
        </div>
      </div><br>

      <div class="col-span-6 sm:col-span-10">
        <div class="col-sm-9">
          <label for="date" class="font-semibold leading-none">Long-Term Completion </label>
          <input type="text" id="date" value="{{ $complaint->long-term_completion }}" name="date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" style="width:250px">
        </div>
      </div><br> --}}

      {{-- <div class="col-span-6 sm:col-span-10">
        <div class="col-sm-9">
          <label for="date" class="font-semibold leading-none">Verified By </label>
          <input type="text" id="date" value="{{ $complaint->verified_by }}" name="date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" style="width:250px">
        </div>
      </div><br> --}}

      {{-- <div class="col-span-6 sm:col-span-10">
        <div class="col-sm-9">
          <label for="date" class="font-semibold leading-none">Status </label>
          <input type="text" id="date" value="{{ $complaint->status }}" name="date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" style="width:250px">
        </div>
      </div><br> --}}

      

    <div style="position: relative; text-align: center">
      <p style="position: fixed; bottom: 0; width:100%;">Sultan Ahmad Shah Medical Centre @IIUM, Jalan Sultan Ahmad Shah, Bandar Indera Mahkota, 25200 Kuantan, Pahang Darul Makmur.<br>Tel: 09-591 2500</p>
      
    </div>
    
  </body>
</html>

<style>
  .centre{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
  }
  p{
    font-size: 10px;
  }
  .top right{
    font-size: 10px;
  }
</style>
