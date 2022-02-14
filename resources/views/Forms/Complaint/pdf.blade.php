<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div id="header">
      <div style="float: right; text-align: right">
        <p>IIUM-IIUMMC-SHAR-F008<br>VER: 01<br>REV: 02<br>EFFECTIVE DATE: 01 FEBRUARY 2021</p>
      </div>

      <div style="position: relative; text-align: center;">
        <img src="images/iium-logo.jpg" alt="logo" width="200" >
        <h4>SULTAN AHMAD SHAH MEDICAL CENTRE @IIUM<br>SHARIAH COMPLIANCE UNIT<br>COMPLAINT FORM</h4>
      </div>
      
    </div>
    
    <div id="footer">
      <div style="position: relative; text-align: center">
        <p>Sultan Ahmad Shah Medical Centre @IIUM, Jalan Sultan Ahmad Shah, Bandar Indera Mahkota, 25200 Kuantan, Pahang Darul Makmur.<br>Tel: 09-591 2500</p>
      </div>
    </div>


    <div>
            <div>
                <div>
               <div>
                <table class="pt-info">
                        <tr>
                            <th style="text-align: left; padding: 5px;">NAME</th>
                            <td style="text-align: left; padding: 5px;">{{ $complaint->complainant_name }}</td>
                            <th style="text-align: left; padding: 5px;">DATE</th>
                            <td style="text-align: left; padding: 5px;">{{ $complaint->complaint_date }}</td>
                        </tr>
                        <tr>
                            <th style="text-align: left; padding: 5px;">PHONE NUMBER</th>
                            <td style="text-align: left; padding: 5px;">{{ $complaint->phone_no }}</td>
                            <th style="text-align: left; padding: 5px;">CLINIC/WARD/DEPARTMENT</th>
                            <td style="text-align: left; padding: 5px;">{{ $complaint->department }}</td>
                        </tr>
                    </table>
               </div>
               

            <div>
                <div>
                <div>
					<div>
                        <h4>TYPE OF COMPLAINT :</h4>
                        <br>
                        {{ $complaint->complaint_type }}
					</div>
				</div>
                <br><br><br>
				<div>
					<h4>Details :</h4>
                    <br>
                    <div>
                        {{ $complaint->details }}
                    </div>
				    </div>
                <br><br><br><br><br>
				        <div style="position: absolute; left: 10px;">
                    <h5>This is an auto-generated signature</h5>
                    <div>Name : {{ $complaint->complainant }}</div>
                    <div>Date : {{ $complaint->complaint_date }}</div>
                </div>

                </div>
            </div>

            <div class="page_break">
                <h4 style="text-decoration: underline">FOR OFFICE USE ONLY</h4>
                <p style="font-size: 14px">Received By  : {{ $complaint->received_by }}</p>
                <p style="font-size: 14px">Date Received : {{ $complaint->received_date }}</p>
                <br>
                <table class="pt-info">
                  <tr>
                    <th colspan="2">A. INVESTIGATION & ROOT CAUSE</th>
                  </tr>
                  <tr>
                    <td colspan="2">{{ $complaint->investigation }}</td>
                  </tr>
                  <tr>
                    <th colspan="2">B. CORRECTIVE ACTION TAKEN</th>
                  </tr>
                  <tr>
                    <th>Immediate Action & Completion Date</th>
                    <th>Long-Term Action & Completion Date</th>
                  </tr>
                  <tr>
                    <td>
                      {{ $complaint->immediate_action }}
                      <br><br>
                      {{ $complaint->immediate_completion }}
                    </td>
                    <td>
                      {{ $complaint->longterm_action }}
                      <br><br>
                      {{ $complaint->longterm_completion }}
                    </td>
                  </tr>

                </table>
                <div>
                  <h5>Verified by :</h5>
                  <h6>This is an auto-generated signature</h6>
                  <div>
                    {{ $complaint->verified_by }}
                  </div>
                </div>
            </div>      
    </div>

  </body>
</html>

<style>
  *{
  font-family: Arial, sans-serif;
  }
  @page { 
    margin: 180px 50px; }
  #header { 
    position: fixed; 
    left: 0px; 
    top: -180px; 
    right: 0px; 
    height: 150px; 
    text-align: center; }
  #footer { 
    position: fixed; 
    left: 0px; 
    bottom: -250px; 
    right: 0px; 
    height: 150px;
    text-align: center; }
  .page_break {
      page-break-before: always; }
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
  table, tr, td {
    padding: 2px;
    border: 1px solid black;
    border-collapse: collapse;
  }   
  .pt-info{
      margin: 2px;
      padding:2px;
      width: 100%;
      font-size: 16px;
  }

</style>

