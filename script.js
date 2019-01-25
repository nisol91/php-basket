$(document).ready(function() {


  function printData(array) {

    for (var i = 0; i < array.length; i++) {
      var copia = $('.templates .codice').clone();
      // console.log(copia);
      $('.container').append(copia);

    }

    $('.container .codice').each(function(index) {

      $(this).find('h1').text(array[index]['codice']);
      $(this).find('h2').text('falli:' + array[index]['falli']);
      $(this).find('h3').text('punti:' + array[index]['punti']);


    });

  }

  $.ajax({
    url: 'http://localhost/basket_php_db/data.php',
    method: 'GET',
    success: function (data) {
      // console.log(data);
      //js ha in ingresso una stringa json quindi non posso fare un semplice console.log(data) ma:
      // console.log(JSON.parse(data));
      //cosi dice a js che ho una stringa JSON e js mi stampa un bell array di oggetti come lo conosciamo
      var basket_data = JSON.parse(data);
      console.log(basket_data);
      // console.log(data);
      printData(basket_data);
      // console.log(basket_data.length);
    },
  });
});
