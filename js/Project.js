// JavaScript Document
var array = [];
array.length = 0;

function addNum(){
	array.length += 1;
	array[array.length - 1] = $("#num").val;
}
function getNums(){
	for(var i = 0; i < array.length; i ++){
	// put whatever it is to return
	array[i];
	}
	
}
function getTotal() {
	var total = 0;
	for(var i = 0; i < array.lengthl; i++){
		total += array[i];
	}
}
function clearList() {
	array.length = 0;
}