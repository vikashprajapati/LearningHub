$(function(){
  $("a[data-action='submit'],button[data-action='submit']").click(function(e){
    console.log('item clicked');
    e.preventDefault();
    var target = "form#"+$(this).attr('data-target');
    $(target).submit();
  });
});
