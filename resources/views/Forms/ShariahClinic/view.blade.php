@extends('user.dashboard')

@section('content')

<section class="content">
    
    <div style="position: relative; text-align: center">
      <img src="{{ asset('images/iium-logo.jpg') }}" width="200" alt=""><br>
      <h4>SULTAN AHMAD SHAH MEDICAL CENTRE @IIUM<br>DEPARTMENT OF SHARIAH COMPLIANCE<br>SHARIAH CLINIC FORM</h4></div><br>

      <div class="col-span-6 sm:col-span-10">
        <div class="col-sm-9">
          <label for="name" class="font-semibold leading-none">Staff Name: </label>
          <input type="text" id="name" name="name" value="Abu Bin Ahmad" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" style="width:400px">
        </div>
      </div>

      <div class="col-span-6 sm:col-span-10">
        <div class="col-sm-9">
          <label for="name" class="font-semibold leading-none">Department / Unit / Ward / Clinic: </label>
          <input type="text" id="name" name="name" value="Psychology" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" style="width:400px">
        </div>
      </div>

      <div class="col-span-6 sm:col-span-10">
        <div class="col-sm-9">
          <label for="date" class="font-semibold leading-none">Date: </label>
          <input type="text" id="date" value="{{ $clinic->created_at }}" name="date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" style="width:100px">
        </div>
      </div>

      <div class="col-span-6 sm:col-span-10">
        <label for="issue" class="font-semibold leading-none">Issue:</label>
        <div class="form-group col-md-12">
            <textarea id="issue" name="issue" style="width:1000px" cols="300" rows="2" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ $clinic->issue }}</textarea>
            
        </div>
      </div>

      <div class="col-span-6 sm:col-span-10">
        <label for="doc_expertise" class="font-semibold leading-none">Suggestions/Recommendations/Comments:</label>
        <div class="form-group col-md-12">
            <textarea id="comment" name="comment" style="width:1000px" cols="300" rows="2" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ $clinic->comment }}</textarea>
            
            </div>
      </div>

      <div class="col-span-6 sm:col-span-10">
        <label for="doc_expertise" class="font-semibold leading-none">Corrective Actions:</label>
        <div class="form-group col-md-12">
            <textarea id="correctiveaction" name="correctiveaction" style="width:1000px" cols="300" rows="2" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ $clinic->correctiveaction }}</textarea>
            
            </div>
      </div>

      <div class="col-span-6 sm:col-span-10">
        <label for="doc_expertise" class="font-semibold leading-none">Next Follow-up:</label>
        <div class="form-group col-md-12">
            <textarea id="followup" name="followup" style="width:1000px" cols="300" rows="2" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ $clinic->followup }}</textarea>
            
            </div>
      </div>
    
  </body>
</html>

</section>

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
  img {
    display: block;
    margin-left: auto;
    margin-right: auto;
  }
</style>

@endsection
