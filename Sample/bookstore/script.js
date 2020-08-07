window.addEventListener("load", function(){
  var all = document.getElementsByClassName("book_wrap");
  for (var book of all) {
    book.addEventListener("click", function(){
      var id = this.dataset.id,
          name = this.getElementsByClassName("book_title")[0].innerHTML,
          desc = this.getElementsByClassName("book_desc")[0].innerHTML;
      alert("You have selected - ID: " + id + ", TITLE: " + name + ", DESC: " + desc);
    });
  }
});
