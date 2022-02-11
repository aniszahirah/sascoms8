<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    
    <div style="float: left" class="top right">
      <p>Date: {{ strftime("%d %b %Y",strtotime($clinic->created_at)) }} <br>Time: {{ strftime("%T",strtotime($clinic->created_at)) }}</p></div>

    <div style="float: right">
      <p>IIUM-IIUMMC-SHAR-F011<br>VER: 01<br>REV: 01<br>EFFECTIVE DATE: {{ strftime("%d %b %Y",strtotime($clinic->created_at)) }}</p>
    </div>

    <div style="position: relative; text-align: center">
      <img src="images/iium-logo.jpg" alt="logo" width="200" ></div>
      <div style="position: relative; text-align: center">
      <h4>SULTAN AHMAD SHAH MEDICAL CENTRE @IIUM<br>DEPARTMENT OF SHARIAH COMPLIANCE<br>SHARIAH CLINIC FORM</h4></div>

      <div class="col-span-6 sm:col-span-10">
        <div class="col-sm-9">
          <label for="name" class="font-semibold leading-none">Staff Name: </label>
          <input type="text" id="name" name="name" value="{{ Auth::user()->name }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" style="width:400px">
        </div>
      </div>

      <div class="col-span-6 sm:col-span-10">
        <div class="col-sm-9">
          <label for="name" class="font-semibold leading-none">Department / Unit / Ward / Clinic: </label>
          <input type="text" id="name" name="name" value="{{ Auth::user()->dept }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" style="width:400px">
        </div>
      </div>

      <div class="col-span-6 sm:col-span-10">
        <div class="col-sm-9">
          <label for="date" class="font-semibold leading-none">Date: </label>
          <input type="text" id="date" value="{{ $clinic->received_date }}" name="date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" style="width:250px">
        </div>
      </div><br>

      <div class="col-span-6 sm:col-span-10">
        <label for="issue" class="font-semibold leading-none">Issue:</label>
        <div class="form-group col-md-12">
            <textarea id="issue" name="issue"  cols="300" rows="5" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ $clinic->issue }}</textarea>
            
        </div>
      </div>

      <div class="col-span-6 sm:col-span-10">
        <label for="doc_expertise" class="font-semibold leading-none">Suggestions/Recommendations/Comments:</label>
        <div class="form-group col-md-12">
            <textarea id="comment" name="comment" cols="300" rows="1" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ $clinic->comment }}</textarea>
            
            </div>
      </div>

      <div class="col-span-6 sm:col-span-10">
        <label for="doc_expertise" class="font-semibold leading-none">Corrective Actions:</label>
        <div class="form-group col-md-12">
            <textarea id="correctiveaction" name="correctiveaction" cols="300" rows="1" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ $clinic->correctiveaction }}</textarea>
            
            </div>
      </div>

      <div class="col-span-6 sm:col-span-10">
        <label for="doc_expertise" class="font-semibold leading-none">Next Follow-up:</label>
        <div class="form-group col-md-12">
            <textarea id="followup" name="followup" cols="300" rows="1" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ $clinic->followup }}</textarea>
            
            </div>
      </div>

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
