$( document ).ready(function() {

var $container = $('#container');
// init
$container.packery({
  isInitLayout: false,
  itemSelector: '.item',
  gutter: 7
});

var container = document.querySelector('#container');
var pckry = new Packery( container, {
  // options
  itemSelector: '.item',
  gutter: 7
});

});