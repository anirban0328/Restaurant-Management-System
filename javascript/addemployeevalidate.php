<script type="text/javascript">
function addemployeevalidate()
{
var name=document.getElementById("name").value;
var dd=document.getElementById("dd").value;
var mm=document.getElementById("mm").value;
var yy=document.getElementById("yy").value;
var add=document.getElementById("add").value;
var ph=document.getElementById("ph").value;
submitOK="true";
 if(name.length==0 || dd.length==0 || mm.length==0 || yy.length==0 || add.length==0 || ph.length==0 )
 {
	alert("No field should be left empty");
	submitOK="false";
 } 
 else
 {
	if(dd.length>2 || mm.length>2 || yy.length>4)
	{
		alert("INVALID DATE!");
		submitOK="false";
	}
	if(ph.length>10)
	{
		alert("INVALID PHONE NUMBER!");
		submitOK="false";
	}
 }
 if (submitOK=="false")
	{
		return false;
	}
 else
	return true;
} 
 
</script> 