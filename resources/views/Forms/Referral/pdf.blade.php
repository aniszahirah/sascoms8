<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    
    <div style="float: left" class="top right">
        <table class="case-header">
            <tr>
                <td>SCUCN :</td>
                <td>{{ $referral->case_no }}</td>
            </tr>
            <tr>
                <td>CASE STATUS :</td>
                <td>{{ $referral->case_status }}</td>
            </tr>
        </table>
    
    </div>

    <div style="float: right">
      <p>IIUM-IIUMMC-SHAR-F004<br>VER: 01<br>REV: 02<br>EFFECTIVE DATE: 01 FEBRUARY 2021</p>
    </div>

    <div style="position: relative; text-align: center">
      <img src="images/iium-logo.jpg" alt="logo" width="200" ></div>
      <div style="position: relative; text-align: center">
      <h4>SULTAN AHMAD SHAH MEDICAL CENTRE @IIUM<br>DEPARTMENT OF SHARIAH COMPLIANCE<br>REFERRAL FORM</h4></div>


      <div style="left: 30px;">
            <div>
                <div>
                <div>
                    <h4>A. Patient/Staff Information</h4>
                </div>
               <div>
                <table class="pt-info">
                        <tr>
                            <td>NAME</td>
                            <td colspan="3">{{ $referral->name }}</td>
                        </tr>
                        <tr>
                            <td>ADDRESS</td>
                            <td colspan="3">{{ $referral->address }}</td>
                        </tr>
                        <tr>
                            <td>CONTACT NO</td>
                            <td>{{ $referral->contact_no }}</td>
                            <td>GENDER</td>
                            <td>{{ $referral->gender }}</td>
                        </tr>
                        <tr>
                            <td>RN/STAFF NO</td>
                            <td>{{ $referral->ref_no }}</td>
                            <td>NRIC</td>
                            <td>{{ $referral->nric }}</td>
                        </tr>
                        <tr>
                            <td>CLINIC/WARD/DEPARTMENT</td>
                            <td>{{ $referral->dept }}</td>
                            <td>DATE</td>
                            <td>{{ $referral->ref_date }}</td>
                        </tr>
                    </table>
               </div>
               

            <div class="flex flex-row justify-between ">
                <div class="flex flex-col w-full mx-auto">
                <div class="mt-2 pb-12 items-center">
                    <h4>B. Information from Doctor</h4>
                </div>
                <div class="mb-2 md:mb-1 md:flex items-center">
					<div class="flex-1 text-lg">
                        Discipline / Expertise :
                        {{ $referral->doc_expertise }}
					</div>
				</div>

				<div class="mb-2 md:mb-1 md:flex items-center">
					<div class="flex-1 text-lg">
                        Patient Diagnosis :
                        {{ $referral->pt_diagnosis }}
					</div>
				</div>

				<div class="mb-2 md:mb-1 md:flex items-center">
					<div class="flex-1 text-lg">
                        Case Type :
                        {{ $referral->case_type }}
					</div>
				</div>

                <div class="mt-2 pb-12 items-center">
                    <h4>C. Purpose</h4>
                </div>

                <div class="flex-1 text-lg">
                    Purpose :
                    {{ $referral->purpose }}
				</div>
                <br>
                <div class="mb-2 md:mb-1 md:flex items-center">
					<div class="flex-1 text-lg">
                        Details :
                        {{ $referral->details }}
					</div>
     
				</div>
                </div>
            </div>
            <br><br><br><br><br>
            <div style="position: absolute; left: 10px;">
                <div>
                <div>
                    Referred by :
                </div>   
                <br>
                <div>
                    {{ $referral->doc_id }} 
                </div>                
            </div>
            
            
    </div>

    <div style="position: relative; text-align: center">
      <p style="position: fixed; bottom: 0; width:100%;">Sultan Ahmad Shah Medical Centre @IIUM, Jalan Sultan Ahmad Shah, Bandar Indera Mahkota, 25200 Kuantan, Pahang Darul Makmur.<br>Tel: 09-591 2500</p>
      
    </div>
    
  </body>
</html>

<style>
   *{
    font-family: Arial, sans-serif;
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
  .top right{
    font-size: 10px;
  }
  table, tr, td {
    padding: 2px;
    border: 1px solid black;
    border-collapse: collapse;
  }   
  .case-header{
      margin: 0px;
      padding: 4px 7px;
      font-size: 10px;
      text-align: center;
      height: 3px;
  }
  .pt-info{
      margin: 2px;
      padding:2px;
      width: 100%;
      font-size: 16px;
  }

</style>

