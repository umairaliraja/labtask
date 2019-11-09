@extends('layout')
@section('title' , 'Umair')
<!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="main.css">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  
    </head>
    <body >
    @section('contact')
      <div class="container-fluid">
          <div class="row">

                 <img class="img-fluid" src="{{'images/sd.jpg'}}" >


          </div>
      </div>
      <div class="container-fluid">
          <div class="row">
        <div class="col-sm-12" style="background-color:darkblue ;color:white;">
        <h1 style="text-align:center"> 
        CONTACT US  </h1></div>
</div>
</div>
<br><br><br>
<div class="container-fluid">
          <div class="row">
<div class="col-sm-12" >
<center>
                     <form>
                            
                             <label >UserName:</label>
                             <input type="text" placeholder="UserName" ><br><br>
                            
                             <label style="padding-right: 28px;">Email:</label>
                             <input type="text" placeholder="Email" ><br><br>

                             <label style="padding-right: 9px;">Message:</label>
                             <input type="Feedback" placeholder="feedback" ><br><br>
                             <button class="btn" value="Submit">Submit</button>
                         </form>
</center>
</div>
        </div>
       
</div>
     
@endsection

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
  </html>