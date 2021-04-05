const url = document.getElementById("url");
const inpfile = document.getElementById("inpfile");
const preview_con = document.getElementById("pre_img");
const preview_image = preview_con.querySelector(".image_preview");
//var demo = document.getElementById("demo");
var camancla = document.getElementById("clarity");
var camanpin = document.getElementById("pinhole");
var camanlove = document.getElementById("love");
var camanjar = document.getElementById("jarques");
var camanorange = document.getElementById("orange");
var camancity = document.getElementById("sincity");
var camangrungy = document.getElementById("grungy");
var camanoldboot = document.getElementById("oldboot");
var camanlomo = document.getElementById("lomo");
var camanvin = document.getElementById("vintage");
var camancross = document.getElementById("cross");
var camancon = document.getElementById("concentrate");
var camanglow = document.getElementById("glowing");
var camansun = document.getElementById("sunrise");
var camannos = document.getElementById("nostalgia");
var camanhemi = document.getElementById("hemingway");
var camanher = document.getElementById("her");
var camanhazy = document.getElementById("hazy");

var ctx;
var cx = 0,
    cy = 0,
    ch = 0,
    cw = 0;


var islogedin = false;
var res;
var mail;

//ctx.fillRect(50, 40, 100, 30);


$('#myModal').on('shown.bs.modal', function() {
    $('#myInput').trigger('focus')
})

function startCropper() {
    var $canvas = $('#imgz');
    var caman = Caman('#imgz');


    var options = {
        crop: function(e) {

            cx = e.x;
            cy = e.y;
            cw = e.width;
            ch = e.height;

            console.log(e);

        },
        zoomable: false,
        scalable: false,
        background: false,

    };


    $canvas.cropper(options);

    // Caman.Event.listen(caman, 'processComplete', function () {

    //   $canvas.cropper('destroy').cropper(options);
    // });

}




inpfile.addEventListener("change", function() {

    const file = this.files[0];

    if (file) {
        const reader = new FileReader();


        reader.addEventListener("load", function() {


            console.log(this);
            preview_image.setAttribute("src", this.result);


            // demo.setAttribute("src", this.result);

            console.log("started");
            camancla.setAttribute("src", this.result);
            camanpin.setAttribute("src", this.result);
            camanlove.setAttribute("src", this.result);
            camanjar.setAttribute("src", this.result);
            camanorange.setAttribute("src", this.result);
            camancity.setAttribute("src", this.result);
            camangrungy.setAttribute("src", this.result);
            camanoldboot.setAttribute("src", this.result);
            camanlomo.setAttribute("src", this.result);
            camanvin.setAttribute("src", this.result);
            camancross.setAttribute("src", this.result);
            camancon.setAttribute("src", this.result);
            camanglow.setAttribute("src", this.result);
            camansun.setAttribute("src", this.result);
            camannos.setAttribute("src", this.result);
            camanhemi.setAttribute("src", this.result);
            camanher.setAttribute("src", this.result);
            camanhazy.setAttribute("src", this.result);






        });

        reader.readAsDataURL(file);





    }



});


url.addEventListener("click", function() {
    var dataString = document.getElementById("urltoimg").value;
    $.ajax({
        type: 'POST',
        url: 'urltoimg.php',
        data: { dataString1: dataString },
        success: function(response) {
            preview_image.setAttribute("src", response);
            camancla.setAttribute("src", response);
            camanpin.setAttribute("src", response);
            camanlove.setAttribute("src", response);
            camanjar.setAttribute("src", response);
            camanorange.setAttribute("src", response);
            camancity.setAttribute("src", response);
            camangrungy.setAttribute("src", response);
            camanoldboot.setAttribute("src", response);
            camanlomo.setAttribute("src", response);
            camanvin.setAttribute("src", response);
            camancross.setAttribute("src", response);
            camancon.setAttribute("src", response);
            camanglow.setAttribute("src", response);
            camansun.setAttribute("src", response);
            camannos.setAttribute("src", response);
            camanhemi.setAttribute("src", response);
            camanher.setAttribute("src", response);
            camanhazy.setAttribute("src", response);
        }
    });

});








