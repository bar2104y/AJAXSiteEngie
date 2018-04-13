function loadPage(hash){	
	if(!!!hash){
		var hash = window.location.hash
	}
	$.ajax({
		type: "POST",
		url: "Scripts/PHP/load_page.php",
		data:{'page' : hash},
		success: function(data){
			$("#page_content").html(data);
		}
	})
}
$(document).ready(function (){
	loadPage();
	$('a[class="linkToPage"]').click(function (){
		loadPage($(this).attr("href"))
	})
})