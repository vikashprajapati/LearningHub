var hideCoverFunc = function hideCover() {
  console.log("hideCover");
  console.log($(window).scrollTop());
  if($(window).scrollTop() > 200){
    $(".head-cover").addClass('closed')
  }
  else
    $(".head-cover").removeClass('closed');

}

$(function(){
  console.log("document ready");
  $(document).on('scroll', hideCoverFunc);
});
