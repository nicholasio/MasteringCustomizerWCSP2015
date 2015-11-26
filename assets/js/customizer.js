(function( $ ) {
    "use strict";

    wp.customize( 'wordcamp_sp_headline' , function( value ) {
        value.bind( function( to ) {
            $( '.jumbotron h1' ).html(to);
        } );
    });

    wp.customize( 'wordcamp_sp_heading_text' , function( value ) {
        value.bind( function( to ) {
            $( '.jumbotron .lead' ).html(to);
        } );
    });

    wp.customize( 'wordcamp_sp_button_text' , function( value ) {
        value.bind( function( to ) {
            $( '.jumbotron .btn' ).html(to);
        } );
    });

    wp.customize( 'wordcamp_sp_button_color' , function( value ) {
        value.bind( function( to ) {
            $( '.jumbotron .btn' ).css( 'background-color', to );
            $( '.jumbotron .btn' ).css( 'border-color', to );
        } );
    });


})( jQuery );
