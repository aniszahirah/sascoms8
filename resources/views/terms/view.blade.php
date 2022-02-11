@extends('user.dashboard')

@section('content')
<body style="--bleeding: 0.5cm;--margin: 1cm;">
  <div class="page">
  <section class="content">
    
  <div class="mt-100">
    <div class="flex flex-col text-left w-full">
      <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">

        <div style="position: relative; text-align: center">
          <img src="{{ asset('images/iium-logo.jpg') }}" width="200" alt=""><br>
          <h4>SULTAN AHMAD SHAH MEDICAL CENTRE @IIUM<br>DEPARTMENT OF SHARIAH COMPLIANCE<br>TERMS AND CONDITION FORM</h4>
        </div><br>

        <div class="col-span-6 sm:col-span-10">
          <div class="col-sm-9">
            <label class="form-check-label" for="declaration" style="text-align: justify">
            I, <u> {{ $terms->name }} </u> NRIC / Passport No. <u> {{ $terms->nric }} </u> address <u> {{ $terms->address }} </u> <br><br>
            I hereby give my permission and consent:<br><br>
            1) Only necessity part of my Aurah (privacy) is revealed during the treatment process.<br>
            2) Treatment is given by any health worker who is a different gender to me.<br>
            3) Permitting skin contact between me and doctor or any other health worker of different gender as needed<br>
            in the diagnostic care and treatment process.<br>
            4) Clinical Training Students will be involved in the treatment process.<br>
            </label>
          </div>
        </div><br>

        {{-- <div class="col-span-6 sm:col-span-10">
          <div class="col-sm-9">
            <label for="name" class="col-sm-3 control-label">Name: </label>
              <input type="text" id="name" value="{{ $terms->name }}" name="name" placeholder="Name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" style="width:400px">
          </div>
      </div>

      <div class="col-span-6 sm:col-span-10">
          <div class="col-sm-9">
            <label for="address" class="col-sm-3 control-label">Address: </label>
              <input type="text" id="address" value="{{ $terms->address }}" name="address" placeholder="Address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" style="width:400px">
          </div>
      </div>

      <div class="col-span-6 sm:col-span-10">
          <div class="col-sm-9">
            <label for="contactnumber" class="col-sm-3 control-label">Contact Number: </label>
              <input type="text" id="contactnumber" value="{{ $terms->contactnumber }}" name="contactnumber" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" style="width:120px">
          </div>
      </div>

      <div class="col-span-6 sm:col-span-10">
          <label class="control-label col-sm-3">Gender: </label>
          <input type="text" id="gender" value="{{ $terms->gender }}" name="gender" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" style="width:100px">
      </div>

      <div class="col-span-6 sm:col-span-10">
          <div class="col-sm-9">
            <label for="nric" class="col-sm-3 control-label">NRIC: </label>
              <input type="text" id="nric" value="{{ $terms->nric }}" name="nric" placeholder="NRIC" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" style="width:120px">
          </div>
      </div> --}}
      
      <div class="col-span-6 sm:col-span-10">
          <div class="col-sm-9">
            <label for="additionalrequirements" class="col-sm-3 control-label">Additional Requirements: </label>
              <input type="text" id="additionalrequirements" value="{{ $terms->additionalrequirements }}" name="additionalrequirements" placeholder="Additional Requirements" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" style="width:400px">
          </div>
      </div><br>
      
      <div class="col-span-6 sm:col-span-10">
          <div class="col-sm-9">
          <input class="form-check-input" type="checkbox" value="on" id="declaration" name="declaration" checked>
          <label class="form-check-label" for="declaration" style="text-align: justify">
              I acknowledge that I have clearly explained to the patient some of the conditions that 
              the patient may face, as described in the next page.<br><br>
              
              <i>Saya mengaku bahawa saya telah menerangkan dengan jelas kepada pesakit berkenaan dengan beberapa keadaan yang 
              mungkin dihadapi oleh pesakit seperti yang dinyatakan di muka surat seterusnya.</i>
          </label>
          </div>
      </div>


        </div>
      </div>
    </div>
  </div>

  </section>
  </div>
</body>

<style>

body{
  font-family: Arial, Helvetica, sans-serif;
  background: rgb(204,204,204); 
  margin: 0 auto;
  padding: 0;
  display: flex;
}

.centre{
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

p{
  font-size: 100px;
}

img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

/* page[size="A4"] {
  background: white;
  width: 21cm;
  height: 29.7cm;
  display: block;
  margin-bottom: 0.5cm;
  margin: 0mm 0mm 20mm 55mm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
} 
@media print {
body, page[size="A4"] {
  margin: 10mm;
  box-shadow: 0;
}*/

:root {
  --bleeding: 0.5cm;
  --margin: 1cm;
}

@page {
  size: A4;
  margin: 0;
}

* {
  box-sizing: border-box;
}

.page {
  display: inline-block;
  position: relative;
  height: 297mm;
  width: 210mm;
  font-size: 12pt;
  margin: 2em auto;
  padding: calc(var(--bleeding) + var(--margin));
  box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
  background: white;
  margin: 0mm 0mm 20mm 55mm;
}

@media screen {
  .page::after {
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    width: calc(100% - var(--bleeding) * 2);
    height: calc(100% - var(--bleeding) * 2);
    margin: var(--bleeding);
    outline: thin dashed black;
    pointer-events: none;
    z-index: 9999;
  }
}

@media print {
  .page {
    margin: 0;
    overflow: hidden;
  }

</style>


@endsection
