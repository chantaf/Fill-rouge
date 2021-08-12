
<!------ Include the above in your HEAD tag ---------->

<!-- <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'> -->
<style>
.aboutus-section {
    padding: 116px 0;

}
.aboutus-title1 {
    text-align: center;
    margin-top: -6%;
}
.aboutus-title {
    font-size: 30px;
    letter-spacing: 0;
    /* line-height: 32px;
    margin: 0 0 39px;
    padding: 0 0 11px;
    position: relative; */
    text-transform: uppercase;
    color: #000;
    /* text-align: center; */
}
/* .aboutus-title::after {
    background: #fdb801 none repeat scroll 0 0;
    bottom: 0;
    content: "";
    height: 2px;
    left: 0;
    position: absolute;
    width: 54px;
} */
.aboutus-text {
    color: #606060;
    font-size: 20px;
    /* text-align: center; */
    
    /* line-height: 22px;
    margin: 0 0 35px; */
}

.aboutus{
    margin-top: 12%;
}

a:hover, a:active {
    color: #ffb901;
    text-decoration: none;
    outline: 0;
}
/* .aboutus-more {
    border: 1px solid #fdb801;
    border-radius: 20px;
    color: #fdb801;
    display: inline-block;
    font-size: 14px;
    /* font-weight: 700;
    letter-spacing: 0; 
    padding: 7px 20px ;
    text-transform: uppercase;
    margin-left: 38%;
} */

.image{
    /* width: 100%; */
    height: 25em;
    /* margin-left: -25%; */
    margin-top: 5%;
    border-radius: 10px;
    
}
#divtext{
    height: 23em;
}
</style>

<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<div class="aboutus-section">
        <div class="container">
            <div class="row">
            <h1 class="aboutus-title1">ABOUT Us</h1>
               <div class="col-md-6 col-sm-12  col-xs-12 text-center ">
                    <img src="<?= LIEN ?>view/img-slide/m1.png" class="image img-thumbnail" alt="...">
                </div>
                <div id="divtext" class="col-md-6 col-sm-12 col-xs-12 text-center img-thumbnail mt-5">
                    <div class="aboutus">
                        <h2 class="aboutus-title">Nom site</h2>
                        <p class="aboutus-text">Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in.</p>
                        <p class="aboutus-text">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem</p>
                        <!-- <a class="aboutus-more" href="">read more</a> -->
                    </div>
                </div>
                <!-- <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="aboutus-banner">
                        <img src="http://themeinnovation.com/demo2/html/build-up/img/home1/about1.jpg" alt="">
                    </div>
                </div> -->
                
            </div>
        </div>
    </div>

    <script src="http://localhost/fill-rouge/view/js/panier.js"></script>