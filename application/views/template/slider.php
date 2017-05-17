
<!--slider-->
<div class="home-slider clearfix">
    <div class="flexslider">
        <ul class="slides">
            <!--slide start-->
            <li class="flex-active-slide">
                <img src="<?=ASSET_URL."images/temp-images/slide-three.jpg"?>" alt="Medical Services That You Can Trust" draggable="false">
                <div class="content-wrapper clearfix">
                    <div class="container">
                        <div class="slide-content clearfix">
                            <h1>Konsultasi Kesehatan <span>Rumah Rawatan Pak Haji</span></h1>
                            <p>hadir sebagai solusi bagi ummat dengan herba-herba yang alamiah dan sesuai tuntunan Ilahi.</p>
                            <a class="slider-button" href="doctors-three-columns.html">Janji Perawatan</a>
                        </div>
                    </div>
                </div>
            </li>
            <!--slide end-->

            <!--slide start-->
            <li>
                <img src="<?=ASSET_URL."images/temp-images/slide-three.jpg"?>" alt="We Care for You" draggable="false">
                <div class="content-wrapper clearfix">
                    <div class="container">
                        <div class="slide-content clearfix ">
                            <h1>We <span>Care</span> for <span>You</span></h1>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            <a class="slider-button" href="doctors-three-columns.html">Read More</a>
                        </div>
                    </div>
                </div>
            </li>
            <!--slide end-->
        </ul>
        <!--directional nav-->
        <ul class="flex-direction-nav">
            <li><a class="flex-prev" href="#">Previous</a></li>
            <li><a class="flex-next" href="#">Next</a></li></ul>
    </div>
    <!--appointment form-->
    <div class="appointment clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6  ">
                    <span class="btn make-appoint">Janji Perawatan <i class="fa fa-caret-down"></i></span>
                </div>
            </div>
            <div class="clearfix">
                <div class="appointment-form clearfix animated">
                    <form class="clearfix" id="appointment_form_one" action="<?=base_url()?>" method="post" >
                        <div class="row">
                            <div class="col-md-3 col-sm-6 common">
                                <input type="text" name="name" id="app-name" class="required" placeholder="Nama" />
                            </div>
                            <div class="col-md-3 col-sm-6 common">
                                <input type="text" name="number" id="app-number" class="required number" placeholder="No. Handphone"/>
                            </div>
                            <div class="col-md-3 col-sm-6 common">
                                <input type="email" name="email" id="app-email" class="required email" placeholder="Email"/>
                            </div>
                            <div class="col-md-3 col-sm-6 common">
                                <input type="text" name="date" id="datepicker" class="required" placeholder="Rencana Konsultasi/Perawatan"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-11 common">
                                <input type="text" name="message" id="app-message" class="required" placeholder="Kondisi Pasien" />
                            </div>
                            <div class="col-sm-1 common">
                                <input type="submit" name="Submit" class="btn form-submit-btn" value="KIRIM"/>
                            </div>
                        </div>

                        <img src="<?=ASSET_URL."images/white-loader.gif"?>" class="ajax-loader" id="appointment-loader" alt="Loading...">
                        <div id="response-container"></div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--appointment form end-->
</div>