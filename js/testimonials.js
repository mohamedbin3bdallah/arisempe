$(document).ready(function(){
	$(".testimonialdel").click(function() {
		var id = $(this).attr('id');		
		$("#testimonials-"+id).modal('show');
		
});
});

function deletetestimonial(id,pic)
{
	$.ajax({
		type:'POST',
		//data:dataString,
		data: {	
		'testimonial': id,
		'image': pic,
		},
		url:'../ajaxs/deletetestimonial.php',
		success: function (response) { $("#tr-"+id).hide(); }
	});
}