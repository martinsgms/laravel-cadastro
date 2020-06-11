
function loadEdit(id,name,birth,email,password){
	$('#id_edit').val(id);
	$('#name_edit').val(name);
	$('#birth_edit').val(birth);
	$('#email_edit').val(email);
	$('#password_edit').val(password);	
}

function loadDelete(id){
	$('#id_delete').val(id);
}


$('#editbtn').on('click', function(){
	//ali tem um 5 por teste apenas
	$('#editForm').attr('action',5+'/edit');

});

$(document).ready(function(){
 	$('#birth').mask('00/00/0000');
 	$('#birth_edit').mask('00/00/0000');
});

