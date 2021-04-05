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
        body {
            padding: 0;
            margin: 0;
            background:#605;
            /* background-image:url("createbg.png"); */
        }

        #container {
             /*background-image: url("https://images.pexels.com/photos/1363876/pexels-photo-1363876.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");*/
            width: 100%;
            height: 650px
        }

        #formcontainer {
            width: 450px;
            height: auto;
            background-color: white;
            position: relative;
            top: 50px;
            left: 35%;
            box-shadow: 0 0 20px black;
            border-radius: 8px
        }

        #img1 {
            width: 450px;
            height: 150px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px
        }

        #cross {
            width: 20px;
            height: 20px;
            position: relative;
            top: -145px;
            left: 94%
        }

        #text {
            font-size: 25px;
            font-family: 'Roboto Slab', serif;
            text-align: center;
            position: relative;
            top: -20px
        }

        #email,
        #password {
            width: 350px;
            height: 1px;
            position: relative;
            top: -30px;
            left: 12%;
            border-radius: 5px;
            border-width: 1px;
            border-color: gray;
            padding: 20px;
            font-size: 20px;
            outline: none;
            margin-bottom: 15px
        }

        #email:hover,
        #password:hover {
            background-color: gainsboro
        }

        #email:focus,
        #password:focus {
            box-shadow: 0 0 10px green;
            border: none
        }

        #check {
            position: relative;
            top: 12px;
            left: -66%
        }

        #text1 {
            font-size: 17px;
            font-family: 'Roboto Slab', serif;
            position: relative;
            top: -36px;
            left: 17%;
            color: gray
        }

        #forget {
            position: relative;
            top: -77px;
            left: 67%;
            color: darkblue;
            font-size: 14px;
            font-family: 'Roboto Slab', serif
        }

        #login {
            width: 350px;
            height: 40px;
            position: relative;
            left: 12%;
            top: -60px;
            cursor: pointer;
            font-size: 22px;
            font-family: 'Roboto Slab', serif;
            border-radius: 5px;
            border: none;
            background-color: rgb(0, 128, 0);
            color: white
        }

        #login:hover {
            background-color: rgb(0, 128, 0, 0.7)
        }

        #hrline1 {
            line-height: 1em;
            position: relative;
            top: -40px;
            left: -30%;
            width: 38%
        }

        #text2 {
            font-size: 16px;
            font-family: 'Roboto Slab', serif;
            position: relative;
            top: -70px;
            left: 40%;
            color: gray
        }

        #hrline2 {
            position: relative;
            top: -95px;
            left: 31%;
            width: 37%
        }

        #facebook1,
        #google1 {
            width: 15px;
            height: 15px;
            position: relative;
            left: -10%;
            top: 1px
        }

        #facebook,
        #google {
            width: 140px;
            height: 40px;
            position: relative;
            top: -80px;
            left: 12%;
            border-radius: 5px;
            border-width: 1px;
            border-color: black;
            font-size: 17px;
            background-color: white
        }

        #facebook:hover {
            background-color: #2c27bc;
            color: white;
            transition: 0.5s
        }

        #google {
            position: relative;
            left: 26.5%
        }

        #google:hover {
            background-color: #ce6c46;
            color: white;
            transition: 0.5s
        }

        #text3 {
            position: relative;
            top: -66px;
            left: 32%;
            font-size: 15px;
            font-family: 'Roboto Slab', serif;
            color: gray
        }

        #signup {
            position: relative;
            top: -106px;
            left: 55%;
            color: black;
            font-size: 15px;
            font-family: 'Roboto Slab', serif
        }

        @media only screen and (max-width:830px) {
            #formcontainer {
                position: relative;
                left: 20%
            }
        }

        @media only screen and (max-width:620px) {
            #formcontainer {
                position: relative;
                left: 10%
            }
        }

        @media only screen and (max-width:530px) {
            #formcontainer {
                position: relative;
                left: 4%
            }
        }
    </style>
</head>

<body>

    <body>
        <!-- <form method="POST" action=""> -->

        <div id="container">
            <div id="formcontainer"> <img id="img1" src="android-user-icon-7544.png"> <a href="#"><img id="cross" src="https://image.flaticon.com/icons/svg/148/148766.svg"></a>
                <p id="text">Login to your Account</p> <input id="email" name="emailSignup" type="email" type="tel" placeholder="Email"> <input name="passSignup" id="password" type="password" placeholder="Password"><input id="password" type="password" placeholder="Confirm Password"> <input id="check" type="checkbox">
                <p id="text1">Remember Me</p> <a id="forget" href="#" style="color:white">Forget Password ?</a> <button id="login" type="submit" name="signup">SIGN UP</button>
                <!-- <hr id="hrline1"> -->
                <!-- <p id="text2">or login with</p>
            <hr id="hrline2"> <button id="facebook"><img id="facebook1" src="https://image.flaticon.com/icons/svg/174/174848.svg">Facebook</button> <button id="google"><img id="google1" src="https://image.flaticon.com/icons/svg/281/281764.svg">Google</button>
            <p id="text3">Not a Member?</p> <a id="signup" href="#">Signup Now</a> -->
            </div>
        </div>

        <!-- </form> -->

                <h3 id="show" style="text-align: center; color:tomato"></h3>


    </body>


    <script>
        //     $(document).ready(function(){
        // document.getElementById("cross").onclick=function(){
        // document.getElementById("formcontainer").style.display="none";
        // };




        // });

        document.getElementById("login").onclick = function() {

            var mail= document.getElementById("email").value;
            var pass1= document.getElementById("password").value;

            $.ajax({
                url: 'create.php',

              //  Type: "POST",

                data: {
                    email: mail,
                    pass: pass1,
                },
                success: function(data) {

                    //console.log(data);
                    // if(data="successs"){
                    // document.getElementById("show").innerHTML= "kam hoise";
                    // }
                    // else{
                    //     document.getElementById("show").innerHTML= "kam hoy nai";
                    // }
                    document.getElementById("show").innerHTML= data;



                    //  alert(data);
                }
            })

        };
    </script>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>