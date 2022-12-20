jQuery( function($){

	$( 'body' ).on( 'click', '.rudr-upload', function( event ){
		event.preventDefault();
		
		const button = $(this)
		const imageId = button.next().next().val();
		
		const customUploader = wp.media({
			title: 'Insert image',
			library : {
				type : 'image'
			},
			button: {
				text: 'Use this image'
			},
			multiple: false
		}).on( 'select', function() {
			const attachment = customUploader.state().get( 'selection' ).first().toJSON();
			button.removeClass( 'button' ).html( '<img src="' + attachment.url + '">');
			button.next().show();
			button.next().next().val( attachment.id );
		})
		
		customUploader.on( 'open', function() {
			if( imageId ) {
			  const selection = customUploader.state().get( 'selection' )
			  attachment = wp.media.attachment( imageId );
			  attachment.fetch();
			  selection.add( attachment ? [attachment] : [] );
			}
		})

		customUploader.open()
	});

	$('body' ).on( 'click', '.rudr-remove', function( event ){
		event.preventDefault();
		const button = $(this);
		button.next().val('');
		button.hide().prev().addClass( 'button' ).html( 'Upload image' );
	});
});