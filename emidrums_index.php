<?php

    include("connection.php");

    $tourDatesQuery = "SELECT * FROM `touring` ORDER BY `dates` DESC LIMIT 10";
    $tourDates = mysqli_query($connection, $tourDatesQuery);
    $datesResult;
    $datesResultPanel;

    while($row1 = mysqli_fetch_array($tourDates, MYSQLI_ASSOC)) 
    {
        $datesResult .= "<tr>
        <td>".$row1['dates']."</td>
        <td>".$row1['places']."</td>
        <td>".$row1['time']."</td>
        <td>".$row1['price']."</td>
        <td>".$row1['info']."</td>       
        </tr>";
        
        $datesResultPanel .= "<tr>
        <td>".$row1['dates']."</td>
        <td>".$row1['places']."</td>
        </tr>";
    }

    $picLinksQuery = "SELECT `link` FROM `piclinks` ORDER by `uploaddate` DESC LIMIT 4";
    $picLinks = mysqli_query($connection, $picLinksQuery);
    $carouselItems;
    $altPic = "imgs/pic01.jpg";

    while($row2 = mysqli_fetch_array($picLinks, MYSQLI_ASSOC))
    {
        $carouselItems .= "<div class='item'>
        <img src='".$row2['link']."' alt='".$altPic."'>
        </div>";        
    }

    $youtubePlQuery = "SELECT `link` FROM `youtubepl` ORDER by `uploaddate` DESC LIMIT 1";
    $youtubePlresult = mysqli_query($connection, $youtubePlQuery);
    $youtubePlLinks = mysqli_fetch_array($youtubePlresult);
    $youtubePlActualLink = $youtubePlLinks["link"];

    $soundcloudPlQuery = "SELECT `link` FROM `soundcloudpl` ORDER by `uploaddate` DESC LIMIT 1";
    $soundcloudPlresult = mysqli_query($connection, $soundcloudPlQuery);
    $soundcloudPlLinks = mysqli_fetch_array($soundcloudPlresult);
    $soundcloudPlActualLink = $soundcloudPlLinks["link"];

?>


<!doctype html>
<html>
<head>
<title>Emidrums</title>
    
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For Bootstrap: The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Check if the following meta tag is needed or residual... -->
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        
    <!-- Jquery CDN from Google -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!-- local version of the JQuery lybrary
    <script type="text/javascript" src="insertFilePath"></script>
    -->
    
    <!-- Jquery UI CDN from Google -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

    <!-- Bootstrap JS CDN from getbootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!--Bootstrap JS local link
    <script src="js/bootstrap.min.js"></script>
    -->
    
    <!-- WayPoints library -->
    <script src="jquery.waypoints.min.js"></script>
    
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Bootstrap CSS local link
    <link href="css/bootstrap.min.css" rel="stylesheet">
-->
    <!-- CDN Optional Bootstrap CSS theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
     
    <!-- link to external CSS - if present
    <link rel="stylesheet" type="text/css" href="insertFilePath" />
    -->
    
<style type="text/css">
   
     h1{
        font-size: 3em;
    }
    
    a, a:visited {
        color: #0f90ef;
        text-decoration: none;
    }
    
    a:hover {
        color: #0476a0;
        text-decoration: none;
    }
    
    a:focus{
        outline: 0;
        text-decoration: none;
    }
    
    .margin-top{
        margin-top: 50px;
    }
    
    .margin-bot{
        margin-bottom: 25px;
    }
    
    .no-marginpadding{
        margin: 0;
        padding: 0;
    }    
    
    #top-img-cont{
        overflow-x: hidden;
        width: 100%;     
    }

    #toppic{
        margin: 50px 0 0 0;
        width: 100%;
        max-height: 700px;
    }
      
    #sitemotto{
        opacity: 0;
        font-family: Helvetica, sans-serif;
        text-shadow: 2px 2px 0px rgba(0,0,0,0.1); 
        color: #faca28;
        position: relative;
        top: -70px;
    }
    
    #datespan{
        position: absolute;
        z-index: 2;
        top: 125px;
        right: 5%;
        max-height: 70%;
        min-width: 30%;
        font-size: .8em;
        overflow: scroll;
        background: rgba(255,255,255,0.4);
        border: none;
        table-layout: inherit;
        word-wrap: break-word;
    }
    
    #datespan a {
        font-size: .7em;
    }
    
    #featuredVideo{
        position: absolute;
        bottom: 15%;
        left: 5%;       
    }
   
    .drumstck{
        height: 5px;
        width: auto;
        margin-left: 80px;
    }
 
    #myCarousel{
        max-width: 500px;
        max-height: 400px !important;
        padding: 0px;
        margin:0 auto;
        overflow: hidden;
        margin-top: 100px;
    }

    .table-responsive{
        overflow-x: auto;
    }
    
    .tab-pane{
        height: 250px;
        background-color: whitesmoke;
        overflow: scroll;
    }
    
    .nav-tabs > .active > a, .nav-tabs > .active > a:hover{
        outline:none;
    }
   
    .ul-about {
        list-style-type: none;
        margin: 20px 0 0 8px;
        padding: 0;
    }
    
    .ul-about li{
        font-family: Arial-Black, sans-serif;
        margin-top: 5px;
        
    }
    
    .inline-h{
        display: inline;
    }
    
    .standard-icon{
        height: 35px;
        width: auto;
        margin: 0;
    }
    
    .contact-box{ 
        padding: 25px;
        background-color: #e3ecf0; 
        border-radius: 10px;
    }
    
    #submit_email{
        width: 35%;
    }
       
    #footer{
        height: 100px;
        margin: 25px 0 0 0;        
    }
    
    .logo-images{
        height: 50px;
        width: auto;
        margin: 25px 10px;
    }

    @media (max-width: 480px) {
        
        #sitemotto{font-size: 0.7em; top: -25px;}     
        #datespan{display: none;}        
        #myCarousel{margin-top: 50px; max-height: 200px;}        
        #toppic{max-height: 200px; margin-top: 50px;}
	}

    @media (min-width: 481px) and (max-width: 767px) {
        
        body{font-size: 16px;}
    }

    @media (min-width: 768px) and (max-width: 979px) {
        
        body{font-size: 16px;}
	}

    @media (min-width: 980px) {
        
        body{font-size: 16px;}
	}
        
