<script type="text/javascript">
function designOn(){
	editor.document.designMode = "On";
}
function execution(command){
	editor.focus();
	editor.document.execCommand(command,false,null);
}
function show(formName,textareaName,iframeName){
	var theForm = document.getElementById(formName);
	theForm.elements[textareaName].value = window.frames[iframeName].document.body.innerHTML;
	var a = window.frames[iframeName].document.body.innerHTML;
	alert(a);
}
</script>
<style>
@font-face {
	font-family: 'PT Sans';
	src: url('PT Sans.woff') format('truetype');
}
#rich{
	background : url(back.png);
	width : 400px;
	padding : 5px 7px 5px 5px;
	border-radius:5px;
	font-family: 'PT Sans',Arial,Helvetica,sans-serif;
	overflow : hidden;
}
#rich ul{
	float : left;
	margin : 0px 0px 7px -40px;
}
#rich li{
	display : inline;
}
#rich li a{
	padding : 2px 5px;
	background : red;
	border-radius:5px;
	border : 1px solid #e7e7e7;
	background:#ffffff;
	text-decoration : none;
	font-size : 13px;
	color : #999;
}
</style>
<form name='myform' id='myform'>
<div id='rich'>
<ul>
<li><a href='javascript:execution("Bold");'>Bold</a></li>
<li><a href='javascript:execution("Underline");'>Underline</a></li>
<li><a href='javascript:execution("Italic");'>Italic</a></li>
<li><a href='javascript:execution("insertunorderedlist");'>UL</a></li>
<li><a href='javascript:execution("insertorderedlist");'>OL</a></li>
<li><a href='javascript:show("myform","textEditor","editor");'>Show</a></li>
</ul>
<textarea  name="textEditor" id="textEditor" style='width:100%;height:48px;display:none;'></textarea>
<iframe name='editor' id='editor' onload="designOn();" style='border:1px solid #e7e7e7;border-radius:5px;width:100%;height:48px;background:#ffffff;'></iframe>
</div>
</form>
