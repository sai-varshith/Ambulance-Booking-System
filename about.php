 <!-- Header-->
 <!-- <header class="bg-dark py-5" id="main-header">
    <div class="container h-100 d-flex align-items-end justify-content-center w-100">
        <div class="text-center text-white w-100">
            <h1 class="display-4 fw-bolder mx-5">About Us</h1>
        </div>
    </div>
</header> -->
<style type="text/css">
    .section{
        margin-top: 120px;
    width: 100%;
    min-height: 110vh;
    max-height: 100%;
}
.content-section{
    float: left;
    width: 55%;
    margin-left: 300px;
}

.content-section .about-title{
    text-transform: uppercase;
    font-size: 28px;
    margin-left: 230px;
}
.content-section .title{
    text-transform: uppercase;
    font-size: 15px;
}

.content-section .content h3{
    margin-top: 20px;
    
    font-size: 21px;
}
.content-section .content p{
    margin-top: 10px;
    font-family: sans-serif;
    font-size: 18px;
    line-height: 1.5;
}

.content-section .social{
    margin: 40px 230px;
}
.content-section .social i{
    color:#a52a2a;
    font-size: 30px;
    padding:0px 10px;
}

.content-section .social i:hover{
    color:#3d3d3d;
}
@media screen and (max-width: 768px){
    .container{
    width: 80%;
    display: block;
    margin:auto;
    padding-top:50px;
    height: 100%;
}
.content-section{
    float:none;
    width:100%;
    display: block;
    margin:auto;
}

.content-section .about-title{
    text-align: center;
    font-size: 18px;
    margin-left: 20px;
}


.content-section .title{
    text-align: center;
    font-size: 14px;
}

.content-section .social{
    text-align: center;
}

}
</style>
<section>
<div class="section">
        <div class="container">
            <div class="content-section">
                <div class="about-title">
                </div>
                <div class="title">
                    <h1>India’s Fastest Emergency <span style="color: #c4493f;">Service</span></h1>
                </div>
                <div class="content">
                    <h3>We are not an option, we are a <span style="color: #2A8100;">choice</span></h3>
                    <p>We will be the #1 choice of 10 Million people because we’re the solution to India’s intra-city commuting problems. With assured safety, we also provide economically priced rides.</p>
                    <br>
                    
                    <h3>What makes us <span style="color: #AAAA00;">different?</span></h3>
                    <p>Our mobile ambulances can dodge the traffic during peak hours and get you to the nearest emergency stop in a jiffy! So when you think safety, think Antidote.</p>
                    <br>
                    <hr>
                    <h3>Working!</h3>
                    <p>The passenger can request to avail the cab booking for any minor emergency, the driver would be able to receive/accept the request, and finally, reach out to the Destination, at the earliest as possible.</p>
                    
                </div>
                <div class="social">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <!-- <div class="image-section">
                <img src="image/img one.jpg">
            </div> -->
        </div>
    </div>
    
</section>

<script>
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