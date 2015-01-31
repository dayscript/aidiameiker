jQuery( document ).ready(function() {
    jQuery('#login-link').click( function(){
        jQuery('#login-popup').foundation('reveal', 'open', '/dev/usuario/ingresar/');
    });
});