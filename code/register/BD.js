// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
const firebaseConfig = {
  apiKey: "AIzaSyBABA8m6ux6eNSW5pPngzRwaqdyLLHvjgU",
  authDomain: "fake-store-api-c5b43.firebaseapp.com",
  databaseURL: "https://fake-store-api-c5b43-default-rtdb.firebaseio.com",
  projectId: "fake-store-api-c5b43",
  storageBucket: "fake-store-api-c5b43.appspot.com",
  messagingSenderId: "642678607819",
  appId: "1:642678607819:web:f85eeb3b81b5f7e228304e"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);


function lenghtUsersGet() {
    var user_ref = app.ref('lenghtUser')
    user_ref.on('value', function (snapshot) {
        var data = snapshot.val();

        let val = data.valor;
        console.log(val);
        sessionStorage.setItem('chave', val);
    })
}

function getPost() {
    contGet()
    let val = parseInt(sessionStorage.getItem('chave'));
    var strHtml = "";
    var postagens = document.getElementById('postagens');
    let valStr = "";
    var user_ref;
    var data;
    //Ver se problema é declarar dentro do for
    
    //alert('oi')

    for (let i = 1; i <= val; i++) {
        valStr = i.toString();
        user_ref = app.ref('postagens/' + valStr)
        user_ref.on('value', function (snapshot) {
            data = snapshot.val()

            strHtml += `<div class="expandable-box">
            <h2 style="text-align: center;">Publicação ${i}</h2>
            <hr>
            <img src="${data.img}">
            <p id="desc">${data.text}</p>
            </div>`

        })
    }

    postagens.innerHTML = strHtml;
}