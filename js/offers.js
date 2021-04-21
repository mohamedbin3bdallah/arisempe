$(document).ready(function(){
	$(".offerdel").click(function() {
		var id = $(this).attr('id');		
		$("#offer-"+id).modal('show');
		
});
});

function deleteoffer(id,pic)
{
	$.ajax({
		type:'POST',
		//data:dataString,
		data: {	
		'id': id,
		'pic': pic,
		},
		url:'../ajaxs/deleteoffer.php',
		success: function (response) { if(response == 1) $("#tr-"+id).hide(); }
	});
}