$(function() {







    $('#accordion').accordion({
        collapsible: true
    });

    $('button').button();

    var caman = Caman('#imgz');
    var camancla = Caman('#clarity');
    var camanpin = Caman('#pinhole');
    var camanlove = Caman('#love');
    var camanjar = Caman('#jarques');
    var camanorange = Caman('#orange');
    var camancity = Caman('#sincity');
    var camangrungy = Caman('#grungy');
    var camanoldboot = Caman('#oldboot');
    var camanlomo = Caman('#lomo');
    var camanvin = Caman('#vintage');
    var camancross = Caman('#cross');
    var camancon = Caman('#concentrate');
    var camanglow = Caman('#glowing');
    var camansun = Caman('#sunrise');
    var camannos = Caman('#nostalgia');
    var camanhemi = Caman('#hemingway');
    var camanher = Caman('#her');
    var camanhazy = Caman('#hazy');









    var rotation = 0;

    function applyFilters() {
        caman.revert(false);

        $('.slider').each(function() {
            var op = $(this).attr('id');
            var value = $(this).data('val');

            if (value === 0) {
                return;
            }

            caman[op](value);
        });
    }


    function resetFilters() {
        $('.slider').each(function() {
            var op = $(this).attr('id');

            $('#' + op).slider('option', 'value', $(this).attr('data-val'));
        });
    }

    $('.slider').each(function() {
        var op = $(this).attr('id');

        $('#' + op).slider({
            min: $(this).data('min'),
            max: $(this).data('max'),
            val: $(this).data('val'),
            change: function(e, ui) {
                $('#v-' + op).html(ui.value);
                $(this).data('val', ui.value);

                if (e.originalEvent === undefined) {
                    return;
                }

                applyFilters();
                caman.render();
            }
        });
    });

    $("#view").click(function() {
        console.log("started");


        camancla.revert(true);
        camancla["clarity"]();
        camancla.render();



        camanpin.revert(true);
        camanpin["pinhole"]();
        camanpin.render();



        camanlove.revert(true);
        camanlove["love"]();
        camanlove.render();



        camanjar.revert(true);
        camanjar["jarques"]();
        camanjar.render();



        camanorange.revert(true);
        camanorange["orangePeel"]();
        camanorange.render();



        camancity.revert(true);
        camancity["sinCity"]();
        camancity.render();



        camangrungy.revert(true);
        camangrungy["grungy"]();
        camangrungy.render();



        camanoldboot.revert(true);
        camanoldboot["oldBoot"]();
        camanoldboot.render();



        camanlomo.revert(true);
        camanlomo["lomo"]();
        camanlomo.render();



        camanvin.revert(true);
        camanvin["vintage"]();
        camanvin.render();



        camancross.revert(true);
        camancross["crossProcess"]();
        camancross.render();



        camancon.revert(true);
        camancon["concentrate"]();
        camancon.render();



        camanglow.revert(true);
        camanglow["glowingSun"]();
        camanglow.render();



        camansun.revert(true);
        camansun["sunrise"]();
        camansun.render();


        camannos.revert(true);
        camannos["nostalgia"]();
        camannos.render();



        camanhemi.revert(true);
        camanhemi["hemingway"]();
        camanhemi.render();



        camanher.revert(true);
        camanher["herMajesty"]();
        camanher.render();



        camanhazy.revert(true);
        camanhazy["hazyDays"]();
        camanhazy.render();



        console.log("finished");

        // caman1.revert(true);
        // caman1["lomo"]();
        // caman1.render();

    });

    $('#rotate-cw').click(function() {
        rotation += 90;
        caman.rotate(90);
        applyFilters();
        caman.render();
    });

    $('#rotate-ccw').click(function() {
        rotation -= 90;
        caman.rotate(-90);
        applyFilters();
        caman.render();
    });

    $('#rotate-180').click(function() {
        rotation += 180;
        caman.rotate(180);
        applyFilters();
        caman.render();
    });



    $('#resize').click(function() {
        caman.resize({
            width: $('#resize-w').val(),
            height: $('#resize-h').val()
        });
        applyFilters();
        caman.render();
    });

    $('#crop').click(function() {
        caman.crop(
            $('#crop-w').val(),
            $('#crop-h').val(),
            $('#crop-x').val(),
            $('#crop-y').val()
            // cw,
            // ch,
            // cx,
            // cy

        );
        applyFilters();
        caman.render();
    });

    $('.preset').click(function() {

        resetFilters();
        var preset = $(this).data('preset');
        caman.revert(true);
        caman[preset]();
        caman.render();
    });

    $('#reset').click(function() {
        caman.reset();
        caman.render();
        resetFilters();
    });

    $('#save').click(function() {

        // var btn = document.createElement("BUTTON");
        // btn.setAttribute(data - target, "#popupwindow");
        // btn.click();
        if (islogedin == false) {
            var btn = $('#pop');
            btn.click();
        }
        if (islogedin == true) {


            Caman("#imgz", function() {

                let a = document.createElement('a');
                a.href = this.toBase64();
                a.download = Date() + '_image.png';

                var image = new Image();
                image.src = 'data:image/' + a.href;
                let file = a.href.split(',')[1];
                // storeRef(file, 'base64', { contentType: 'image/png' });
                mail = mail.split('@')[0];
                uploadImage(file, mail);

                // document.body.appendChild(image);
                a.click();
            });

        }



    });

    var cr = $("#c");
    cr.click(function() {


    });

    function crop(x, y, h, w) {
        caman.crop(
            // $('#crop-w').val(),
            // $('#crop-h').val(),
            // $('#crop-x').val(),
            // $('#crop-y').val()

            cw,
            ch,
            cx,
            cy
        );
        console.log("hare ");
        applyFilters();
        caman.render();

    }

});


