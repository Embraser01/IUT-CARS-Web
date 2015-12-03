<html>
    <head>

        <title>Groupe 6 |   Special Week number 2</title>
        <link rel="shortcut icon" href="./img/iconAPK.png">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/slider_video.css">
        <meta charset="UTF-8"/>

    </head>
    <body>

        <!-- jQuery is required by Materialize to function -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type = "text/javascript" src = "js/prefixfree.min.js" ></script>
        <script  type="text/javascript" src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script  type="text/javascript" src="js/slider_movie.js"></script>
        <script  type="text/javascript" src="js/fixed_bar.js"></script>
        <script  type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript">
        $(window).load(function() {
            
            
            var delay=0; //1 seconds

            setTimeout(function(){
             //your code to be executed after 1 seconds
             $(".loader").fadeOut("veryslow");
            }, delay); 
    	
        })
        </script>
        
        <script>
            function sendMail() {
                var link = "mailto:axellebot@gmail.com"
                         + "&subject=" + escape("Semaine Spé")
                         + "&body=" + escape(document.getElementById('²textMessage').value)
                ;
            
            
            window.location.href = link;
            }
        </script>
        

        <div class="loader"></div>
        
        <div class="intro deep-orange lighten-2 z-depth-2">
            <h1 class="grey-text text-lighten-5">Cars</h1>
            <h5 class="grey lighten-4 grey-text text-darken-1">Groupe 6 |   Special Week number 2</h5>
        </div>
        <div class="row " >
            <div id="nav-container" class="col s12">
                <ul class="tabs">
                    <li class="tab col s3"><a class="active" href="#intro">Introduction</a></li>
                    <li class="tab col s3"><a  href="#Analyse">Analyse</a></li>
                    <li class="tab col s3"><a href="#Conception">Conception</a></li>
                    <li class="tab col s3"><a href="#Gallery" >Gallery</a></li>
                    <li class="tab col s3"><a href="#More" >More</a></li>
                </ul>
            </div>
            <div id="main-container">
                <div id="intro" class="col s12">
                    <div class="container about">
                        <h5>about us</h5>
                        <h6>let us introduce our self</h6>
                        <hr>
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <h6>Presentation</h6>
                                <p>All of us are students in computing.</p>
                                <p>We dedicated ourselves to a project which consists in building a car in Lego and in being able to control it at a distance.
                                For it a RasberryPi module was given to us, we have to manage the communication with Rasberry as well as the control of this one, finally a camera must be implanted on the car to place us.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Analyse" class="col s12">
                    <div class="container about">
                        <h5>Mind Map</h5>
                        <h6>The conclusion of our brainstorming</h6>
                        <hr>
    
                        <div class="col s12 m12 l12">
                            <img class="materialboxed" src="./img/MindMap.png" width=100%>
                        </div>
                    </div>
                </div>
    
                <div id="Conception" class="col s12">
	                <div class="container about">
		  				
						<div class="row">
							<div class="col s12 m12 l12">
							    <div class="col s12 m6 l6">
							        <h5>RaspberryPi</h5>
						            <h6>Explication</h6>
						            <hr>
						            <p>
						            To control our Lego car, we have to use one RasberryPi brick , so we have to install beforehand all it’s needed to be able to control  our car in good conditions. Thanks to this brick, the control of the car became easily.
                                    For our project, we need to implement a GPS by connecting it  to the RasberryPi.
						            </p>
							    </div>
			                	 <div class="col s12 m6 l6">
							      <h5>Link</h5>
							      <h6>Sources</h6>
							      <hr>
							      <ul class="collapsible">
							        <li class="active">
							          <div class="collapsible-header"><i class="mdi-action-android"></i>Android</div>
							          <div class="collapsible-body">
							            <ul>
							                <li>
							                    <a href="https://drive.google.com/file/d/0B3EAu_Li-vlFUVNWRWZqaGp3VzQ/view?usp=sharing" target="_blank">
        							                <p>
            							                <img src="img/iconAPK.png" style=" margin-right: 10px;width:40px;"/>
            							                APK here !
                                                    </p> 
        						                </a>
    						                </li>
    						                <li>
    						                    <a href="https://github.com/Embraser01/CarsAndroidClient" target="_blank">
        							                <p>
            							                <img src="img/icon_github.png" style=" margin-right: 10px;width:40px;"/>
            							                 Client Source
                                                    </p> 
        						                </a>
    						                </li>
							            </ul>
							          </div>
							        </li>
							        <li>
							          <div class="collapsible-header"><i class="mdi-hardware-computer"></i>Computer</div>
							          <div class="collapsible-body">
							              <ul>
							                <li>
							                    <a href="https://drive.google.com/file/d/0B3EAu_Li-vlFR2FPWlBtYlZ0XzA/view?usp=sharing" target="_blank">
        							                <p>
            							                <img src="img/icon_java.png" style=" margin-right: 10px;width:40px;"/>
            							                Client App
                                                    </p> 
        						                </a>
    						                </li>
    						                <li>
    						                    <a href="https://github.com/Embraser01/CarsClient" target="_blank">
        							                <p>
            							                <img src="img/icon_github.png" style=" margin-right: 10px;width:40px;"/>
            							                Client Source
                                                    </p> 
        						                </a>
    						                </li>
    						                <li>
    						                    <a href="https://github.com/Embraser01/CarsServeur" target="_blank">
        							                <p>
            							                <img src="img/icon_github.png" style=" margin-right: 10px;width:40px;"/>
            							                 Server Source
                                                    </p> 
        						                </a>
    						                </li>
    						                
							            </ul>
							          </div>
							        </li>
							      </ul>
							    </div>
							    
							</div>
					    </div>
				    </div>
				    <div class="container about">
		  				<h5>Net Beans</h5>
						<h6>Explication</h6>
						<hr>
						<p>
						   To communicate between with RasberryPi and mobile phone, we have to work on NetBeans and have to configure a server and a basic interface to test the smooth running of brig.
							All components are to manage under NetBeans, for example the engine which makes turn the wheel or the camera which allows to view stream what sees the car Lego.
						</p>
						<div class="row">
							<div class="col s12 m12 l12">		
			                </div>
					    </div>
				    </div>
				    <div class="container about">
		  				<h5>Android Studio</h5>
						<h6>Explication</h6>
						<hr>
						<p>
						    For the interaction part with the raspberry we decided to build an interface of mobile application, so we were forced to use a software as Android Studio. With this application we have to represent icons representative of the directions : up, down, right, left.
                            We obtained the following interface.
                            
                            We looked to add a map into the application but it will be useless because we had a lake of time to add the GPS on the "RaspBerry".
						</p>
						<div class="row">
							<div class="col s12 m12 l12">		
			                </div>
					    </div>
				    </div>
                </div>
                <div id="Gallery" class="col s12">
                    <div class="container gallerie">
                        <h5>Photos</h5>
                        <h6>Photos during the week</h6>
                        <hr>
                        <div class="row">
                            <div class="col s12 m12 l12 gallerie-holder">
                            
                                <?php
                		
                        		    $tab_files;
             
                                    $dir_iterator = new RecursiveDirectoryIterator('/yourr/path/to/gallery/');
                                    $iterator = new RecursiveIteratorIterator($dir_iterator);
                                    
                                    //$files_reg = new RegexIterator($iterator, '#^(?:[A-Z]:)?(?:/(?!\.Trash)[^/]+)+/[^/]+\.(?:mp4)$#Di');
                                    $files_reg = $iterator;
                                    
                                    
                                    foreach ($files_reg as $file) {
                                        $tab_files[] = array(preg_replace('#^\/([^/]*\/)*#', '', $file), preg_replace('#^\/[^/]*\/[^/]*\/[^/]*#', '', $file));
                                    }
                                    //sort ($tab_files);
                                    
                                    
                                    $i = 0;
                                    
                                    foreach ($files_reg as $file) {
                                        if($tab_files[$i][0] != "." && $tab_files[$i][0] != "..")
                                            echo "<img class=\"materialboxed\" src=\"./gallery/".$tab_files[$i][0]."\"/>";
                                        $i++;
                                    }
                                ?>
                                
                        </div>
                    </div>
                    </div>
                    <div class="container gallerie">
                        <h5>Videos</h5>
                        <h6>Videos during the week</h6>
                        <hr>
                        <div class="row">
                            <div class="col s12 m12 l12 gallerie-holder">
                               <iframe width="75%" height="300px" src="https://www.youtube.com/embed/Xw4upbC4094" frameborder="0" allowfullscreen></iframe>
                               </br>
                               </br>
                               <iframe width="75%" height="300px" src="https://www.youtube.com/embed/qan7fE5sZck" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="More" class="col s12">
                    <div class="container about">
                        <h5>Profiles</h5>
                        <h6>let us introduce our self</h6>
                        <hr>
                        <div class="row">
                            
                            <div class="col s12 m12 l12">
                      
                                <div class="col s12 m6 l6">
                                    <div class="card blue-grey darken-1">
                                        <div class="card-content white-text">
                                            <img src="https://lh3.googleusercontent.com/-cqLARS8Yr8Y/AAAAAAAAAAI/AAAAAAAARwc/p3MxSbJ7Df8/s120-c/photo.jpg" width="64" height="64">
                                            <p>Axel LE BOT</p>
                                        </div>
                                        <div class="card-action">
                                            <a href="https://www.facebook.com/lebot.axel" target="_blank">Facebook</a>
                                            <a href='https://plus.google.com/u/0/110265577570633663131/' target="_blank">Google+</a>
                                        </div>
                                    </div>
                                    <div class="card blue-grey darken-1">
                                        <div class="card-content white-text">
                                            <img src="https://lh3.googleusercontent.com/-pgLOYk0QbmA/AAAAAAAAAAI/AAAAAAAAAbY/TrmVpUS0JhM/s120-c/photo.jpg" width="64" height="64">
                                            <p>Marc-antoine FERNANDES</p>
                                        </div>
                                        <div class="card-action">
                                            <a href="https://www.facebook.com/marcantoine.fernandes" target="_blank">Facebook</a>
                                            <a href='https://plus.google.com/u/0/+MarcAntoineFernandes/' target="_blank">Google+</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m6 l6">
                                    <div class="card blue-grey darken-1">
                                        <div class="card-content white-text">
                                            <img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xpa1/v/t1.0-1/c0.0.200.200/p200x200/10402567_433862983418198_8539787758871944556_n.jpg?oh=c5924012d2ad1b90585c6d5eb789640a&oe=55EF021E&__gda__=1441982688_047cc0c865feb8b8e9f4e88cfd847ee1" width="64" height="64">
                                            <p>Dominique PHAN</p>
                                        </div>
                                        <div class="card-action">
                                            <a href="https://www.facebook.com/dominique.phan.9" target="_blank">Facebook</a>
                                            <a href='https://plus.google.com/u/0/103962721975113900250/' target="_blank">Google+</a>
                                        </div>
                                    </div>
                                    <div class="card blue-grey darken-1">
                                        <div class="card-content white-text">
                                            <img src="https://lh3.googleusercontent.com/-X73v5AEMP9Q/VX1qH6MXD-I/AAAAAAAAAAA/otkGTqXi_5k/s180-c-k-no/photo.jpg" width="64" height="64">
                                            <p>Maxime DUCOROY</p>
                                        </div>
                                        <div class="card-action">
                                            <a href="https://www.facebook.com/maxime.ducoroy" target="_blank">Facebook</a>
                                            <a href='https://plus.google.com/u/0/117002800974643586729/' target="_blank">Google+</a>
                                        </div>
                                    </div>
                                </div>
    
                            </div>
    
                        </div>
                    </div>
                    <div class="container contact">
                        <h5>contact</h5>
                        <h6>Keep in touch with us</h6>
                        <hr>
                        <div class="row">
                            <div class="col s12 m6 l6">
                                <div class="row">
                                    <form class="col s12">
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="first_name" type="text" class="validate">
                                                <label for="first_name">First Name</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="last_name" type="text" class="validate">
                                                <label for="last_name">Name</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="email" type="email" class="validate">
                                                <label for="email">E-Mail</label>
                                            </div>
                                        </div>
                                        <textarea id="textMessage"class="materialize-textarea" placeholder="Your message" required></textarea>
                                        <button class="btn waves-effect waves-light" type="submit" name="action" onclick="sendMail(); return false">Send
                                            <i class="mdi-content-send right"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="col s12 m6 l6 contact-holder">
                                <h6 class="mdi-action-home">Adress</h6>
                                <p>71 Rue Peter Fink, 01000 Bourg-en-Bresse</p>
                                <h6 class="mdi-hardware-phone-android">Phone Number</h6></h6>
                                <p>+33 6 47 79 63 40</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="footer-copyright">
                <div class="container">
                    <img src="http://www.google.fr/url?source=imglanding&ct=img&q=http://upload.wikimedia.org/wikipedia/fr/3/33/IUT_A.png&sa=X&ei=EgeEVZ2-LIr1UsTEgYAB&ved=0CAkQ8wc&usg=AFQjCNFxFtDP7fal7v6T1vNhHK1pgwKH1Q" width="200"/>
                    2015 © Copyright
                    <a class="grey-text text-lighten-4 right" href="#!">Link</a>
                </div>
            </div>
        </footer>
    </body>
</html>