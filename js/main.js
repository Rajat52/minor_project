function myfunction(){
	alert("empty");
	if (document.forms["frm"].answer.value == ""){
		alert("empty");
	}
	if (document.forms["frm"].description.value == ""){
		alert("empty description");
	}
} 
function like(){
	var like_button = document.getElementById('like');
	like_button.classList.add("text-success");
	
    }
function dislike(){
	var dislike_button = document.getElementById('dislike');
	dislike_button.classList.add("text-danger");

}
