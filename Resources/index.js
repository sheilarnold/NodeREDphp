
$(document).ready(function(){
	setInterval(function(){
		$('#list_leituras').load(window.location.href + " " + '#list_leituras');
	}, 1000);
});
