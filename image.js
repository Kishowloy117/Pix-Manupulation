window.addEventListener('load', () => {

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





    // Via Query parameters - GET
    /* const params = (new URL(document.location)).searchParams;
    const name = params.get('name');
    const surname = params.get('surname'); */

    // Via local Storage
    /* const name = localStorage.getItem('NAME');
    const surname = localStorage.getItem('SURNAME'); */

    const name = sessionStorage.getItem('NAME');
    // const surname = sessionStorage.getItem('SURNAME');

    firebase.database().ref('contacts/' + name + '/link').on('value', function(snapshot) {
        // document.getElementById('namebox').value = snapshot.val().nameofstu;
        // document.getElementById('roll').value = snapshot.val().rollno;
        // document.getElementById('sec').value = snapshot.val().section;
        // document.getElementById('genbox').value = snapshot.val().gender;
        snapshot.forEach(element => {
            var x = element.val();
            console.log(x);

            var image = new Image(500, 350);
            image.src = x;
            var link = document.createElement('a');
            var linkText = document.createTextNode("Download");
            link.appendChild(linkText);
            link.href = x;
            link.title = "download";
            link.target = "_blank";
            link.className = "btn btn-primary mt-n1";

            var br = document.createElement('br');
            document.body.appendChild(image);
            document.body.appendChild(link);












        });



    });



})