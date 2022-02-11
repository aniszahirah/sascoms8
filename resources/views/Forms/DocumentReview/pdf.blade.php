<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div style="float: right">
      <p>IIUM-IIUMMC-SHAR-F001<br>VER: 01<br>REV: 03<br>EFFECTIVE DATE: 19 MARCH 2021</p>
    </div>

    <div style="position: relative; text-align: center">
      <img src="images/iium-logo.jpg" alt="logo" width="200" ></div>
      <div style="position: relative; text-align: center">
      <h4>SULTAN AHMAD SHAH MEDICAL CENTRE @IIUM<br>DOCUMENT REVIEW FORM</h4></div>


      <div style="left: 30px;">
            <div>
                <div>
               <div>
                <table class="pt-info">
                        <th colspan="2">
                            Agreement /Standard Operating Procedure/ Guidleine / Others
                        </th>
                        <tr>
                            <th style="width: 25%; text-align: left; padding: 5px;">Name of Document</th>
                            <td >{{ $document->document_name }}</td>
                        </tr>
                        <tr>
                            <th style="width: 25%; text-align: left; padding: 5px;">P.I.C</th>
                            <td>{{ $document->pic }}</td>
                        </tr>
                        <tr>
                            <th style="width: 25%; text-align: left; padding: 5px;">Received Date</th>
                            <td>{{ $document->received_date }}</td>
                        </tr>
                        <tr>
                            <th style="width: 25%; text-align: left; padding: 5px;">Review Date</th>
                            <td>{{ $document->review_date }}</td>
                        </tr>
                        <tr>
                            <th style="width: 25%; text-align: left; padding: 5px;">Comments</th>
                            <td>{{ $document->comments }}</td>
                        </tr>
                        <tr>
                            <th style="width: 25%; text-align: left; padding: 5px;">Follow Up (if any)</th>
                            <td>{{ $document->followup }}</td>
                        </tr>
                        <tr>
                            <th style="width: 25%; text-align: left; padding: 5px;">Remarks</th>
                            <td>{{ $document->remarks }}</td>
                        </tr>
                    </table>
                    <br><br><br><br>
                    <div style="float: left; text-align: left; left: 15px;">
                        <h4>Checked by :</h4>
                        <div>Name : {{ $document->checked_by }}</div>
                        <div>Date : {{ $document->checked_date }}</div>
                    </div>

                    <div style="float: right; text-align: left; right: 30px;">
                        <h4>Verified by :</h4>
                        <div>Name : {{ $document->verified_by }}</div>
                        <div>Date : {{ $document->verified_date }}</div>
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
  .pt-info{
      margin: 2px;
      padding:2px;
      width: 100%;
      font-size: 16px;
  }

</style>

