var i, j, k;
var arr1 = [
 [1, 1, 1],
 [1, 1, 1],
 [1, 1, 1]
];
var arr2 = [
 [1, 1, 1],
 [1, 1, 1],
 [1, 1, 1]
];
var arr3 =[
 [0, 0, 0],
 [0, 0, 0],
 [0, 0, 0]
];
document.write("Matrix A (3 x 3):<br>");
for(i=0; i<3; i++)
{
 for(j=0; j<3; j++)
  document.write(arr1[i][j] +" ");
 document.write("<br>");
}
document.write("Matrix B (3 x 3):<br>");
for(i=0; i<3; i++)
{
 for(j=0; j<3; j++)
  document.write(arr2[i][j] +" ");
 document.write("<br>");
}
for(i=0; i<3; i++)
{
 for(j=0; j<3; j++)
 {
  for(k=0; k<3; k++)
   arr3[i][j] = arr3[i][j] + arr1[i][k] * arr2[k][j];
 }
}
document.write("Output:<br>");
for(i=0; i<3; i++)
{
 for(j=0; j<3; j++)
  document.write(arr3[i][j]+" ");
 document.write("<br>");
}