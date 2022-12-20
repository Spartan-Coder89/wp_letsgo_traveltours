jQuery( function($){

	$('body').on( 'click', '.video_upload', function( event ){
		
		event.preventDefault();
		
		const button = $(this)
		const imageId = button.next().next().val();
		
		const customUploader = wp.media({

			title: 'Insert video',
			library : {
				type : 'video'
			},
			button: {
				text: 'Use this video'
			},
			multiple: false

		}).on( 'select', function() {

			const attachment = customUploader.state().get( 'selection' ).first().toJSON();
			button.removeClass( 'button' ).html( 
				'<video width="100%" controls>' +
					'<source src="'+ attachment.url +'" type="video/mp4">' +
					'<source src="'+ attachment.url +'" type="video/ogg">' +
				'</video>'
			);
			button.next().show();
			button.next().next().val( attachment.id );
		});
		
		customUploader.on( 'open', function() {

			if( imageId ) {
			  const selection = customUploader.state().get( 'selection' )
			  attachment = wp.media.attachment( imageId );
			  attachment.fetch();
			  selection.add( attachment ? [attachment] : [] );
			}
		});

		customUploader.open();
	});

	$('body' ).on( 'click', '.video_remove', function( event ){

		event.preventDefault();

		const button = $(this);
		button.next().val('');
		button.hide().prev().addClass( 'button' ).html( 'Upload video' );
	});
});