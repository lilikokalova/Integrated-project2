function myFunction() {
    document.getElementById("demo").innerHTML = "Hello World";
}

function load_cCategory() {
     document.getElementById("category").innerHTML='<object type="text/html" data="../HTML/CreateCategory.html" ></object>';
}

function load_aQuestion() {
     document.getElementById("category").innerHTML='<object type="text/html" data="../HTML/AddQuestion.html" ></object>';
}

function load_dCategory() {
     document.getElementById("category").innerHTML='<object type="text/html" data="../HTML/DeleteCategory.html" ></object>';
}

function load_dQuestion() {
     document.getElementById("category").innerHTML='<object type="text/html" data="../HTML/DeleteQuestion.html" ></object>';
}

function load_Master() {
     document.getElementById("head").innerHTML='<object type="text/html" data="../HTML/Master.html" ></object>';
}

window.onload = function onLoadCategory(){
 var mycat = new Array();
  mycat[0]='Maths';
  mycat[1]='Science';
  mycat[2]='Computing';
  mycat[3]='History';
  

  var options = '';

  for(var i = 0; i < mycat.length; i++)
    options += '<option value="'+mycat[i]+'" />';

  document.getElementById('Categories').innerHTML = options;
}

function myFunction(id) {
	document.getElementById("q"+id).style.borderColor = "rgb(0,0,0)";
	
	for(i = 1; i<5; i++){	
		if(i != id){
			document.getElementById("q"+i).style.borderColor = "rgb(95,159,159)";	
		}			
	}
	
}