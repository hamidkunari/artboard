<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Artboard</title>
        <meta name="description" content="Artboard">
        <meta name="author" content="grt107">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Demo CSS file not needed for the plugin -->
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('artboard/css-demo-page.css')}}">
        
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <!-- GRT Youtube Plugin CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       
    </head>
    <body>
        <header >
            <div class="menu-container" style="background: linear-gradient(to left, #560060,#1312c9);">
                <div class="grt-menu-row">
                    <div class="grt-menu-logo">
                        <a href="#"  class="grt-logo"><img height="60" style="margin-bottom: 0px; color:white;" src="{{asset('media/logo3.png')}}"></a>
                        
                    </div>
                 
                </div>
            </div>
        </header>


       
<div class="container">
    <div class="col-lg-12">
    <div class="row">
<div class="col-lg-4"></div>
<div class="col-lg-6">
<img class="text-center logo"    src="{{asset('media/bani.jpeg')}}">

<div class="box text-center">
<h2 style="margin-left: -30px">Welcome</h2>
<p>Hai usahawan PKS! Perkasakan potensi sebenar bisnes anda bersama Usahawan Social Biz (USB).

Usahawan Social Biz membawakan seminar PKS maya yang menempatkan bisnes setempat untuk sokongan, latihan, perangkaian, media dan banyak lagi. Dengan menjadi ahli USB, temui tokoh usahawan, program eksklusif dan akses media yang tidak dapat anda perolehi di tempat lain! Inilah penyelesaian bisnes menang-menang yang jangan anda lepaskan. 

Daftar sekarang untuk mendapat maklumat lanjut mengenai pelancaran USB yang bakal berlaku pada 18 Ogos ini.</p>
</div>






	</div>
</div>
</div>




  <!-- Rsvp -->
   <div class="col-xs-12 col-lg-12 form">
    <h1 class="text-center" ><small style="color:red; border-bottom: 2px solid  red; font-size: 28px;">Reserve</small> Here</h1><br>
    @if ($message = Session::get('success'))
        <div height="40" class="alert alert-info">
            <p>{{ $message }}</p>
        </div>
        
    @endif
    <form class="form-horizontal" method="post" action="{{route('reserve.store') }}">
@csrf
    <div class="row">

        <div class="col-lg-6">
             <div class="form-group">
    <label for="first"> Name / Nama</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="name" id="first" placeholder="Name / Nama">
      @error('name')
    <div style="color:darkred; font-family: poppins">{{ $message }}</div>
@enderror
    </div>
     <label for="first">Emel / Email</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="email" id="first" placeholder="Enter Your Emel / Email">
      @error('email')
    <div style="color:darkred; font-family: poppins">{{ $message }}</div>
@enderror
    </div>

  </div>
     <div class="form-group">
    <label style="width: 300px">No Telefon Bimbit / Handphone Number</label>
    <div class="col-lg-10">
      <input type="text" class="form-control " name="number" id="first" placeholder="No Telefon Bimbit / Handphone Number">
       @error('number')
    <div style="color:darkred; font-family: poppins">{{ $message }}</div>
@enderror
    </div>


        </div>
        
    </div>
        <div class="col-lg-6" style="margin-top: 0px;">
            <div class="form-group">
   <label width="300" for="first">Nama Syarikat / Company Name</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="company" id="first" placeholder="Nama Syarikat / Company Name">
       @error('company')
    <div style="color:darkred; font-family: poppins">{{ $message }}</div>
@enderror
    </div>
       <div class="form-group" >
     <label width="300" for="first">No Pendaftaran Syarikat / Co Reg No</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="company_no" id="first" placeholder="No Pendaftaran Syarikat / Company Registration No">
       @error('company_no')
    <div style="color:darkred; font-family: poppins">{{ $message }}</div>
