var firebaseConfig = {
    apiKey: "AIzaSyBbTUA8avNbbkNHWPjtWP3Y3a_lACjL5jQ",
    authDomain: "imagemanu104117.firebaseapp.com",
    databaseURL: "https://imagemanu104117-default-rtdb.firebaseio.com",
    projectId: "imagemanu104117",
    storageBucket: "imagemanu104117.appspot.com",
    messagingSenderId: "451764498831",
    appId: "1:451764498831:web:d13f1a2c36818f6071dbfa",
    measurementId: "G-TDXB7FG316"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
//firebase.analytics();
firebase.auth();
const auth = firebase.auth();

var namev, roll, sec, gen;

function Ready() {
    namev = document.getElementById('namebox').value;
    roll = document.getElementById('roll').value;
    sec = document.getElementById('sec').value;
    gen = document.getElementById('genbox').value;

}
document.getElementById('insert').onclick = function() {
    Ready();
    firebase.database().ref('student/' + namev).set({
        nameofstu: namev,
        rollno: roll,
        section: sec,
        gender: gen

    });

}

document.getElementById('come').onclick = function() {
    Ready();
    firebase.database().ref('student/' + roll).on('value', function(snapshot) {
        // document.getElementById('namebox').value = snapshot.val().nameofstu;
        // document.getElementById('roll').value = snapshot.val().rollno;
        // document.getElementById('sec').value = snapshot.val().section;
        // document.getElementById('genbox').value = snapshot.val().gender;
        snapshot.forEach(element => {
            var x = element.val();
            console.log(x);

        });

    });

}

document.getElementById('google').onclick = function() {

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

function signIn() {

    var email1 = document.getElementById("mail");
    var password1 = document.getElementById("Password1");


    // const promise = auth.signInWithEmailAndPassword(email1.value, password1.value);
    // console.log(promise.user);
    // promise.catch(e => alert(e.message));
    firebase.auth().signInWithEmailAndPassword(email1.value, password1.value)
        .then((userCredential) => {
            // Signed in
            var user = userCredential.user;
            console.log(user.emailVerified);
            // ...
        })
        .catch((error) => {
            var errorCode = error.code;
            var errorMessage = error.message;
            console.log(errorCode);
            console.log(errorMessage);
            alert(errorMessage);
        });





}


var imgname, imgUrl;
var files = [];
var reader;


document.getElementById("select").onclick = function(e) {

    var input = document.createElement('input');
    input.type = 'file';
    input.click();

    input.onchange = e => {

        files = e.target.files;
        reader = new FileReader();
        reader.onload = function() {
            document.getElementById("myimg").src = reader.result;
        }

        reader.readAsDataURL(files[0]);

    }
    input.click();


}

document.getElementById("upload").onclick = function(e) {

    console.log(files[0]);

    var uploadTask = firebase.storage().ref('Images/' + Date() + '.png').put(files[0]);

    uploadTask.on('state_changed', function(snapshot) {

            var pro = (snapshot.bytesTranferred / snapshot.totalBytes) * 100;
            console.log(pro);
        },

        function(erro) {

            alert(erro);
        },
        function() {

            uploadTask.snapshot.ref.getDownloadURL().then(function(url) {
                imgUrl = url;
                console.log(imgUrl);

                firebase.database().ref('student/' + "harekrishno1/" + "Name").push(imgUrl);




                alert("successful");

            });



        }
    );


}


function uploadImage(img, mailid) {
    var x = Date();
    console.log(x);
    var uploadTask = firebase.storage().ref('Images/' + x + '.png').putString(img, 'base64', { contentType: 'image / jpg' });

    uploadTask.on('state_changed', function(snapshot) {

            var pro = (snapshot.bytesTranferred / snapshot.totalBytes) * 100;
            console.log(pro);
        },

        function(erro) {

            alert(erro);
        },
        function() {

            uploadTask.snapshot.ref.getDownloadURL().then(function(url) {
                imgUrl = url;
                console.log(imgUrl);

                firebase.database().ref('contacts/' + mailid + "/" + "link").push(imgUrl);






            });



        }
    );
}


function login(email, password) {
    var user;
    firebase.auth().signInWithEmailAndPassword(email, password)
        .then((userCredential) => {
            // Signed in
            user = userCredential.user;
            if (user.emailVerified) {
                console.log("verfied");
                change(user.email);
                return 1;
                console.log("yoo");

            } else {
                alert("Verify Your Mail");
                return 2;
                change();
            }

            // ...
        })
        .catch((error) => {
            var errorCode = error.code;
            var errorMessage = error.message;
            alert("No Use Found.");
            return 0;
        });

}

function getimage(mailid) {
    firebase.database().ref('contacts/' + mail + "/link").on('value', function(snapshot) {
        // document.getElementById('namebox').value = snapshot.val().nameofstu;
        // document.getElementById('roll').value = snapshot.val().rollno;
        // document.getElementById('sec').value = snapshot.val().section;
        // document.getElementById('genbox').value = snapshot.val().gender;
        // snapshot.forEach(element => {
        //     var x = element.val();
        //     console.log(x);

        // });
        return snapshot;

    });
}