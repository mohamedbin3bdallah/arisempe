$(document).ready(function(){
	$(".servicedel").click(function() {
		var id = $(this).attr('id');		
		$("#services-"+id).modal('show');
});
});

function deleteservice(id,subcategoryid)
{
	$.ajax({
		type:'POST',
		//data:dataString,
		data: {	
		'service': id,
		'subcategoryid': subcategoryid,
		},
		url:'../ajaxs/deleteservice.php',
		success: function (response) { $("#tr-"+id).hide(); }
	});
}