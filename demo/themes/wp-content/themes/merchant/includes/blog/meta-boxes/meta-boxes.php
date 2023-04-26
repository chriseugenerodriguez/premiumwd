<?php

/*  Initialize the meta boxes.
/* ------------------------------------ */
//add_action( 'admin_init', '_custom_meta_boxes' );

function _custom_meta_boxes() {
  
/*  Custom meta boxes
/* ------------------------------------ */

$post_format_audio = array(
	'id'          => 'audio',
	'title'       => 'Format: Audio',
	'desc'        => 'These settings enable you to embed audio into your posts. You must provide both .mp3 and .ogg/.oga file formats in order for self hosted audio to function accross all browsers.',
	'pages'       => array( 'post' ),
	'context'     => 'normal',
	'priority'    => 'high',
	'fields'      => array(
		array(
			'label'		=> 'MP3 File URL',
			'id'		=> '_audio_mp3_url',
			'type'		=> 'upload',
			'desc'		=> 'The URL to the .mp3 or .m4a audio file'
		),
		array(
			'label'		=> 'OGA File URL',
			'id'		=> '_audio_ogg_url',
			'type'		=> 'upload',
			'desc'		=> 'The URL to the .oga, .ogg audio file'
		)
	)
);
$post_format_gallery = array(
	'id'          => 'gallery',
	'title'       => 'Format: Gallery',
	'desc'        => '<a title="Add Media" data-editor="content" class="button insert-media add_media" id="insert-media-button" href="#">Add Media</a> <br /><br />
						To create a gallery, upload your images and then select "<strong>Uploaded to this post</strong>" from the dropdown (in the media popup) to see images attached to this post. You can drag to re-order or delete them there. <br /><br /><i>Note: Do not click the "Insert into post" button. Only use the "Insert Media" section of the upload popup, not "Create Gallery" which is for standard post galleries.</i>',
	'pages'       => array( 'post' ),
	'context'     => 'normal',
	'priority'    => 'high',
	'fields'      => array()
);
$post_format_chat = array(
	'id'          => 'chat',
	'title'       => 'Format: Chat',
	'desc'        => 'Input chat dialogue.',
	'pages'       => array( 'post' ),
	'context'     => 'normal',
	'priority'    => 'high',
	'fields'      => array(
		array(
			'label'		=> 'Chat Text',
			'id'		=> '_chat',
			'type'		=> 'textarea',
			'rows'		=> '2'
		)
	)
);
$post_format_link = array(
	'id'          => 'link',
	'title'       => 'Format: Link',
	'desc'        => 'Input your link.',
	'pages'       => array( 'post' ),
	'context'     => 'normal',
	'priority'    => 'high',
	'fields'      => array(
		array(
			'label'		=> 'Link Title',
			'id'		=> '_link_title',
			'type'		=> 'text'
		),
		array(
			'label'		=> 'Link URL',
			'id'		=> '_link_url',
			'type'		=> 'text'
		)
	)
);
$post_format_quote = array(
	'id'          => 'quote',
	'title'       => 'Format: Quote',
	'desc'        => 'Input your quote.',
	'pages'       => array( 'post' ),
	'context'     => 'normal',
	'priority'    => 'high',
	'fields'      => array(
		array(
			'label'		=> 'Quote',
			'id'		=> '_quote',
			'type'		=> 'textarea',
			'rows'		=> '2'
		),
		array(
			'label'		=> 'Quote Author',
			'id'		=> '_quote_author',
			'type'		=> 'text'
		)
	)
);
$post_format_video = array(
	'id'          => 'video',
	'title'       => 'Format: Video',
	'desc'        => 'These settings enable you to embed videos into your posts.',
	'pages'       => array( 'post' ),
	'context'     => 'normal',
	'priority'    => 'high',
	'fields'      => array(
		array(
			'label'		=> 'Video URL',
			'id'		=> '_video_url',
			'type'		=> 'text',
			'desc'		=> 'Recommended to use.'
		),
		array(
			'label'		=> 'Video Embed Code',
			'id'		=> '_video_embed_code',
			'type'		=> 'textarea',
			'rows'		=> '2'
		)
	)
);

/*  Register meta boxes
/* ------------------------------------ */
	premiumwd_register_meta_box( $post_format_audio );
	premiumwd_register_meta_box( $post_format_chat );
	premiumwd_register_meta_box( $post_format_gallery );
	premiumwd_register_meta_box( $post_format_link );
	premiumwd_register_meta_box( $post_format_quote );
	premiumwd_register_meta_box( $post_format_video );
}
_custom_meta_boxes();
