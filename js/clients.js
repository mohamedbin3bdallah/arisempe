$(document).ready(function(){
	$(".clientdel").click(function() {
		var id = $(this).attr('id');		
		$("#clients-"+id).modal('show');
		
});
});

function deleteclient(id,pic)
{
	$.ajax({
		type:'POST',
		//data:dataString,
		data: {	
		'client': id,
		'image': pic,
		},
		url:'../ajaxs/deleteclient.php',
		success: function (response) { $("#tr-"+id).hide(); }
	});
}