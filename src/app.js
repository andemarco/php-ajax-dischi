const Handlebars = require("handlebars");
var $ = require("jquery");

$(document).ready(function(){
  $.ajax({
    url: "http://localhost:8888/php-ajax-dischi/src/Partials/server.php",
    method: "GET",
    success: function (data, stato) {
      for (var i = 0; i < data.length; i++) {
        console.log(data[i].title);
      }
    },
    error: function (richiesta, stato, errori) {
    alert("E' avvenuto un errore. " + errore);
    }
  });
})
