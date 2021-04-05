<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

  

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/camanjs/4.1.2/caman.full.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
  
        /* color inside of collups */
        body{
             margin: 0;
             padding: 0;
            /*background-image: linear-gradient(90deg,#7b4397,whitesmoke,#7b4397);*/
            background-color:	lavenderblush;/*#1e1e1e;/*background*/
        }
        #left-col {
			float: left;
			/*width: 25%;*/
            width: 100%;

			font-size: 0.9em;
		}
    .ui-accordion .ui-accordion-content {
    padding: 1em 2.2em;
    border-top: 0;
    overflow: auto;
    height: 50%;
    color: black;
    /*height:100px;*/
    background:lavenderblush;/*light purple*/
    }
        .ui-widget .ui-widget {
        font-size: 1em;
    /* color: black; */
        background-color: whitesmoke;
    }
        .image_preview {
            width: 100%;
            height: 100%;
        }
        .slider{
            background-color: red;
        }
        .ui-widget-content {
    border: 1px solid #aaaaaa;
    background: none;
    color: black;
}
.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default, .ui-button, html .ui-button.ui-state-disabled:hover, html .ui-button.ui-state-disabled:active {
    border: 1px solid #c5c5c5;
    background: #605;
    font-weight: normal;
    /*color: #454545;*/
   /* color:black;*/
    color:white;
}
.ui-slider-handle{

    /*border-radius: 50%;*/
    border-radius: 50%;
    background-color: crimson;
    color: crimson;

}
.ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default, .ui-button, html .ui-button.ui-state-disabled:hover, html .ui-button.ui-state-disabled:active {
    border: 1px solid #605;
    background: black;
    /*background: black;*/
    font-weight: normal;
    color: #c70000;
}
#create{

  text-align: center;
}
.navbar-expand-lg .navbar-collapse {
    
    background-color: lavenderblush;
}

</style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
   
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <!-- <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> -->
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link" href="#">Link</a> -->
      </li>
      <li class="nav-item">
      <input type="file" name="inpfile" , id="inpfile">
      <!-- <form class="form-inline my-2 my-lg-0"> -->
      <div class="form-inline my-2 my-lg-0">
      <input type="text" class="form-control mr-sm-2" type="search" placeholder="Search" id="urltoimg">
    <button id="url" class="btn btn-outline-success my-2 my-sm-0"> Search</button>

      </div>
    
    <!-- </form> -->
      </li>
    </ul>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#popupwindow" id="signin">SIGN IN</button>

    <div class="btn-group" id="log" style="display: none;">
  <button type="button" class="btn btn-danger dropdown dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    LOGED IN
  </button>
  <div class="dropdown-menu">
  <form action="imageview.php" method="POST" target="_blank">
  <input type="submit" class="btn btn-primary" onclick="handleSubmit()" value="Your Images"/> 
  </form>
    <!-- <a class="dropdown-item" href="#" >Log Out</a> -->
    <button class="dropdown-item" onclick="reset()">Log Out </button>
    
    <div class="dropdown-divider"></div>
   
  </div>
</div>
  
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>
    