</style>    
    
</head>
    
<body data-spy="scroll" data-target=".navbar" data-offset="50">
       
    <nav class="navbar navbar-default navbar-fixed-top "> 
    
        <div class="container">
            
            <div class="navbar-header">                               
                <a href="" class="navbar-brand">Emi “dRuMs”</a>
                
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>                          
            </div>
                        
            <div class="collapse navbar-collapse" id="navbar">              
                <ul class="nav navbar-nav">
                    <li><a href="#aboutme">About me</a></li>
                    <li><a href="#dates">Dates</a></li>                                
                    <li><a href="#media">Media</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>                
            </div>
            
        </div>
        
    </nav>
    
    <div class="container no-marginpadding" id="top-img-cont">
        <div class="row">
            <div class="col-md-12">
                
                <div class="panel panel-default" id="datespan">
                    <h4 class="text-center">Dates <a href="#dates">more info</a></h4>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>When</th>
                                        <th>Where</th>
                                    </tr>
                                </thead>
                                <tbody><?php echo $datesResultPanel; ?></tbody>
                            </table>               
                        </div>    
                        </div>
                    </div>
                
                    <!-- Featured video -OR- tune
                    <div class="col-md-3" id="featuredVideo">   
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/196480677&amp;color=ff9900&amp;auto_play=true&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
                        </div>
                    </div>
                    -->
                
                <img class="img-responsive" src="imgs/EmiStudio.png" id="toppic"/>
                <h1 class="text-center no-marginpadding" id="sitemotto">&quot;El ritmo es la base de la vida....&quot;</h1>
                
            </div>    
        </div>        
    </div>
    
    <div class="container"> 
        
        <div class="row nudgedown" id="aboutme">
            
            <div class="col-md-6 col-xs-12 margin-top">
                
                <h2>About me<img class="drumstck" src="imgs/drumstick-001.png" /></h2>
                <hr />
                <p class="margin-bot"> La batteria è la mia passione da più di 20 anni ormai. Nel corso della mia carriera da musicista, ho conseguito diplomi e riconoscenze presso diversi istituti. Il mio tempo si divide  tra tour locali e internazionali con diverse band e produzione in studio.
