$(document).ready(function(){
	$(".subcategorydel").click(function() {
		var id = $(this).attr('id');		
		$("#subcategories-"+id).modal('show');
		
});
});

function deletesubcategory(id)
{
	$.ajax({
		type:'POST',
		//data:dataString,
		data: {	
		'subcategory': id,
		},
		url:'../ajaxs/deletesubcategory.php',
		success: function (response) { $("#tr-"+id).hide(); }
	});
}