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
          <h4>SULTAN AHMAD SHAH MEDICAL CENTRE @IIUM<br>DEPARTMENT OF SHARIAH COMPLIANCE<br>SPEAKER CONSENT FORM</h4>
        </div><br>

        <div class="col-span-6 sm:col-span-10">
          <div class="col-sm-9">
            <label class="form-check-label" for="declaration" style="text-align: justify">
              Name of program / Training: <u>{{ $complaint->programname }}</u><br>
              Date: <u>{{ $complaint->date }}</u>
            </label>
          </div>
        </div><br>

        <div class="boxed">
          SPEAKER CONSENT
        </div><br>

        <div class="col-span-6 sm:col-span-10">
          <div class="col-sm-9">
            <label class="form-check-label" for="declaration" style="text-align: justify">
              Speaker’s Name: <u>{{ $complaint->speakername }}</u><br>
              Institution: <u>{{ $complaint->institution }}</u>
            </label>
          </div>
        </div><br>

        <div class="boxed">
          AGREEMENT
        </div><br>
      
      <div class="col-span-6 sm:col-span-10">
          <div class="col-sm-9">
          <input class="form-check-input" type="checkbox" value="on" id="agreement" name="agreement" checked>
          <label class="form-check-label" for="agreement">
            I allow the committee to distribute my slide presentation in pdf format
            and video recording to the program/training participants.<br><br>
              
            I acknowledge that I have observed the content of my presentation including copyright issues.<br><br>

            I acknowledge that Sultan Ahmad Shah Medical Centre @IIUM will not responsible to the content of
            presentation and cannot be held liable to any breach of Copyright and Data Protection made by the Speaker.
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

.boxed {
  border: 1px solid black ;
  text-align: center;
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
