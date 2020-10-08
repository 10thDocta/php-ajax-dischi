/* global $ */

const ajaxCall = () => {
  $.ajax({
    url: "http://localhost/php-ajax-dischi/api/",
    method: "GET",
    success: function (data) {
      let dataResponse = data;
      console.log(dataResponse);

      for (let i = 0; i < dataResponse.length; i++) {
        render(dataResponse[i]);
      }
    },
    error: function (richiesta, stato, errori) {
      alert("E' avvenuto un errore.", errori);
    },
  });
};

const render = (objectCD) => {
  const source = document.getElementById("cd-template").innerHTML;
  const template = Handlebars.compile(source);
  const html = template(objectCD);

  $(".cds-container").append(html);

  // var genre = objectCD.genre;

  // if (!$("#genre-select option").text().includes(genre)) {
  //   $("#genre-select").append(
  //     `<option value="${genre.toLowerCase()}">${genre}</option>`
  //   );
  // }
};

$(document).ready(function () {
  ajaxCall();

  $("#genre-select").change(function () {
    const value = $(this).val();

    $(".cds-container .cd").filter(function () {
      if (value == "all") {
        $(this).show();
      } else {
        $(this).toggle(
          $(this).attr("data-genre").toLowerCase().includes(value)
        );
      }
    });
  });
});
