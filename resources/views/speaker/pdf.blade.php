<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    
    <div style="float: left">
      <p>Date:{{ strftime("%d %b %Y",strtotime($speaker->created_at)) }}<br>Time:{{ strftime("%T",strtotime($speaker->created_at)) }}</p></div>

    <div style="float: right">
      <p>IIUM-IIUMMC-SHAR-F011<br>VER: 01<br>REV: 01<br>EFFECTIVE DATE: {{ strftime("%d %b %Y",strtotime($speaker->created_at)) }}</p>
    </div>

    <div style="position: relative; text-align: center">
      <img src="images/iium-logo.jpg" alt="logo" width="200" ></div>
      <div style="position: relative; text-align: center">
      <h4>SULTAN AHMAD SHAH MEDICAL CENTRE @IIUM<br>DEPARTMENT OF SHARIAH COMPLIANCE<br>SPEAKER CONSENT FORM</h4></div>

      <div class="col-span-6 sm:col-span-10">
        <div class="col-sm-9">
          <label class="form-check-label" for="declaration" style="text-align: justify">
            Name of program / Training: <u>{{ $speaker->programname }}</u><br>
            Date: <u>{{ $speaker->date }}</u>
          </label>
        </div>
      </div><br>

      <div class="boxed">
        SPEAKER CONSENT
      </div><br>

      <div class="col-span-6 sm:col-span-10">
        <div class="col-sm-9">
          <label class="form-check-label" for="declaration" style="text-align: justify">
            Speaker’s Name: <u>{{ $speaker->speakername }}</u><br>
            Institution: <u>{{ $speaker->institution }}</u>
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
  .boxed {
  border: 1px solid black ;
  text-align: center;
}
  
</style>
