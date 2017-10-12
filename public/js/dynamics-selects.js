$(document).ready(function(){

	$("#slc_menu").css({"display": "none"});

	$("#slc_post").css({"display": "none"});

});



$("#slc_app").change(event => {

	$.get(`http://blogs.altavision.com.co/allmenus/${event.target.value}`, function(res, sta){

		$("#slc_menu").css({"display": "block"});

		$("#slc_menu").empty();

		$("#slc_menu").append(`<option> Seleccione un menu </option>`);

		res.forEach(element => {

			$("#slc_menu").append(`<option value=${element.id}> ${element.name} </option>`);

		});

	});

});



$("#slc_menu").change(event => {

	$.get(`http://blogs.altavision.com.co/allposts/${event.target.value}`, function(res, sta){

		$("#slc_post").css({"display": "block"});

		$("#slc_post").empty();

		$("#slc_post").append(`<option> Ninguno </option>`);

		res.forEach(element => {

			$("#slc_post").append(`<option value=${element.id}> ${element.title} </option>`);

		});

	});

});

