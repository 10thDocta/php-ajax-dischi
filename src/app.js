/* global require */

const $ = require('jquery');
const Handlebars = require("handlebars");
const authorArray = [];


const ajaxCall = () => {
    $.ajax({
        url: "http://localhost/php-ajax-dischi/api/",
        method: "GET",
        success: function (data) {
            render(data);
        },
        error: function (richiesta, stato, errori) {
            alert("E' avvenuto un errore.", errori);
        },
    });
};

const render = (objectCD) => {
    let source = document.getElementById("cd-template").innerHTML;
    let template = Handlebars.compile(source);


    objectCD.forEach(e => {

        let html = template(e);
        $(".cds-container").append(html);

        console.log(e.author);

        if (!authorArray.includes(e.author)) {
            selectAuthor(e.author);
            authorArray.push(e.author);
        }
    })

};

const selectAuthor = author => {

    let source = document.getElementById("select-template").innerHTML;
    let template = Handlebars.compile(source);

    let context = {
        "author": author
    }

    let html = template(context);

    $("#author-select").append(html);
}


/* --------------- DOCUMENT READY --------------- */
$(function () {
    ajaxCall();

    $("#author-select").change(function () {

        let author = $(this).val();

        $(".cds-container").empty();

        $.ajax({
            url: "http://localhost/php-ajax-dischi/api/filter.php",
            data: {
                "author": author
            },
            method: "GET",
            success: function (data) {
                render(data);
            },
            error: function (richiesta, stato, errori) {
                alert("E' avvenuto un errore.", stato, errori);
                console.log(errori);
            },
        });


    });
});


console.log("pippo");