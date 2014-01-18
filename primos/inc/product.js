$( function() {

	
	$( '#apartamentos' ).mTip( {
							  
		alignTo: 'apartamentos',					  
		content		:'<img src="img/anuncio_1.png" title="apartamentos" />',
	} );
	$( '#superplanes' ).mTip( {
							  
		alignTo: 'cursor',					  
		content		:'<img src="img/anuncio_2.png" title="apartamentos" />',
		show		: function( $tip, options ) {
			var offsetTop = parseInt( $tip.css( 'top' ) );
			
			$tip.stop( true )
				.css( 'top', 0 )
				.show()
				.animate( {
					opacity		: options.opacity,
					top			: offsetTop 
				}, options.fade[0], 'easeOutBounce' );
		},
		hide		: function( $tip, options ) {
			$tip.stop( true )
				.animate( {
					left		: parseInt( $tip.css( 'left' ) ) + 100,
					opacity		: 0
				}, options.fade[1], 'linear' );
		},
	 	fade		: [1000, 500]
	} );
	
	$( '.tienda' ).mTip( {
							  
		alignTo: 'cursor',					  
		content		:'<img src="img/anuncio_3.png" title="apartamentos" />',
		show		: function( $tip, options ) {
			var offsetTop = parseInt( $tip.css( 'top' ) );
			
			$tip.stop( true )
				.css( 'top', 0 )
				.show()
				.animate( {
					opacity		: options.opacity,
					top			: offsetTop 
				}, options.fade[0], 'easeOutBounce' );
		},
		hide		: function( $tip, options ) {
			$tip.stop( true )
				.animate( {
					left		: parseInt( $tip.css( 'left' ) ) + 100,
					opacity		: 0
				}, options.fade[1], 'linear' );
		},
	 	fade		: [1000, 500]
	} );
	
	$( '#blog' ).mTip( {
							  
		alignTo: 'cursor',					  
		content		:'<img src="img/anuncio_4.png" title="apartamentos" />',
		show		: function( $tip, options ) {
			var offsetTop = parseInt( $tip.css( 'top' ) );
			
			$tip.stop( true )
				.css( 'top', 0 )
				.show()
				.animate( {
					opacity		: options.opacity,
					top			: offsetTop 
				}, options.fade[0], 'easeOutBounce' );
		},
		hide		: function( $tip, options ) {
			$tip.stop( true )
				.animate( {
					left		: parseInt( $tip.css( 'left' ) ) + 100,
					opacity		: 0
				}, options.fade[1], 'linear' );
		},
	 	fade		: [1000, 500]
	} );
	
	$( '#primos' ).mTip( {
							  
		alignTo: 'cursor',					  
		content		:'<img src="img/anuncio_5.png" title="apartamentos" />',
		show		: function( $tip, options ) {
			var offsetTop = parseInt( $tip.css( 'top' ) );
			
			$tip.stop( true )
				.css( 'top', 0 )
				.show()
				.animate( {
					opacity		: options.opacity,
					top			: offsetTop 
				}, options.fade[0], 'easeOutBounce' );
		},
		hide		: function( $tip, options ) {
			$tip.stop( true )
				.animate( {
					left		: parseInt( $tip.css( 'left' ) ) + 100,
					opacity		: 0
				}, options.fade[1], 'linear' );
		},
	 	fade		: [1000, 500]
	} );	
	
} );