Mi piacciono molto le negrrrrre e ho una mama che se truca spessisimo….! </p>

                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#cv">Resume</a></li>
                    <li><a data-toggle="tab" href="#collab">Collaborations</a></li>
                </ul>

                <div class="tab-content">
                    <div id="cv" class="tab-pane fade in active">
                        <ul class="ul-about">
                            <li>2014/now One Direction</li>
                            <li>2013/now Tinguaro Locura</li>
                            <li>2012/2013 - El quarto Latente Band</li>
                            <li>1998/2001 - The Snots</li>
                            <li>2014/now One Direction</li>
                            <li>2013/now Tinguaro Locura</li>
                            <li>2012/2013 - El quarto Latente Band</li>
                            <li>1998/2001 - The Snots</li>
                            <li>2014/now One Direction</li>
                            <li>2013/now Tinguaro Locura</li>
                            <li>2012/2013 - El quarto Latente Band</li>
                            <li>1998/2001 - The Snots</li>
                            <li>2014/now One Direction</li>
                            <li>2013/now Tinguaro Locura</li>
                            <li>2012/2013 - El quarto Latente Band</li>
                            <li>1998/2001 - The Snots</li>
                        </ul>
                    </div>
                    <div id="collab" class="tab-pane fade">
                        <ul class="ul-about">
                            <li>La casa del Placer - Lanzarote</li>
                            <li>La fabrica - La Isleta</li>
                            <li>Centro Cultural "La paja" - de Oliver el allemano</li>
                            <li>Ajuntamiento de La Oliva - Polo de artes "Masanobu Sato"</li>
                            <li>Comune di Genova - qualche cazzo di istituto sedicente culturale</li>
                        </ul>
                    </div>
                </div>
                
            </div>

        <div class="col-md-6 col-xs-12 margin-top">

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">               
                    <div class="item active">
                    <img src="imgs/pic01.jpg">
                    </div>
                    
                    <?php echo $carouselItems; ?>                    
                </div>

                <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">c</span>
                    </a>
                </div>
            
            </div>            
        </div>
        
        <div class="row nudgedown" id="dates">        
            <div class="col-md-12 margin-top">
                
                <h2>Dates<img class="drumstck" src="imgs/drumstick-001.png" /></h2>
                <hr />
                
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                          <tr>
                            <th>When</th>
                            <th>Where</th>
                            <th>Gates</th>
                            <th>Time</th>
                            <th>Info</th>
                          </tr>
                        </thead>
                        <tbody><?php echo $datesResult; ?></tbody>
                    </table>               
                </div>
                
            </div>                    
        </div>
        
        <div class="row" id="media">
            
            <div class="margin-top">
                <div class="col-md-5 col-xs-12">

                    <a class="nudgeleft" href="https://www.youtube.com/user/eMidRumOfficial" target="_blank"><h2 class="inline-h">Videos &nbsp;<img class="standard-icon" src="imgs/youtube_icon-64.png" /></h2></a>

                    <hr />

                    <div class="embed-responsive embed-responsive-4by3 margin-bot">
                        <?php echo $youtubePlActualLink; ?>
                    </div>               
                </div>

                <div class="col-md-2" id="blankspace-div"></div>

                <div class="col-md-5 col-xs-12">

                    <a class="nudgeleft" href="https://soundcloud.com/emidrum-diena" target="_blank"><h2 class="inline-h">Tunes &nbsp;<img class="standard-icon" src="imgs/sound-Icon_64.png" /></h2></a>

                    <hr />

                    <div class="embed-responsive embed-responsive-4by3">
                        <?php echo $soundcloudPlActualLink; ?>
                    </div>               
                </div>
            </div>
            
        </div>
            
        <div class="nudgedown">
            <div class="row" id="contact">  

                <div class="col-md-12 margin-top">    
                    <h2>Contact<img class="drumstck" src="imgs/drumstick-001.png" /></h2>
                    <hr />
                </div>
            </div>

            <div class="col-md-5 col-xs-12 margin-bot contact-box">
                <form method="post">

                    <h4 class="text-center">Send me a message: </h4>

                    <div id="result-email"></div>                  

                    <div class="form-group">
                        <label for="receiver">From:</label>
                        <input type="text" class="form-control" name="sender" id="sender" placeholder="email" />
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject:</label>
                        <input type="text" class="form-control" name="subject" id="subject" />
                    </div>

                    <div class="form-group">
                        <label for="msg">Your Message:</label>
                        <textarea class="form-control" name="msg" id="msg" placeholder="Type here..." rows="8"></textarea>
                    </div>

                    <br />
                    <br />

                    <div class="form-group">
                        <input class="form-control center-block btn btn-success btn-sm" name="submit_email" id="submit_email" type="button" value="SEND">
                    </div>

                </form>
            </div>

            <div class="col-md-1" id="blankspace-div"></div>

            <div class="col-md-6 col-xs-12 pull-right contact-box">

                <h4 class="text-center">Find me here: </h4>

                <div class="center-block text-center">
                    <a href="https://www.youtube.com/user/eMidRumOfficial">
                        <img src="imgs/Youtube_logo001.png" class="logo-images" />
                    </a>
                    <a href="https://soundcloud.com/emidrum-diena">
                        <img src="imgs/Soundcloud-logo001.png" class="logo-images" />
                    </a>
                    <a href="https://plus.google.com/107558780089339983191/posts">
                        <img src="imgs/Googleplus_logo01.png" class="logo-images"/>
                    </a>

                    <br />
                    <br />                        
                </div>  

                <h4 class="text-center"><span class="glyphicon glyphicon-phone"></span> 605082093</h4>

            </div>
        </div>
        
    </div>
  
