<?php

    include("connection.php");

    $tourDatesQuery = "SELECT * FROM touring ORDER BY `dates` DESC LIMIT 10";
    $tourDates = mysqli_query($connection, $tourDatesQuery);

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

    
    #top-img-cont{
        margin: 0;
        padding: 0;
        width: 100%;     
    }

    #toppic{
        margin: 0;
        padding: 0;
        margin-top: 50px;
        width: 100%;
        max-height: 700px;
    }
    
   
    #sitemotto{
        color: red;
        position: relative;
        top: -100px;
    }
    
    h1{
        margin: 0;
        padding: 0;
        font-size: 3em;
    }
    
    .individualcontainer{
        
    }
    
    #myCarousel{
        max-width: 500px;
        max-height: 400px;
        padding: 0px;
        margin:0 auto;
        overflow: hidden;
        margin-top: 100px;
    }
    
    #myCarousel img{
    }
    
    .table-responsive{
        overflow-x: auto;
    }
    
    @media (max-width: 480px) {
        
        #sitemotto{
            font-size: 0.7em;
            top: -25px;}
        
        body{}
        
        #myCarousel{margin-top: 64px; max-height: 200px;}
        
        #toppic{max-height: 200px;}
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
    

<body>
       
    <nav class="navbar navbar-default navbar-fixed-top "> 
    
        <div class="container">
        
            <div class="navbar-header">
                
                <!-- The header contains the logo (BRAND)... -->
                
                <a href="" class="navbar-brand"> SOME LOGO HERE....</a>
                
                <!-- ...and the COLLAPSE button -->

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                            
            </div>
            
            <!-- Here are the collapsable objects --> 
            
            <div class="collapse navbar-collapse" id="navbar">
                
                <ul class="nav navbar-nav">
                    <li><a href="">Page1</a></li>
                    <li><a href="">Page2</a></li>                                
                    <li><a href="">Page3</a></li>
                </ul>
                
            </div>
            
        </div>
        
    </nav>
    
    <div class="container individualcontainer" id="top-img-cont">
        
            <div class="row">
                <div class="col-md-12">
                    <img class="img-responsive" src="imgs/EmiStudio.png" id="toppic"/>
                    <h1 class="text-center" id="sitemotto">El ritmo es la base de la vida....</h1>
                </div>
            </div>    
        
    </div>
    
    <div class="container individualcontainer">
    
        <div class="row">
            
            <div class="col-md-6 col-xs-12">
   
                <h2>About me</h2>
                <hr />
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce viverra hendrerit dui. Nulla sodales rutrum lacus a imperdiet. Etiam faucibus nunc eget nunc faucibus scelerisque. Donec lobortis rhoncus urna vel feugiat. Ut tellus odio, viverra eget vestibulum bibendum, placerat ut tortor. </p>
                
            <!--    
            <div class="row">         
                <div class="col-md-3 col-xs-3">

                    <h5>Music Curriculum</h5>
                    <ul>
                        <li>Tette</li>
                        <li>Cazzo</li>
                        <li>Culo</li>
                        <li>Figa</li>
                        <li>Merda</li>
                    </ul>
                
                </div>    
            
                <div class="col-md-3 col-xs-3 pull-right">

                    <h5>Collaborations</h5>
                    <ul>
                        <li>Tette</li>
                        <li>Cazzo</li>
                        <li>Culo</li>
                        <li>Figa</li>
                        <li>Merda</li>
                    </ul>

                </div>     
            </div>
            -->
                
                
            </div>
            
            <div class="col-md-6 col-xs-12">
            
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
                    <img src="imgs/pic01.jpg" alt="Chania">
                    </div>

                <div class="item">
                    <img src="imgs/pic02.jpg" alt="Chania">
                </div>

                <div class="item">
                    <img src="imgs/pic04.jpg" alt="Flower">
                </div>

                <div class="item">
                    <img src="imgs/pic03.jpg" alt="Flower">
                </div>
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
        
        <div class="row">
        
            <div class="col-md-12">
                
                <h2>Dates</h2>
                <hr />
                
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                          <tr>
                            <th>When</th>
                            <th>Where</th>
                            <th>Gates/Price</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php while($row = mysqli_fetch_array($tourDates, MYSQLI_ASSOC)) 
                                {
                                    echo "<tr>
                                        <td>".$row['dates']."</td>
                                        <td>".$row['places']."</td>
                                        <td>".$row['info']."</td>
                                        </tr>";
                                }?>
                        </tbody>
                    </table>               
                </div>
                
            </div>                    
        </div>
        
    
    </div>
    
    
   
    <!-- link to external javascript file(s) - if present
    <script type="text/javascript" scr="pathToFile"></script>
    -->
    
    <script type="text/javascript">
        
        function resizeContHeight {         
            $(".individualcontainer").css("min-height", $(window).height());            
        }
        
        resizeContHeight();
           
        $(window).resize(resizeContHeight());  
        
        $(window).scroll(function () {
            
            var scrollTop = $(window).scrollTop();
            var height = $(window).height();

            $("#top-img-cont #toppic").css({
                "opacity" : ((height - scrollTop) / height)
            }); 
            
        });
        
        $(function(){
            $('.carousel').carousel({
            interval: 1000
            });
        });
            
    </script>
   
</body>
</html>


