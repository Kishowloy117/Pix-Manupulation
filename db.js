$('document').ready(function() {

    alert("sda");
    var mail = document.getElementById('mail');
    var check = document.getElementById('ch');

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

    firebase.initializeApp(firebaseConfig);

    check.addEventListener('click', e => {


        alert("sda");
        const auth = firebase.auth();

        const mailtxt = mail.value;
        // const login = auth.signInWithEmailAndPassword(mailtxt, '123456');
        firebase.auth().signInWithEmailAndPassword(mailtxt, '123456')
            .then((userCredential) => {
                // Signed in
                var user = userCredential.user;
                // ...
            })
            .catch((error) => {
                var errorCode = error.code;
                var errorMessage = error.message;
            });


    });

    firebase.auth().onAuthStateChanged((user) => {

        if (user) {
            console.log(user);
        }
    });

});