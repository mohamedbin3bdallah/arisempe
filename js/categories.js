$(document).ready(function(){
	$(".categorydel").click(function() {
		var id = $(this).attr('id');		
		$("#categories-"+id).modal('show');
		
});
});

function deletecategory(id)
{
	$.ajax({
		type:'POST',
		//data:dataString,
		data: {	
		'category': id,
		},
		url:'../ajaxs/deletecategory.php',
		success: function (response) { $("#tr-"+id).hide(); }
	});
}