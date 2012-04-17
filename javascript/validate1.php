<script type="text/javascript">
function validate()
{
var id1=document.getElementById("itemid1").value;
var id2=document.getElementById("itemid2").value;
var id3=document.getElementById("itemid3").value;
var id4=document.getElementById("itemid4").value;
var id5=document.getElementById("itemid5").value;
var id6=document.getElementById("itemid6").value;
var id7=document.getElementById("itemid7").value;
var id8=document.getElementById("itemid8").value;
var id9=document.getElementById("itemid9").value;
var id10=document.getElementById("itemid10").value;

var quant1=document.getElementById("qty1").value;
var quant2=document.getElementById("qty2").value;
var quant3=document.getElementById("qty3").value;
var quant4=document.getElementById("qty4").value;
var quant5=document.getElementById("qty5").value;
var quant6=document.getElementById("qty6").value;
var quant7=document.getElementById("qty7").value;
var quant8=document.getElementById("qty8").value;
var quant9=document.getElementById("qty9").value;
var quant10=document.getElementById("qty10").value;

submitOK="true";
 if(id1.length==0  )
 {
 alert("id field cannot be left empty");
 submitOK="false";
 }
 if(id1.length!=0&&quant1.length==0  )
 {
 alert("quantity field cannot be left empty");
 submitOK="false";
 }
  if(id2.length!=0&&quant2.length==0  )
 {
 alert("quantity field cannot be left empty");
 submitOK="false";
 }
  if(id3.length!=0&&quant3.length==0  )
 {
 alert("quantity field cannot be left empty");
 submitOK="false";
 }
  if(id4.length!=0&&quant4.length==0  )
 {
 alert("quantity field cannot be left empty");
 submitOK="false";
 }
  if(id5.length!=0&&quant5.length==0  )
 {
 alert("quantity field cannot be left empty");
 submitOK="false";
 }
  if(id6.length!=0&&quant6.length==0  )
 {
 alert("quantity field cannot be left empty");
 submitOK="false";
 }
  if(id7.length!=0&&quant7.length==0  )
 {
 alert("quantity field cannot be left empty");
 submitOK="false";
 }
  if(id8.length!=0&&quant8.length==0  )
 {
 alert("quantity field cannot be left empty");
 submitOK="false";
 }
  if(id9.length!=0&&quant9.length==0  )
 {
 alert("quantity field cannot be left empty");
 submitOK="false";
 }
  if(id10.length!=0&&quant10.length==0  )
 {
 alert("quantity field cannot be left empty");
 submitOK="false";
 }
if (submitOK=="false")
 {
 return false;
 }
 
}
 
 
</script> 