@enderror
    </div>
     <label for="first" style="margin-top: 5px;"> Lokasi / location</label>
    <div class="col-lg-10">
     <select class="form-control" name="location" style="font-size: 13px">
        <option >Choose Location</option>
      <option value="Penang">Penang</option>
      <option value="Kuala Lumpur">Kuala Lumpur</option>
      <option value="Perak">Perak</option>
      <option value="Sarawak">Sarawak</option>
      <option value="Johor">Johor</option>
      <option value="Sabah">Sabah</option>
      <option value="Selangor">Selangor</option>
      <option value="Melaka">Melaka</option>
      <option value="Kedah">Kedah</option>
      <option value="Negeri Sembilan">Negeri Sembilan</option>
 

     </select>
    
      

     </div>

 </div>
  <div class="form-group checkbox">
    <div class="col-lg-10">
      <input type="checkbox" value="agree" name="checkbox"> &nbsp <a href="#" style="text-decoration: none;">Term and Condition</a>
       @error('checkbox')
    <div style="color:darkred; font-family: poppins">{{ $message }}</div>
@enderror
    </div>
    

        </div>

     
<div class="form-group btn1">
    <div class="col-lg-offset-2 col-lg-10">
        
      <button type="submit" class="btn btn-primary" style="font-size: 20px; text-align: center; margin-left: -100px;">I'm Interest</button>
    </div>
  </div>
</form>
</div>
  <!-- End rsvp -->
</div>
       

     



<style>

body{
    background-image: url("{{ asset('media/bg.jpeg') }}");
     background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: auto;
}
.container{
    background-color: white;
    height: auto;
    width: 60%;
    padding: 20px 0px 0px 0px;
    padding-bottom: 100px;
    border-radius: 5px;
}
.box{
    margin-left: -80px;
    margin-top: 50px;
}
h2{
    color: #000066;
    font-family: inherit;
}
ul li{
    font-family: poppins;
}
label{
    font-family: poppins;
}
p{
    color: #2980B9;
    font-family: poppins;
}
input{
    font-family: poppins;
}
.sub{
    margin-left: -200px;
}
.logo{
    margin-top: 40px;
    width: 100%;
    height: 50%;
    margin-left: -60px;
}
.col-lg-10{
    margin-bottom: 10px;
}

/* Desktop only style */
@media (min-width:768px) {
  .menu-container{height: 60px}
  .form{
    width: 100%; box-shadow: 0 0 10px; padding: 20px 10px 20px 70px; margin: 0px 0px 100px 0px
  }
  .ban{
    height: 70px; width: 300px; margin-left: 280px;
  }
  .list{
    margin-left: -50px;
  }
  .btn1{
    margin-left: -20px;
    margin-top: 100px;
  }
  label{
    margin-left: 15px;
  }
  .checkbox{
    margin-left: -380px;
  }
}


/* Tablet only style */
@media (min-width:768px) and (max-width:991px) {
    
}

/* Mobile only style */
@media (max-width:767px) {
   .container{
    background-color: white;
    height: auto;
    width: 90%;
    padding: 20px 0px 0px 0px;
    padding-bottom: 100px;
    border-radius: 5px;
}
.logo{
margin-left: 70px;
height: 100px;
width: 100px;

}
.box{
    padding: 0px 0px 0px 90px;
}
.members{
    padding: 0px 0px 0px 90px ;
    font-size: 15px;
}
.member{
    padding: 0px 0px 40px 165px;
    font-size: 16px;
}
 .sub{
     padding: 0px 0px 0px 184px;
 }  
 .list{
    margin-left: -50px;
    margin-bottom: 47px;
    margin-right: 20px;
 }
 .list1{
    margin-left: 15px;
    margin-bottom: 47px;
    margin-right: 20px;
 }
 .sub1{
    margin-left: 10px;
    
 }
 .form{
    width: 100%; box-shadow: 0 0 10px; padding: 20px 20px 20px 20px;
  }
  .btn1{
    text-align: center;
    margin-left: 100px;
  }
  label{
    font-size: 13px;
    margin-left: 15px;
}
.ban{
    margin-right: 100px;
}
}
</style>
    </body>
</html>
