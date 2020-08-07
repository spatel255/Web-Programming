var limit = prompt("Enter the limit 'n'", " ");
var f1=0;
var f2=1;
document.write("Entered Limit :",limit, "<br/>");
document.write("The fibonacci series : ");
document.write("",f1," ");
document.write("",f2," ");
var i,f3;
for(i=2; i<limit; i++)
{
	 f3=f1+f2;
	 document.write("",f3," ");
	 f1=f2;
	 f2=f3;
}
