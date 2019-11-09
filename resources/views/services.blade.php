@extends('layout')
@section('title' , 'Umair')
@section('nav')
@parent
@endsection
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
    @section('services')
      <div class="container-fluid">
          <div class="row">

                  <img class="img-fluid" src="{{'images/hhj.png'}}" >

          </div>
      </div>


     
      <div class="container-fluid">
          <div class="row">
        <div class="col-sm-12" style="background-color:black ;color:white;">
        <h1 style="text-align:center"> 
      SERVICE </h1>
</div>

</div>
<br> 
<div class="container">
          <div class="row">
        <div class="col-sm-3" style="background-color:black ;color:white;">
                           <center>
 
                          <h2>Company</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum inventore tenetur laudantium id saepe tempora at distinctio sunt amet
                               officiis consectetur quidem, nostrum accusamus cum maiores autem iusto sapiente aliquid!</p>
                     </center>
              </div>
              <div class="col-sm-3" style="background-color: black;color:white;">
                      <center>
                     <h2>Scope</h2>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum inventore tenetur laudantium id saepe tempora at distinctio sunt amet
                          officiis consectetur quidem, nostrum accusamus cum maiores autem iusto sapiente aliquid!</p>
                </center>
         </div>
         <div class="col-sm-3" style="background-color:black;color:white;">
              <center>
             <h2>Motive</h2>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum inventore tenetur laudantium id saepe tempora at distinctio sunt amet
                  officiis consectetur quidem, nostrum accusamus cum maiores autem iusto sapiente aliquid!</p>
        </center>
  </div>
  <br>
  <div class="col-sm-3" style="background-color: black;color:white;">
          <center>
         <h2>Vision</h2>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum inventore tenetur laudantium id saepe tempora at distinctio sunt amet
              officiis consectetur quidem, nostrum accusamus cum maiores autem iusto sapiente aliquid!</p>
    </center>
  </div>
          </div>
      </div>
      <br><br>
      <div class="container-fluid">
          <div class="row" style="background-color:black;color:white;">
              <div class="col-sm-12">
                  <center>
                          <h2>Who we Are??</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam adipisci totam tempore, magnam consectetur
                              quasi sunt voluptatum suscipit reprehenderit voluptate minus rerum et! Nemo labore, unde facere provident delectus eius!</p>
                  </center>
              </div>
          </div>
      </div>
      <br><br>
      <div class="container-fluid">
          <div class="row">
              <div class="col-sm-12">
                  <center>
                      <h1>
                      Gallery
                      </h1>
                  </center>
              </div>
          </div>
         
          <br><br>
          <div class="row">

                      <div class="col-sm-4"  style="border:2px solid teal;padding: 10px;">
                         <center> <img src="images/1.jpg" class="img-fluid" ></center>
                          </div>
                  <div class="col-sm-4" style="border:2px solid teal;padding: 10px;border-right: none;border-left: none;">
                          <center><img src="images/3.jpg" class="img-fluid" ></center>
                      </div>
           <div class="col-sm-4" style="border:2px solid teal;padding: 10px;">
                  <center><img src="images/1.jpg" class="img-fluid" ></center>
                   </div>
          </div>

      </div>
    
      </div>
      <div class="container-fluid" >
          <div class="row"  style="background-color: BLACK;padding: 40px;color: white;">
              <div class="col-sm-4">
                  <center><h5 >Responsive Bootstrap Template</h5></center>
              </div>
              <div class="col-sm-4">
                     <center> <h5 >CopyRight 2019</h5></center>
                  </div>
              <div class="col-sm-4">
                     <center> <h5 >BY RAJAUMAIR</h5></center>
                  </div>
          </div>
      </div>
      @endsection
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
  </html>