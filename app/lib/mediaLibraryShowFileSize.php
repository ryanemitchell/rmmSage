<?php

/**
 * Filename: mediaLibary-showFileSize.php
 * Description:
 * Author: ryan
 */

add_filter( 'manage_upload_columns', 'wpse_237131_add_column_file_size' );
add_action( 'manage_media_custom_column', 'wpse_237131_column_file_size', 10, 2 );

function wpse_237131_add_column_file_size( $columns ) { // Create the column
	$columns['filesize'] = 'File Size';
	return $columns;
}
function wpse_237131_column_file_size( $column_name, $media_item ) { // Display the file size
	if ( 'filesize' != $column_name || !wp_attachment_is_image( $media_item ) ) {
		return;
	}
	$filesize = filesize( get_attached_file( $media_item ) );
	$filesize = size_format($filesize, 2);
	echo $filesize;
}
