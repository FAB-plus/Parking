<!DOCTYPE html>
<html>
<header>
  <title>Bill</title>

  <link rel="stylesheet"  href="assets/css/bs.css">
  <link rel="stylesheet"  href="assets/css/bootstrap-theme.css">

  <style>
  .float-right{
    float: right;
  }
  .rcorners {
      border-radius: 50px 50px;
  }
  hr{
    margin-bottom:50px;
  }

  .invite-border {
    border: 3px solid #f2a082;
    border-radius: 15px;
  }
  .border {
    border: 3px solid #f2a082;
    border-radius: 15px;
  }

  .image-invite{
   /* padding: 35px;*/
   box-sizing: border-box;
    padding-top: 20px;
    max-width: 270px;
    width: 100%;
  height: auto;
  }

  .logo{
    box-sizing: border-box;
    padding-top: 10px;
    max-width: 250px;
    padding-bottom: 10px;
    padding-left: : 10px;
  }
  .clear{
    margin-top: 20px;
  }
  th {
  background-color: #4CAF50;
  color: white;
}

tr:nth-child(even) {background-color: #f2f2f2;}

th, td {
  padding: 10px;
  text-align: left;
  vertical-align: bottom;
}

table {
  width: 100%;
}

h1{
  padding: 8px;
  text-align: center;
  vertical-align: bottom;
  color: #4CAF50;
  font-family: verdana;
}

  </style>

</header>
<body>
<div class="">

  <div class="row">
      <div class="" >
          <h1>BF NUMERIK+</h1>
          <h5 class="" style="font-size: 17px;text-align: center;">Phone: 77 651 05 09 / 76 484 72 33 / 70 458 00 42 / 77 156 21 64 </h5>
          <h5 class="" style="font-size: 17px;text-align: center;">Email:daniloexpress4life@yahoo.com</h5>

          <hr>
          <h3 class="" style="font-size: 25px;text-align: center;">Facture</h3>
        </div>

    </div>
    
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h5 class="" style="font-size: 20px;text-align: center;">Customer Informartions</h5>
          
                 <hr>
                 <table class="table">
                   <thead>
                     <th>Reparation Id </th>
                     <th>Date </th>
                     <th>Code Ordre </th>
                     <th>Designation </th>
                      <th>Code reparation </th>
                     <th>Quantite</th>
                      <th>Observations </th>
                     <th>Nom du client</th>
                     <th>Matricule</th>
                     
                   </thead>
                   <tbody>
                    
                     @foreach($ordrereps  as $line)
                     <tr>
                       <td>{{$line->id}}</td>
                       <td>{{$line->date_ordre}}</td>
                       <td>{{$line->code}}</td>
                       <td>{{$line->designation}}</td>
                       <td>{{$line->coderep}}</td>
                       <td>{{$line->quantity}}</td>
                       <td>{{$line->Observations}}</td>
                       <td>{{$line->clientID}}</td>
                       <td>{{$line->vehicules_id}}</td>
                      
                     </tr>
                     @endforeach
                    
                   </tbody>
                   <tfoot>
                   
                   </tfoot>
                 </table>
                  <hr>
                  <div class="float-right"> TOTAL PRICE :  F CFA
                     </div>
                </div> 
            </div>          
         </div>
    </section>   
</body>
</html>