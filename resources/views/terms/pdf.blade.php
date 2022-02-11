<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    
    <div style="float: left">
      <p>Date:{{ strftime("%d %b %Y",strtotime($terms->created_at)) }}<br>Time:{{ strftime("%T",strtotime($terms->created_at)) }}</p></div>

    <div style="float: right">
      <p>IIUM-IIUMMC-SHAR-F011<br>VER: 01<br>REV: 01<br>EFFECTIVE DATE: {{ strftime("%d %b %Y",strtotime($terms->created_at)) }}</p>
    </div>

    <div style="position: relative; text-align: center">
      <img src="images/iium-logo.jpg" alt="logo" width="200" ></div>
      <div style="position: relative; text-align: center">
      <h4>SULTAN AHMAD SHAH MEDICAL CENTRE @IIUM<br>DEPARTMENT OF SHARIAH COMPLIANCE<br>TERMS AND CONDITION FORM</h4></div>

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
     
     <input class="form-check-input" type="checkbox" value="{{ $terms->declaration }}" id="declaration" name="declaration" checked>
     <label class="form-check-label" for="declaration">
         I acknowledge that I have clearly explained to the patient some of the conditions that 
         the patient may face, as described in the next page.<br><br>
         
         <i>Saya mengaku bahawa saya telah menerangkan dengan jelas kepada pesakit berkenaan dengan beberapa keadaan yang 
         mungkin dihadapi oleh pesakit seperti yang dinyatakan di muka surat seterusnya.</i>
     </label>

    <div style="position: relative; text-align: center">
      <p style="position: fixed; bottom: 0; width:100%;">Sultan Ahmad Shah Medical Centre @IIUM, Jalan Sultan Ahmad Shah, Bandar Indera Mahkota, 25200 Kuantan, Pahang Darul Makmur.<br>Tel: 09-591 2500</p>     
    </div>
    
  </body>
</html>

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
