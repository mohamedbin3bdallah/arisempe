$(document).ready(function(){
	$(".subservicedel").click(function() {
		var id = $(this).attr('id');		
		$("#subservices-"+id).modal('show');
		
});
});

function deletesubservice(id,serviceid)
{
	$.ajax({
		type:'POST',
		//data:dataString,
		data: {	
		'subservice': id,
		'serviceid': serviceid,
		},
		url:'../ajaxs/deletesubservice.php',
		success: function (response) { $("#tr-"+id).hide(); }
	});
}