<script type="text/javascript">
  
    function resizeContHeight() {         
        $(".container").css("min-height", $(window).height());            
    }

    //resizeContHeight();
    //$(window).resize(resizeContHeight());  

    $(window).scroll(function() {

        var scrollTop = $(window).scrollTop();
        var height = $(window).height();

        $("#toppic, #datespan, #featuredVideo").css({"opacity" : ((height - (scrollTop * 1.2)) / height)});
        
        $("#sitemotto").css({"opacity" : (scrollTop / height)});

    });
    
    $(".nav li a[href^='#']").on('click', function(event) {

        event.preventDefault();
        
        // store hash
        var hash = this.hash;

        // animate
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 400, function(){
        // when done, add hash to url
        // (default click behaviour)
        window.location.hash = hash;
        });

    });
    
    var localHeaderText;
    var $localHeader;
    var $bgToColor;
    var colorFrom;
    var colorTo;
    
    function onSectionTrigger(localHeaderText) {
        
        $localHeader = $("h2:contains(" + localHeaderText + ")");
        
        switch (localHeaderText){
            case "About me":
                $bgToColor = $localHeader.siblings(".tab-content").children(".tab-pane");
                colorFrom = "whitesmoke";
                colorTo = "#edfdfa";
                break;
            case "Dates":
                $bgToColor = $localHeader.siblings(".table-responsive");
                colorFrom = "white";
                colorTo = "beige";
                break;
            case "Contact":
                $bgToColor = $(".contact-box");
                colorFrom = "#e3ecf0";
                colorTo = "#b5d4ea";              
        }
        
        $localHeader.stop().animate({marginBottom: "-15px"});       
        $localHeader.children("img").stop().animate({marginLeft: "15px"});
        $localHeader.siblings("hr").stop().fadeTo(400, 0);
        $bgToColor.css("background-color", colorTo);
    }
    
    function onSectionRelease(localHeaderText) {
        
        if($localHeader){        
            $localHeader.stop().animate({marginBottom: 0});
            $localHeader.children("img").stop().animate({marginLeft: "80px"});
            $localHeader.siblings("hr").stop().fadeTo(400, 1);
            $bgToColor.css("background-color", colorFrom);
        }
    }
    
    /* Activate section animation via Scrollspy
    $("body").on('activate.bs.scrollspy', function () {
        
        currentRowId = $(this).find("li.active a").attr("href");
        
        localHeaderText = $(currentRowId).find("h2").text();
                      
        onSectionTrigger(localHeaderText);            
    });
    */
    
    //deploying 4 waypoints above and below section h2s.......
    $(".nudgedown").waypoint({
            handler: function(direction) {
            var el=$(this).get(0).element;
            onSectionRelease()
            }, 
            offset: 50
	});
    
    $(".nudgedown").waypoint({
            handler: function(direction) {
            var el=$(this).get(0).element;
            localHeaderText = $(el).find("h2").text();       
            onSectionTrigger(localHeaderText);
            }, 
            offset: 25
	});
    
    $(".nudgedown").waypoint({
            handler: function(direction) {
            var el=$(this).get(0).element;
            localHeaderText = $(el).find("h2").text();       
            onSectionTrigger(localHeaderText);
            }, 
            offset: -25
	});
    
    $(".nudgedown").waypoint({
            handler: function(direction) {
            var el=$(this).get(0).element;
            onSectionRelease()
            }, 
            offset: -50
	});    
  
    $(".nudgedown").mouseenter(function(){
        
        localHeaderText = $(this).find("h2").text();       
        onSectionTrigger(localHeaderText);   
    });
        
    $(".nudgedown").mouseleave(function(){
        onSectionRelease();         
    });        
        
    $(".nudgeleft").hover(function() { 
                
		$(this).find("img").stop().animate({marginLeft: "15px"});
        $(this).next("hr").stop().fadeTo(400, 0);
        $(this).nextAll().slice(1, 2).stop().animate({marginTop: "-15px"});       
     
        }, function(){

            $(this).find("img").stop().animate({marginLeft: 0});
            $(this).next("hr").stop().fadeTo(400, 1);
            $(this).nextAll().slice(1, 2).stop().animate({marginTop: 0});       
    });
    
    $(".logo-images").hover(function() {
		$(this).animate({paddingTop: "5px"});
        }, function() {
            $(this).animate({paddingTop: 0});
	});    

    $(function(){
        $('.carousel').carousel({
        interval: 4000
        });
    });
    
    $("#submit_email").click(function(){
                
        $("#result-email").hide();
        
        var sender = $("#sender").val();
        var msg = $("textarea#msg").val();
        var subject = $("#subject").val();
       
        $.post("contact_procedure.php", {sender:sender, msg:msg, subject:subject}, function(data){
            
            $("#result-email").html(data);
            $("#result-email").fadeIn();           
        });      
    });
            
    </script>
        
   
</body>
</html>


