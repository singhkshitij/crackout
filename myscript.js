$("#sub").click( function() {
	$.post( $("#signup").attr("action"), $ ("#signup : input").serializeArray(), function(info){ $("#result").html(info); });
    clearInput();
});  

$("#signup").submit( function() {
	retuen false;
}); 
function clearInput(){
	$("#signup :input").each( function() {
		$(this).val('');
	});