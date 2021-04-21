$(document).ready(function(){
	$(".ourteamdel").click(function() {
		var id = $(this).attr('id');		
		$("#ourteam-"+id).modal('show');
		
});
});

function deleteourteam(id,pic)
{
	$.ajax({
		type:'POST',
		//data:dataString,
		data: {	
		'ourteam': id,
		'image': pic,
		},
		url:'../ajaxs/deleteourteam.php',
		success: function (response) { $("#tr-"+id).hide(); }
	});
}