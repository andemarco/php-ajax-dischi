const Handlebars = require("handlebars");
var $ = require("jquery");

$(document).ready(function(){
  $.ajax({
    url: "http://localhost:8888/php-ajax-dischi/src/Partials/server.php",
    method: "GET",
    success: function (data, stato) {
      var source = document.getElementById("entry-template").innerHTML;
      var template = Handlebars.compile(source);
      for (var i = 0; i < data.length; i++) {
        var disk = data[i];
        var context = {
          title: disk.title,
          author: disk.author,
          year: disk.year,
          poster: disk.poster };
        var html = template(context);
        $('.container').append(html)
      }
    },
    error: function (richiesta, stato, errori) {
    alert("E' avvenuto un errore. " + errore);
    }
  });
})
