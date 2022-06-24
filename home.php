 <!-- Header-->
 <style type="text/css">
     #main-header  h3{
        margin-top: 260px;
     }
     .btn:hover{
        border: 1px solid green;
     }
.theme-text {
  color:orange;
}
.container-fluid h3{
    font-size: 2.5rem;
}
.card-img-top {
  height: 250px;
  width: 100%;
}
.card {
  z-index: 1;
  overflow: hidden;
  transition: 0.5s;
}
.card:hover {
  color: white;
}
.card::before {
  content: "";
  position: absolute;
  left: -100%;
  top: 0%;
  background: #474af0;
  width: 100%;
  height: 100%;
  transition: 0.5s;
  z-index: -1;
}
.card:hover::before {
  left: 0%;
  color: white;
}
.container-fluid {
    margin-top: 0px;
  background-position: center;
  background-size: cover;
}
.discount{
    
     background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(https://images.pexels.com/photos/1402787/pexels-photo-1402787.jpeg);
        min-height: 70vh;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        margin-bottom: -100px;
}
.discount .container .row .col-sm-6{
    margin-top: 160px;
}
.discount .container .row .col-sm-6 p{
    color: #ffffff;
    font-size: 1.2rem;
    font-weight: 700;
}
.discount .container .row .col-sm-6 h2{
    font-size: 3rem;
    font-weight: 400;
    color: orange;
}
.discount .container .row .col-sm-6 button{
    margin-top: 20px;
    width: 190px;
    height: 50px;
    background: none;
    border: 1px solid #ffffff;

}
.discount .container .row .col-sm-6 button:hover{
    border: 1px solid orange;
    background: orange;
}
.discount .container .row .col-sm-6 button a{
    text-decoration: none;
    color: #ffffff;
    font-size: 1.2rem;
}
.section-container
{
--bs-gutter-x: 1.5rem;
--bs-gutter-y: 0;
display: flex;
flex-wrap: wrap;
}
.section-container .columns
{
flex:0 0 auto;
width:35%;
margin-left: 170px;

}
.section-container .columns.image
{
background-position:center;
background-repeat:no-repeat;
background-size:cover;
height: 320px;
}
.section-container .columns.content .content-container
{
padding:40px 50px;
}
.section-container .columns.content .content-container h5
{
font-weight:700;
font-size:25px;
margin-bottom:20px;
}
.section-container .columns.content .content-container p
{
font-weight:400;
font-size:16px;
margin-bottom:20px;
margin-bottom:15px;
text-align:justify;
}
@media screen and (max-width:767px)
{
.section-container
{
flex-flow:row wrap;
}
.section-container .columns.image{
display:block;
order:1;
width:100%;
height:250px;
}
.section-container .columns.content
{
display:block;
order:2;
width:100%;
}
.section-container .columns.content .content-container
{
padding:20px 35px;
}
.section-container .columns.content .content-container h5
{
margin-bottom:5px;
}
}
 </style>
   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  
 <header class="bg-dark py-5" id="main-header">
    <div class="container h-100 d-flex align-items-center justify-content-center w-100">
        <div class="text-center text-white w-100">
            <h3 class="display-4 mx-5" style="font-weight:600;">India's first Taxi Ambulance Service</h3>
         <button type="button" class="btn btn-outline-success" style="width: 300px;height:50px;font-size: 18px;margin-top: 30px;color: #ffffff;"><a href="./?p=cab_available" style="text-decoration: none;color: #ffffff;">Get Your Ambulance Now</a></button>

            <div class="col-auto mt-4">
                <!-- <a class="btn btn-warning btn-lg rounded-0" href="./?p=booking">Book Now</a> -->
            </div>
        </div>
    </div>
</header>
<!-- Section-->
<section class="py-5">
   
</section>
<section>
    <div class="container" style="text-align: center;margin-top: -50px;">
                <h2 style="font-size: 2.5rem;font-weight: 700;color:#a52a2a;">Who we are.</h2>

        
    </div>
     <div class="section-container" style="margin-top:50px" >
         <div class="columns image" style="background-image:url('images/1.1.png')" data-aos="fade-right" data-aos-duration="3000">
            &nbsp;
         </div>
         <div class="columns content" data-aos="fade-left" data-aos-duration="3000">
            <div class="content-container">
               <h5>India’s First Ambulance taxi service</h5>
               <p>
                 Antidote is India’s First Ambulance Service App. Antidote saves lives in case of any Emergency, which is to be like; First Aid or helping nearby cabs to reach out the minor but urgent emergencies, whereas Ambulances could be specifically used for the moderate or extreme levels of emergency situations.
               </p>
           
            </div>
         </div>
      </div>
      <div class="section-container">
         <div class="columns content" data-aos="fade-right" data-aos-duration="3000">
            <div class="content-container">
               <h5>Know Us Better</h5>
               <p>
                  The passenger can request to avail the cab booking for any minor emergency, the driver would be able to receive/accept the request, and finally, reach out to the Destination, at the earliest as possible. 
               </p>
             
            </div>
         </div>
         <div class="columns image" style="background-image:url('images/2.1.png')" data-aos="fade-left" data-aos-duration="3000">
            &nbsp;
         </div>
      </div>
      <div class="section-container">
         <div class="columns image" style="background-image:url('images/3.1.png')" data-aos="fade-right" data-aos-duration="3000">
            &nbsp;
         </div>
         <div class="columns content">
            <div class="content-container" data-aos="fade-left" data-aos-duration="3000">
               <h5>Our Impact</h5>
               <p>
                 Our presence in the country will change the concept of Ambulances and make last-mile connectivity affordable and life-saving for all.
               </p>
              
            </div>
         </div>
      </div>
</section>
<section>
        <div class="container-fluid">
        <h3 class="text-center mt-5 display-3 fw-bold" >Our <span class="theme-text" style="color:#a52a2a;">Services</span></h3>
        <div class="row mb-5" style="margin-top: 30px;">
            <div class="col-12 col-sm-6 col-md-3 m-auto">
                <div class="card shadow" data-aos="fade-left" data-aos-duration="3000">
                    <img src="images/1.png" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">Doorstep Pick-Up</h3>
                        <hr class="mx-auto w-75">
                        <p>
                            We will pick you up from where you are in whatsoever condition and drop you at the nearest hospital.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 m-auto">
                <!-- card starts here -->
                <div class="card shadow" data-aos="fade-up" data-aos-duration="3000">
                    <img src="images/2.png" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">Affordability</h3>
                        <hr class="mx-auto w-75">
                        <p>
                            No more latent prices and shocking reactions after seeing the final ride cost. We’re here with the most affordable rides for all.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 m-auto">
                <div class="card shadow" data-aos="fade-right" data-aos-duration="3000">
                    <img src="images/3.png" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">Quick Ride</h3>
                        <hr class="mx-auto w-75">
                        <p>
                            Trendsetters of smart commute are it traffic or rush hours.We ensure quick pick-ups and a fast ride to the nearest hospital.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </section>
    <section class="discount" data-aos="fade-up" data-aos-duration="3000">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                           <h2>Reserved Now & Get <span style="font-weight: 500;font-size: 3.5rem;">50% Off.</span>
                            </h2>
                            <button><a href="./?p=cab_available">Book Now</a></button>
                        </div>
                        
                    </div>
        
            
        </div>
    </section>
    <footer>
        
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
<script>
    $(function(){
        $('#search').on('input',function(){
            var _search = $(this).val().toLowerCase().trim()
            $('#service_list .item').each(function(){
                var _text = $(this).text().toLowerCase().trim()
                    _text = _text.replace(/\s+/g,' ')
                    console.log(_text)
                if((_text).includes(_search) == true){
                    $(this).toggle(true)
                }else{
                    $(this).toggle(false)
                }
            })
            if( $('#service_list .item:visible').length > 0){
                $('#noResult').hide('slow')
            }else{
                $('#noResult').show('slow')
            }
        })
        $('#service_list .item').hover(function(){
            $(this).find('.callout').addClass('shadow')
        })
        $('#service_list .view_service').click(function(){
            uni_modal("Service Details","view_service.php?id="+$(this).attr('data-id'),'mid-large')
        })
        $('#send_request').click(function(){
            uni_modal("Fill the Service Request Form","send_request.php",'large')
        })

    })
    $(document).scroll(function() { 
        $('#topNavBar').removeClass('bg-purple navbar-light navbar-dark bg-gradient-purple text-light')
        if($(window).scrollTop() === 0) {
           $('#topNavBar').addClass('navbar-dark bg-purple text-light')
        }else{
           $('#topNavBar').addClass('navbar-dark bg-gradient-purple ')
        }
    });
    $(function(){
        $(document).trigger('scroll')
    })
</script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>