var btn = $("#urlbtn");
btn.click(function() {
    var x = $("#urltoimg").val();
    console.log(x);
    preview_image.setAttribute("src", x);




});
var cro = $("#");
cro.click(function() {

    console.log("clicked");
    startCropper();


});

var cr = $("#c");
cr.click(function() {


});
$('#pop').click(function() {
    $('#loginModal').modal('show');
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    });

})

$('#login').click(function() {

    res = login(document.getElementById("mail").value, document.getElementById("pass").value);


})

function change(mailid) {


    document.getElementById("tit").innerHTML = "You are Loged in ";
    mail = mailid;
    console.log(mail);
    islogedin = true;
    document.getElementById("log").style.display = "block";
    document.getElementById("signin").style.display = "none";
    document.getElementById("mfoot").style.display = "none";
    document.getElementById("mbody").style.display = "none";



}

function reset() {
    mail = null;
    islogedin = false;
    document.getElementById("log").style.display = "none";
    document.getElementById("signin").style.display = "block";
    document.getElementById("mfoot").style.display = "block";
    document.getElementById("mbody").style.display = "block";
    document.getElementById("tit").innerHTML = "Log In ";

}
$('.dropdown').click(function() {

    $('.dropdown-menu').toggleClass('show');

});

function image() {

    mail = mail.split('@')[0];
    var res = getimage(mail);
    return res;

}

function handleSubmit() {
    // const name = document.getElementById('name').value;
    //  const surname = document.getElementById('surname').value;

    // to set into local storage
    /* localStorage.setItem("NAME", name);
    localStorage.setItem("SURNAME", surname); */
    mail = mail.split('@')[0];
    sessionStorage.setItem("NAME", mail);


    return;
}


document.getElementById('google1').onclick = function() {


    var provider = new firebase.auth.GoogleAuthProvider();

    firebase.auth()
        .signInWithPopup(provider)
        .then((result) => {
            /** @type {firebase.auth.OAuthCredential} */
            var credential = result.credential;

            // This gives you a Google Access Token. You can use it to access the Google API.
            var token = credential.accessToken;
            // The signed-in user info.
            var user = result.user;
            console.log(user.email);
            change(user.email);
            // ...
        }).catch((error) => {
            // Handle Errors here.
            var errorCode = error.code;
            var errorMessage = error.message;
            // The email of the user's account used.
            var email = error.email;
            // The firebase.auth.AuthCredential type that was used.
            var credential = error.credential;
            // ...
        });





}