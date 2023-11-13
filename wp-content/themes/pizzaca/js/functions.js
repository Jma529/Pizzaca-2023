( function( $ ) {
  $('div.woocommerce').on('change', 'input.qty', function(){ $('[name=update_cart]').trigger('click');});

}( jQuery ) );

// Show daytime menu on weekend days and hide full menu.

const now = new Date();
const time = now.toLocaleTimeString('en-US', { timeZone: 'Australia/Perth' });
let day = now.getDay();
var hours = now.getHours();

var daytime = document.querySelector('.daytime-menu');
var fullMenu = document.querySelector('.full-menu');

if ( (day == 0 || day == 6 ) && (hours >= 12 && hours < 15) ) {
  daytime.classList.add('active');
  fullMenu.classList.add('hide');
}
