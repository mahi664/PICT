$(document).on("click",".browse",function(){
	var file = $(this).parent().parent().parent().find(".Videofile");
	file.trigger("click");
});
$(document).on("change",".Videofile",function(){
	$(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i,''));
});