<div class="container-fluid">
  <div class="row">
    <div class="col-3">
    


    <div id="left-col"> 
        <div id="accordion">
            <h3>Adjust</h3>
             <div id="ad">
                <img src="https://img.icons8.com/fluent/24/000000/brightness-settings.png"/>
                <label>Brightness <span class="v" id="v-brightness">0</span></label>
                <div class="slider " id="brightness" data-min="-100" data-max="100" data-val="0"></div>
                </br>
                <img src="https://img.icons8.com/ios-filled/24/000000/contrast.png"/>
                <label>Contrast <span class="v" id="v-contrast">0</span></label>
                <div class="slider" id="contrast" data-min="-100" data-max="100" data-val="0"></div>
                </br>
                <img src="https://img.icons8.com/ios-filled/24/000000/saturation.png"/>
                <label>Saturation <span class="v" id="v-saturation">0</span></label>
                <div class="slider" id="saturation" data-min="-100" data-max="100" data-val="0"></div>
                </br>
                <img src="https://img.icons8.com/ios-filled/24/000000/vibrance.png"/>
                <label>Vibrance <span class="v" id="v-vibrance">0</span></label>
                <div class="slider" id="vibrance" data-min="-100" data-max="100" data-val="0"></div>
                </br>
                <img src="https://img.icons8.com/ios-filled/24/000000/exposure-value.png"/>
                <label>Exposure <span class="v" id="v-exposure">0</span></label>
                <div class="slider" id="exposure" data-min="-100" data-max="100" data-val="0"></div>
                </br>
                <img src="https://img.icons8.com/emoji/24/000000/bright-button-emoji.png"/>
                <label>Clip <span class="v" id="v-clip">0</span></label>
                <div class="slider" id="clip" data-min="0" data-max="100" data-val="0"></div>
                </br>
                <img src="https://img.icons8.com/offices/24/000000/rgb-circle-3.png"/>
                <label>Hue <span class="v" id="v-hue">0</span></label>
                <div class="slider" id="hue" data-min="0" data-max="100" data-val="0"></div>
                </br>
                <img src="https://img.icons8.com/emoji/24/000000/brown-square-emoji.png"/>
                <label>Sepia <span class="v" id="v-sepia">0</span></label>
                <div class="slider" id="sepia" data-min="0" data-max="100" data-val="0"></div>
                </br>
                <img src="https://img.icons8.com/ios-filled/24/000000/cleanup-noise.png"/>
                <label>Noise <span class="v" id="v-noise">0</span></label>
                <div class="slider" id="noise" data-min="0" data-max="100" data-val="0"></div>
                </br>
                <img src="https://img.icons8.com/material-rounded/24/000000/triangle-stroked.png"/>
                <label>Sharpen <span class="v" id="v-sharpen">0</span></label>
                <div class="slider" id="sharpen" data-min="0" data-max="100" data-val="0"></div>
          
             </div> 
            <h3>Resize</h3>
            <div>
                <img src="https://img.icons8.com/plumpy/24/000000/width.png"/>
                <label>Width</label><input value="300" id="resize-w"/><br/><br/>
                <img src="https://img.icons8.com/plumpy/26/000000/height.png"/>
                <label>Height</label><input value="200" id="resize-h"/>
                <br/>
                <br/>
                <button class="btn btn-secondary" id="resize">Apply</button>
            </div>
            <h3>Crop</h3>
            <div>
                <label>X-Axis</label><input value="100" id="crop-x"/><br/><br/>
                <label>Y-Axis</label><input value="100" id="crop-y"/><br/><br/>
                <label>Width</label><input value="400" id="crop-w"/><br/><br/>
                <label>Height</label><input value="300" id="crop-h"/>
                <br/>
                <br/>
                <button class="btn btn-secondary" id="crop">Apply</button>
            </div>
            <h3>Rotate</h3>
            <div>
                <img src="https://img.icons8.com/android/24/000000/rotate-right.png"/>
                <button id="rotate-cw">Rotate + 90</button>
                <br/>
                <br/>
                <img src="https://img.icons8.com/android/24/000000/rotate-left.png"/>
                <button id="rotate-ccw">Rotate - 90</button>
                <br/>
                <br/>
                <img src="https://img.icons8.com/ios-filled/24/000000/rotate-180.png"/>
                <button id="rotate-180">Rotate + 180</button>
                
            </div>
            <h3>Presets</h3>
            <div>
                      
            <button class="btn btn-info" id="view">view</button>
                      <br>
                <button class="preset btn btn-warning" data-preset="clarity">Clarity</button> <br>
                <img src="" alt="" class="" id="clarity" style="width: 150px; height: 150px;" > 
                 <br/>
                <button class="preset btn btn-warning" data-preset="pinhole">Pinhole</button> <br/>
                <img src="" alt="" class="" id="pinhole" style="width: 150px; height: 150px;" > 
                <br>
                <button class="preset btn btn-warning" data-preset="love">Love</button> <br/>
                <img src="" alt="" class="" id="love" style="width: 150px; height: 150px;" > 
                <br>
                <button class="preset btn btn-warning" data-preset="jarques">Jarques</button> <br/>
                <img src="" alt="" class="" id="jarques" style="width: 150px; height: 150px;" > 
                <br>
                <button class="preset btn btn-warning" data-preset="orangePeel">Orange Peel</button> <br/>
                <img src="" alt="" class="" id="orange" style="width: 150px; height: 150px;" > 
                <br>
                <button class="preset btn btn-warning" data-preset="sinCity">Sin City</button> <br/>
                <img src="" alt="" class="" id="sincity" style="width: 150px; height: 150px;" > 
                <br>
                <button class="preset btn btn-warning" data-preset="grungy">Grungy</button> <br/>
                <img src="" alt="" class="" id="grungy" style="width: 150px; height: 150px;" > 
                <br>
                <button class="preset btn btn-warning" data-preset="oldBoot">Old Boot</button> <br/>
                <img src="" alt="" class="" id="oldboot" style="width: 150px; height: 150px;" > 
                <br>
                <button class="preset btn btn-warning" data-preset="lomo">Lomo</button> <br/>
                <img src="" alt="" class="" id="lomo" style="width: 150px; height: 150px;" > 
                <br>
                <button class="preset btn btn-warning" data-preset="vintage">Vintage</button> <br/>
                <img src="" alt="" class="" id="vintage" style="width: 150px; height: 150px;" > 
                <br>
                <button class="preset btn btn-warning" data-preset="crossProcess">Cross Process</button> <br/>
                <img src="" alt="" class="" id="cross" style="width: 150px; height: 150px;" > 
                <br>
                <button class="preset btn btn-warning" data-preset="concentrate">Concentrate</button> <br/>
                <img src="" alt="" class="" id="concentrate" style="width: 150px; height: 150px;" > 
                <br>
                <button class="preset btn btn-warning" data-preset="glowingSun">Glowing Sun</button> <br/>
                <img src="" alt="" class="" id="glowing" style="width: 150px; height: 150px;" > 
                <br>
                <button class="presetbtn btn-warning" data-preset="sunrise">Sunrise</button> <br/>
                <img src="" alt="" class="" id="sunrise" style="width: 150px; height: 150px;" > 
                <br>
                <button class="preset btn btn-warning" data-preset="nostalgia">Nostalgia</button><br/>
                <img src="" alt="" class="" id="nostalgia" style="width: 150px; height: 150px;" > 
                <br>
                <button class="preset btn btn-warning" data-preset="hemingway">Hemingway</button><br/>
                <img src="" alt="" class="" id="hemingway" style="width: 150px; height: 150px;" > 
                <br>
                <button class="preset btn btn-warning" data-preset="herMajesty">Her Majesty</button><br/>
                <img src="" alt="" class="" id="her" style="width: 150px; height: 150px;" > 
                <br>
                <button class="preset btn btn-warning" data-preset="hazyDays">Hazy Days</button>
                <br>
                <img src="" alt="" class="" id="hazy" style="width: 150px; height: 150px;" > 
                <br>
            </div> 
        </div>
        <div>
        <button class="btn btn-danger"id="reset">Reset</button>
            <button class="btn btn-success" id="save">Save</button>
        </div>
    </div>

    </div>
    <div class="col">
    <div class="pre" id="pre_img">

    <img src="" alt="" class="image_preview" id="imgz">


    </div>
    </div>
  </div>


  

  <button id="pop" data-toggle="modal" data-target="#popupwindow" style="display: none;">pop</button>

  <div class="modal fade" id="popupwindow">

    <div class="modal-dialog" id="modalwindow">

      <div class="modal-content">

           <div class="modal-header">


           <H3 class="modal-title" id="tit" style="text-align: center;"> LOG IN</H3>

           <button type="button" class="close" data-dismiss="modal" id="cross">&times;</button>

          
           
           </div>

           <div class="modal-body" id="mbody">
           
            
              <form action="" role="form">


                <div class="form-group">
                
                    <input type="email" class="form-control" placeholder="Email" id="mail">
                    
                
                </div>
                <div class="form-group">
                
                
                <input type="password" class="form-control" placeholder="pass" id="pass">
            
            </div>
              
              
              </form>
           
           </div>


           <div class="modal-footer" id="mfoot">



            <button class="btn btn-primary btn-block" id="login"> Log In</button>
            <br>
            <br>
            
            
           
           
           
          </div>
          <!-- <button id="google"  class="btn btn-primary" style="width: 50%;  margin-left: 25%;">google</button> -->
          <a class="btn btn-outline-dark" id="google1"  style="width: 50%;  margin-left: 25%;" role="button" style="text-transform:none">
      <img width="20px" style="margin-bottom:3px; margin-right:5px" alt="Google sign-in" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
      Login with Google
    </a>
          <br>
          <p  id="create"><a href="createacc.php" class="text-primary" target="_blank">Create Account</a></p>
    
      </div>
    
    </div>

  
  </div>

 
  
    
   
    <!-- <img src="m.jpg" alt="Image preview" class="image_preview"> -->

    

  


    




   
    
    <script src='https://cdn.firebase.com/js/client/2.2.1/firebase.js'></script>
    
    
    <script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-app.js"></script> 
  <script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-database.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-storage.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
  <script src="main.js"></script>
    <script src="firebase.js"></script>
    <script src="bootstrap.js"></script>
   
</body>

</html>



