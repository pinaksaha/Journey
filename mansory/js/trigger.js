$(function(){
  $('#container').masonry({
    // options
    itemSelector : '.item',
    columnWidth : 240
  });
});

var $container = $('#container');
$container.imagesLoaded(function(){
  $container.masonry({
    itemSelector : '.item',
    columnWidth : 240
  });
});