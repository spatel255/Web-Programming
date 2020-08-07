var candidatePalindrome =  prompt("Enter a word: ");
var n = candidatePalindrome.length - 1 ;
var isPalindrome = 1;
for (var i = 0; i <= n; i++) { 
  if (i < n-i && candidatePalindrome[i] !== candidatePalindrome[n-i]){
      isPalindrome = 0;
      break;
  }
}
if (isPalindrome){
alert("It is a Palindrome");
//trying something different
//   document.write("It is a Palindrome");
}else{
alert("It is not a Palindrome");
//   document.write("It is not a Palindrome");
}