<?php

function webp_uploads_filter_image_copy( $image_meta, $attachment_id ) {

	$file = wp_get_original_image_path( $attachment_id );

	$image_mime = wp_getimagesize( $file )['mime'];

	if ( 'image/jpeg' === $image_mime ) {

		$editor = wp_get_image_editor( $file );

		if ( is_wp_error( $editor ) ) {
			return $image_meta;
		}

		$upload_dir = wp_upload_dir();
		$dirname      = dirname( $file ) . '/';
		$ext          = '.' . pathinfo( $file, PATHINFO_EXTENSION );
		$webp_filename = $dirname . wp_basename( $file, $ext ) . '.webp';

		$webp_file = str_replace( trailingslashit($upload_dir['basedir']) , "", $dirname )  . wp_basename( $file, $ext ) . '.webp';

		if ( ! is_wp_error( $editor->save( $webp_filename ) ) ) {

			if (!isset($image_meta['original_image'])) {
				// replace the original image path with the webp image path
				$image_meta['original_image'] = wp_basename( $file );
			}

			$image_meta['file'] = $webp_file;
			wp_update_attachment_metadata( $attachment_id, $image_meta );

			update_post_meta( $attachment_id, '_wp_attached_file', $webp_file );

			// update post metadata in order to show the correct mime type "image/webp"
			// https://github.com/WordPress/performance/issues/67#issuecomment-1026132284
			// wp_update_post( array(
			// 	'ID'             => $attachment_id,
			// 	'post_mime_type' => 'image/webp'
			// ) );
			
		} else {
			error_log(__('Unable to save the original in webp format ') . $file );
		}
	}

	return $image_meta;

}
add_filter( 'wp_generate_attachment_metadata', 'webp_uploads_filter_image_copy', 10, 2 );
