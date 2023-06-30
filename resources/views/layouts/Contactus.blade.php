<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @yield('title')
    </title>
</head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script> 
<link id="pagestyle" href="admin/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}">
<script src="{{asset('frontend/js/jquery-3.6.1.min.js')}}" ></script>
<script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}" ></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<title>
       AboutUs
</title>
<style>
    h1 {
    margin-bottom: 40px;
}

label {
    color: #333;
}

.btn-send {
    font-weight: 300;
    text-transform: uppercase;
    letter-spacing: 0.2em;
    width: 80%;
    margin-left: 3px;
    }
.help-block.with-errors {
    color: #ff5050;
    margin-top: 5px;

}

.card{
	margin-left: 10px;
	margin-right: 10px;
}
</style>
</head>
<body>
    @include('layouts.inc.frontnav')

    <h3>WHERE DO WE RECIDE?</h3>
    <div id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d1740.7881470154653!2d72.83588911870926!3d19.135237225084293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7bbf10ed1ec81%3A0xd4b2ba28143dc263!2sArtesan%C3%ACa%20-%20The%20Clay%20Studio%2C%20Shop%20no.%206B%2C%20Ground%20Floor%2C%20Ghanshyam%20Industrial%20Estate%2C%20Veera%20Desai%20Rd%2C%20near%20SUPREME%20CHAMBERS%2C%20Andheri%20West%2C%20Mumbai%2C%20Maharashtra%20400053!3m2!1d19.1354008!2d72.8357508!5e0!3m2!1sen!2sin!4v1663521378576!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="container">
        <div class=" text-center mt-5 ">
            <h1>Feel free to Contact Us</h1>
        </div>

    
    <div class="row ">
      <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-white">
            <div class="card-body bg-white">
       
            <div class = "container">
                
                <form id="contact-form" role="form">
                <div class="controls">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_name">Firstname *</label>
                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_lastname">Lastname *</label>
                            <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_email">Email *</label>
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_need">Please specify your need *</label>
                            <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
                                <option value="" selected disabled>--Select Your Issue--</option>
                                <option >Request Invoice for order</option>
                                <option >Request order status</option>
                                <option >Haven't received cashback yet</option>
                                <option >Other</option>
                            </select>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_message">Message *</label>
                            <textarea id="form_message" name="message" class="form-control" placeholder="Write your message here." rows="4" required="required" data-error="Please, leave us a message."></textarea
                                >
                            </div>

                        </div>


                    <div class="col-md-12">
                        
                        <input type="submit" class="btn btn-success btn-send  pt-2 btn-block" value="Send Message" >
                    
                </div>
          
                </div>


        </div>
         </form>
        </div>
            </div>


    </div>
        <!-- /.8 -->

    </div>
    <!-- /.row-->

</div>
</div>

    @include('layouts.inc.footer')





    
<script>
    var availableTags = [];
    $.ajax({
            method: "GET",
            url: "/product-list",
            success: function(response) {
                // console.log(response);
                startAutoComplete(response);
            } 
    
        });

        function startAutoComplete(availableTags) 
        {
            $( "#search_product" ).autocomplete({
                    source: availableTags
             });
        }
   
 
  </script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @yield('scripts')
    @if(session('status')){
        <script>
            swal("{{ session('status') }}");
        </script>
    }
    @endif
</body>
</html>