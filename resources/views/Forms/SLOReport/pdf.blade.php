<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div style="float: right">
      <p>IIUM-IIUMMC-SHAR-F010<br>VER: 01<br>REV: 00<br>EFFECTIVE DATE: 22 MARCH 2021</p>
    </div>

    <div style="position: relative; text-align: center">
      <img src="images/iium-logo.jpg" alt="logo" width="200" ></div>
      <div style="position: relative; text-align: center">
      <h4>SULTAN AHMAD SHAH MEDICAL CENTRE @IIUM<br>SHARIAH COMPLIANCE UNIT<br>SHARIAH LIAISON OFFICER REPORT FORM</h4></div>


      <div style="left: 30px;">
            <div>
                <div>
               <div>
                <table class="pt-info">
                        <tr>
                            <th style="width: 25%; text-align: left; padding: 5px;">Shariah Liaison Officer’s Name</th>
                            <td >{{ $slo->slo_name }}</td>
                        </tr>
                        <tr>
                            <th style="width: 25%; text-align: left; padding: 5px;">Department / Unit / Ward / Clinic</th>
                            <td>{{ $slo->dept }}</td>
                        </tr>
                        <tr>
                            <th style="width: 25%; text-align: left; padding: 5px;">Date</th>
                            <td>{{ $slo->report_date }}</td>
                        </tr>
                    </table>
                    <br>
                    <table class="pt-info" >
                        <th style="text-align: left; padding: 5px;" colspan="2">DETAILS</th>
                        <tr>
                            <td style="text-align: left; padding: 5px;" colspan="2">
                                <h5>Report</h5>
                                <div>
                                    {{ $slo->report_details }}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding: 5px;" colspan="2">
                                <h5>Action by Shariah Liaison Officer (if any)</h5>
                                <div>
                                    {{ $slo->alo_action }}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding: 5px;" colspan="2">
                                <h5>Suggestions / Recommendations/ Comments from Representative of Shariah Compliance Unit</h5>
                                <div>
                                    {{ $slo->scu_comments }}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding: 5px;" colspan="2">
                                <h5>Next Follow Up</h5>
                                <div>
                                    {{ $slo->followup }}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5>Shariah Liaison Officer:</h5>
                                <div> <h6>This is an auto-generated signature</h6></div>
                                <div>
                                    Name : {{ $slo->slo_name }}
                                </div>
                                <div>
                                    Position : 
                                </div>
                                <div>
                                    Date : {{ $slo->report_date  }}
                                </div>
                            </td>
                            <td>
                                <h5>Representative from Shariah Compliance Unit:</h5>
                                <div> <h6>This is an auto-generated signature</h6></div>
                                <div>
                                    Name : {{ $slo->scu_id }}
                                </div>
                                <div>
                                    Position :
                                </div>
                                <div>
                                    Date : {{ $slo->review_date }}
                                </div>
                            </td>
                        </tr>
                    </table>
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
  .pt-info{
      margin: 2px;
      padding:2px;
      width: 100%;
      font-size: 16px;
  }

</style>

