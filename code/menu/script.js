$.ajax({
    url: 'https://fakestoreapi.com/products/1'
})
    .done(response => {
        $('#img1').prop('src', response.image);
        document.getElementById('title1').innerHTML = response.title;
        document.getElementById('pre1').innerHTML = "R$" + response.price;
        document.getElementById('desc1').innerHTML = response.description;
    })

$.ajax({
    url: 'https://fakestoreapi.com/products/2'
})
    .done(response => {
        $('#img2').prop('src', response.image);
        document.getElementById('title2').innerHTML = response.title;
        document.getElementById('pre2').innerHTML = "R$" + response.price;
        document.getElementById('desc2').innerHTML = response.description;
    })

$.ajax({
    url: 'https://fakestoreapi.com/products/3'
})
    .done(response => {
        $('#img3').prop('src', response.image);
        document.getElementById('title3').innerHTML = response.title;
        document.getElementById('pre3').innerHTML = "R$" + response.price;
        document.getElementById('desc3').innerHTML = response.description;
    })

$.ajax({
    url: 'https://fakestoreapi.com/products/4'
})
    .done(response => {
        $('#img4').prop('src', response.image);
        document.getElementById('title4').innerHTML = response.title;
        document.getElementById('pre4').innerHTML = "R$" + response.price;
        document.getElementById('desc4').innerHTML = response.description;
    })

$.ajax({
    url: 'https://fakestoreapi.com/products/20'
})
    .done(response => {
        $('#img5').prop('src', response.image);
        document.getElementById('title5').innerHTML = response.title;
        document.getElementById('pre5').innerHTML = "R$" + response.price;
        document.getElementById('desc5').innerHTML = response.description;
    })

$.ajax({
    url: 'https://fakestoreapi.com/products/18'
})
    .done(response => {
        $('#img6').prop('src', response.image);
        document.getElementById('title6').innerHTML = response.title;
        document.getElementById('pre6').innerHTML = "R$" + response.price;
        document.getElementById('desc6').innerHTML = response.description;
    })

//Barra lateral

$.ajax({
    url: 'https://fakestoreapi.com/products/7'
})
    .done(response => {
        $('#img7').prop('src', response.image);
        document.getElementById('title7').innerHTML = response.title;
        document.getElementById('pre7').innerHTML = "R$" + response.price;
        document.getElementById('ava1').innerHTML = response.rating.rate;
    })

$.ajax({
    url: 'https://fakestoreapi.com/products/8'
})
    .done(response => {
        $('#img8').prop('src', response.image);
        document.getElementById('title8').innerHTML = response.title;
        document.getElementById('pre8').innerHTML = "R$" + response.price;
        document.getElementById('ava2').innerHTML = response.rating.rate;
    })

$.ajax({
    url: 'https://fakestoreapi.com/products/9'
})
    .done(response => {
        $('#img9').prop('src', response.image);
        document.getElementById('title9').innerHTML = response.title;
        document.getElementById('pre9').innerHTML = "R$" + response.price;
        document.getElementById('ava3').innerHTML = response.rating.rate;
    })
$.ajax({
    url: 'https://fakestoreapi.com/products/10'
})
    .done(response => {
        $('#img10').prop('src', response.image);
        document.getElementById('title10').innerHTML = response.title;
        document.getElementById('pre10').innerHTML = "R$" + response.price;
        document.getElementById('ava4').innerHTML = response.rating.rate;
    })

$.ajax({
    url: 'https://fakestoreapi.com/products/'
})
    .done(response => {
        $('#carro1').prop('src', response[13].image);
        $('#carro2').prop('src', response[12].image);
        $('#carro3').prop('src', response[10].image);
    })

//Funções para página detalhes

function deta(valor) {
    window.location.href = "/details/detalhes.html?produto=" + valor;
}

//Função para página de pesquisa


function pes() {
    // var dados = JSON.stringify($('#textPes').val());
    var dados = document.querySelector('#textPes').value;
    sessionStorage.setItem('chave', dados);
}

var select = document.getElementById('seleCate');

function pesCate() {
    // var dados = JSON.stringify($('#textPes').val());
    var select = document.querySelector('#seleCate').value;
    sessionStorage.setItem('chave', select);
    var selectTitle = document.querySelector('#seleTitle').value;
    sessionStorage.setItem('chaveTitle', selectTitle);

}