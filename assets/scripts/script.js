// Credits to: http://toddmotto.com/labs/reusable-js/
(function(){
  
  // hasClass
  function hasClass(elem, className) {
    return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
  }
  // toggleClass
  function toggleClass(elem, className) {
    var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, " " ) + ' ';
      if (hasClass(elem, className)) {
          while (newClass.indexOf(" " + className + " ") >= 0 ) {
              newClass = newClass.replace( " " + className + " " , " " );
          }
          elem.className = newClass.replace(/^\s+|\s+$/g, '');
      } else {
          elem.className += ' ' + className;
      }
  }
  document.getElementById('toggle-nav').onclick = function() {
      toggleClass(document.getElementById('navigation'), 'active');
  }
})()