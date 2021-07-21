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
        <link rel="stylesheet" href="{{asset('artboard/grt-responsive-menu.css')}}">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <!-- GRT Youtube Plugin CSS -->
        <link rel="stylesheet" href="{{asset('artboard/grt-responsive-menu.css')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <div class="menu-container" style="background: linear-gradient(to left, #560060,#1312c9);">
                <div class="grt-menu-row">
                    <div class="grt-menu-logo">
                        <a href="#"  class="grt-logo"><img style="margin-bottom: -10px; height: 60px; color:white" src="{{asset('media/logo3.png')}}"></a>
                        
                    </div>
                    <div class="grt-menu-right">
                        <nav >
                            <button class="grt-mobile-button"><span class="line1"></span><span class="line2"></span><span class="line3"></span></button>
                            <ul class="grt-menu">
                                <li class="active"><a href="">About Usb</a></li>
                                <li><a href="">Calender</a></li>
                                <li><a href="">Speaker</a></li>
                                <li><a href="">Contact Us</a></li>
                                <li><a href="">Login</a></li>
                                <li class="register"><i class="fa fa-chevron-right" aria-hidden="true"></i><i class="fa fa-chevron-right" aria-hidden="true"></i><a type="button" data-toggle="modal" data-target="#exampleModalCenter" href="">Register Now</a></li>
                                
                                                        
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <!-- registeration form -->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


   <!-- end registeration -->
        <!-- Slider -->

        <div class="photo_slider">
  <input type="radio" name="slider" class="slide-radio1" checked id="slider_1">
  <input type="radio" name="slider" class="slide-radio2" id="slider_2">
  <div class="slider-pagination">
    <label for="slider_1" class="page1"></label>
    <label for="slider_2" class="page2"></label>
  </div>
  <div class="next control">
    <label for="slider_1" class="numb1"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
      <path d="M298.3 256L131.1 81.9c-4.2-4.3-4.1-11.4.2-15.8l29.9-30.6c4.3-4.4 11.3-4.5 15.5-.2L380.9 248c2.2 2.2 3.2 5.2 3 8.1.1 3-.9 5.9-3 8.1L176.7 476.8c-4.2 4.3-11.2 4.2-15.5-.2L131.3 446c-4.3-4.4-4.4-11.5-.2-15.8L298.3 256z"/>
      </svg> </label>
    <label for="slider_2" class="numb2"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
      <path d="M298.3 256L131.1 81.9c-4.2-4.3-4.1-11.4.2-15.8l29.9-30.6c4.3-4.4 11.3-4.5 15.5-.2L380.9 248c2.2 2.2 3.2 5.2 3 8.1.1 3-.9 5.9-3 8.1L176.7 476.8c-4.2 4.3-11.2 4.2-15.5-.2L131.3 446c-4.3-4.4-4.4-11.5-.2-15.8L298.3 256z"/>
      </svg> </label>
  </div>
  <div class="previous control">
    <label for="slider_1" class="numb1"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
      <path d="M213.7 256L380.9 81.9c4.2-4.3 4.1-11.4-.2-15.8l-29.9-30.6c-4.3-4.4-11.3-4.5-15.5-.2L131.1 247.9c-2.2 2.2-3.2 5.2-3 8.1-.1 3 .9 5.9 3 8.1l204.2 212.7c4.2 4.3 11.2 4.2 15.5-.2l29.9-30.6c4.3-4.4 4.4-11.5.2-15.8L213.7 256z"/>
      </svg> </label>
    <label for="slider_2" class="numb2"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
      <path d="M213.7 256L380.9 81.9c4.2-4.3 4.1-11.4-.2-15.8l-29.9-30.6c-4.3-4.4-11.3-4.5-15.5-.2L131.1 247.9c-2.2 2.2-3.2 5.2-3 8.1-.1 3 .9 5.9 3 8.1l204.2 212.7c4.2 4.3 11.2 4.2 15.5-.2l29.9-30.6c4.3-4.4 4.4-11.5.2-15.8L213.7 256z"/>
      </svg> </label>
  </div>
  <div class="slider slide_img_01"><img style="width: 100%;
height: 100%;
max-height: 70%;
margin:-80px 0 0 0;
padding: 0;" class="img-fluid"  src="{{asset('media/slider/FB_Header-01.jpg')}}"></div>
  <div class="slider slide_img_02"><img style="width: 100%;
height: 100%;
max-height: 70%;
margin:-80px 0 0 0;
padding: 0;" height="700" width="100%" class="img-fluid" src="{{asset('media/slider/slide2.png')}}"></div>
</div>



        <!-- End Slider -->
    <!-- sidebar -->
<div class="sidebar">
<img style="height: 30px; width: 30px; margin-bottom: 10px; border-radius: 5px" src="{{asset('icon/fb.png')}}">
<img style="height: 30px; width: 30px; margin-bottom: 10px; border-radius: 5px" src="{{asset('icon/tw.png')}}">
<img style="height: 30px; width: 30px; margin-bottom: 10px; border-radius: 5px" src="{{asset('icon/yu.png')}}">
<img style="height: 30px; width: 30px; margin-bottom: 10px; border-radius: 5px" src="{{asset('icon/ig.png')}}">
</div>
<!-- endsidebar -->
<br><br>
        <!-- content -->
        <div class="container">
       <div class="row" style="margin:  -110px 30px 0px 30px">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="margin-bottom: 20px">
            <h3 class="para" style="color:black; line-height: 1; margin-bottom: 20px;">Welcome to </br> <span style="color:red">USAHAWAN Social </br> <small style="border-bottom: 2px solid red; width: 60px ">Biz USB</small></span></h3>
            <p class="para">
                publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.
                
                <br><br>
                <a href="" style="border: solid 1px red; border-radius: 10px; color:red; text-decoration: none; padding: 10px">Read More</a>
               

            </p>
        </div>
         <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center " style="margin-bottom: 50px;">
           <div class="row rows">
  <div class="col">
      <img class="img-fluid person" src="{{asset('media/speaker/person_1.png')}}">
  </div>
  <div class="col"> <img class="img-fluid person" src="{{asset('media/speaker/person_2.png')}}"></div>
  <div class="col"> <img class="img-fluid person" src="{{asset('media/speaker/person_3.png')}}"></div>
</div>

<div class="row" style="margin-left: 10px">
  <div class="col"> <img class="img-fluid person" src="{{asset('media/speaker/person_4.png')}}"></div>
  <div class="col"> <img class="img-fluid person" src="{{asset('media/speaker/person_5.png')}}"></div>
  <div class="col"><small style="border-bottom:solid 1px red; margin-bottom: -50px; font-size: 15px">view more</small></div>
</div>
       </div>
   </div>
       
       
        <!-- end content -->

  <!-- Rsvp -->
<!--  
<div class="row">

<div class="col-xs-12 col-md-12 col-lg-12">
   <h1 class="text-center" ><small style="color:red; border-bottom: 2px solid  red; font-size: 28px;">Reserve</small> Here</h1><br>
<div class="col-lg-1 col-md-1"></div>

<div class="col-lg-10 col-md-10" style="box-shadow: 0 0 10px; padding: 20px 20px 20px 0px;">
    
<form class="form-horizontal" action="/action_page.php">
  <div class="form-group">
    <label class="control-label col-sm-2" for="first"> Name / Nama</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="name" id="first" placeholder="Name / Nama">
    </div>
     <label class="control-label col-sm-2" for="first">Emel / Email</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="email" id="first" placeholder="Enter Your Emel / Email">
    </div>
  </div>
 <div class="form-group">
    <label class="control-label col-sm-2" for="first">No Telefon Bimbit / Handphone Number</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="phone" id="first" placeholder="No Telefon Bimbit / Handphone Number">
    </div>
     <label class="control-label col-sm-2" for="first">Nama Syarikat / Company Name</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="company" id="first" placeholder="Nama Syarikat / Company Name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="first">No Pendaftaran Syarikat / Company Registration No</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="company_no" id="first" placeholder="No Pendaftaran Syarikat / Company Registration No">
    </div>
     <label class="control-label col-sm-2" for="first"> Lokasi / location</label>
    <div class="col-sm-4">
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
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary" style="font-size: 20px; float: right;">Reserve</button>
    </div>
  </div>
</form>
</div>
</div>
 </div>   
  <!-- End rsvp --> 
      
      
      <!-- News -->
     <div class="row">
     <h1 class="text-center" ><small style="color:red; border-bottom: 2px solid  red;">USB</small> News</h1>
    <div class="text-right more" style="margin-bottom: 20px;"><small style="float: right; border-bottom: solid 1px red; width: 70px; padding: 0px 0px 0px 10px; font-size: 15px">View All</small></div>

  <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4"> <img class="img-fluid news" src="{{asset('media/speaker/person_3.png')}}">
  <strong>USB port</strong><br>
  <small style="color:grey;">On Business & Finanical</small>
   <p style="font-family: italic;">Complete your project with these code snippets and patterns for Bootstrap Framework.  </p>
   <a href="#" style="border-bottom:solid 1px orangered; color:orangered; font-size: 15px; text-decoration: none;">Read More</a>
  </div>

  <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4"> <img class="img-fluid news" src="{{asset('media/speaker/person_5.png')}}">
  <strong>USB port</strong><br>
  <small style="color:grey;">On Business & Finanical</small>
   <p style="font-family: italic;">Complete your project with these code snippets and patterns for Bootstrap Framework.  </p>
   <a href="#" style="border-bottom:solid 1px orangered; color:orangered; font-size: 15px; text-decoration: none;">Read More</a>
  </div>

  <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4"> <img class="img-fluid news" src="{{asset('media/speaker/person_4.png')}}">
  <strong>USB port</strong><br>
  <small style="color:grey;">On Business & Finanical</small>
   <p style="font-family: italic;">Complete your project with these code snippets and patterns for Bootstrap Framework.  </p>
   <a href="#" style="border-bottom:solid 1px orangered; color:orangered; font-size: 15px; text-decoration: none;">Read More</a>
  </div>
      
      
      </div>
      <!-- End News -->
</div>
</div>
<!-- footer -->
<div class="row footer">
    <div class="col-md-4 col-lg-4"></div>
<div class="col-md-4 col-lg-4">
<p class="text-center">Complete your project with these code snippets and patterns for Bootstrap Framework.</p>
<button class="btn btn-danger text-center">Register now</button>
</div>
</div>
<!-- End Footer -->


        <!-- Jquery -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        
        <!-- Github button for demo page -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>

        <!-- GRT Youtube Popup -->
        <script src="{{asset('artboard/grt-responsive-menu.js')}}"></script>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46156385-1', 'cssscript.com');
  ga('send', 'pageview');

</script>

<style>
p{
    font-family: poppins medium;
    line-height: 1;
}
a{
    text-decoration: none;
    color: black;
    font-family: poppins;
}
input{
    font-size: 14px;


}
.footer{
    background-color: #560060;
    margin-top: 50px;
    font-family: poppins;

}

.rows{
    margin: 0px -7px 5px 0px;
}
.person{
    border-radius: 10px;
}
small{
    font-size:  15px;
    font-family: poppins;
}
strong{
    font-size: 20px;
}
label{
    font-size: 13px;
    font-family: poppins;
    color: red;
}
/* Desktop only style */
@media (min-width:768px) {
  .rows{
    margin-bottom: 30px;
  }
  .person{
    height: 100px;
    width:  150px;
    border-radius: 5px;
  }
    .news{
        width:  400px;
        height: 150px;
        border-radius: 5px;
    }
    .footer{
         height: auto;
    padding:  10px 0px 10px 0px;
    color: white;
    font-family: poppins medium;

    }
    button{
        width:  200px;
        margin-left: 100px;
        padding: 0px 50px 0px 50px;
        font-size: 20px;
    }

.sidebar{
    float: right;
    width:  40px;
    height: 200px;
    background-color: white;
    margin:-450px 5px 0px 30px;
     position: fixed;
    position: sticky;
    color: black;
    border-radius: 5px;
    padding: 5px;
    top:200px;


}
}

/* Tablet only style */
@media (min-width:768px) and (max-width:991px) {
 .news{
        width:  400px;
        height: 150px;
    }    
}

/* Mobile only style */
@media (max-width:767px) {
    .slide_img_01{
        height: 50%;
    }
    .slide_img_02{
        height: 50%;
    }
    .control label svg{
        margin-top: -360px;
    }
    .photo_slider{
        margin-bottom: -300px;
    }

    .sidebar{
    float: right;
    width:  40px;
    height: 200px;
    background-color: white;
    margin:-400px 5px 0px 30px;
     position: fixed;
    position: sticky;
    color: black;
    border-radius: 5px;
    padding: 5px;
    top:240px;


}
    
 .news{
        width:  400px;
        height: 150px;
    }
    .rows{
    margin-bottom: 30px;
  }
  .footer{
    height: auto;
    padding:  10px 0px 10px 0px;
    color: white;
    font-family: poppins;
  }
  button{
    margin-left: 120px;
  }
.para{
    width: 260px;
    margin: -0px 10px 0px -10px;
    
} 
.more{
    margin-right: 15px;
}
   

}
</style>
    </body>
</html>
