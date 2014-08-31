//agouzal
// rassemblement des infos caché
function setInfo(i, e) {
	$('#x').val(e.x1);
	$('#y').val(e.y1);
	$('#w').val(e.width);
	$('#h').val(e.height);
}

$(document).ready(function() {
	var p = $("#uploadPreview");

	// instanciation
	$("#uploadImage").change(function(){
		// fadeOut or hide preview
		p.fadeOut();

		// lecture 
		var oFReader = new FileReader();
		oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

		oFReader.onload = function (oFREvent) {
	   		p.attr('src', oFREvent.target.result).fadeIn();
		};
	});

	// implementation de la zone 
	$('img#uploadPreview').imgAreaSelect({
		// ratio du recardrement !!!
		aspectRatio: '1:1',
		onSelectEnd: setInfo
	});
});