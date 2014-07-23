<?php

function decrypt( $encryptedContent ) {

	$owncloudRoot = getenv( 'HOME' ) .'/html/owncloud/';
	$owncloudData = getenv( 'HOME' ) .'/owncloud-data/jcb/files_encryption/';

	if ( ! file_exists( $owncloudRoot ) ) {
		return $encryptedContent;
	}

	static $encryptedUserKey = '';
	static $decryptedUserKey = '';
	static $shareKey = '';
	static $encryptedKeyfile = '';
	static $decryptedKeyfile = '';

	if ( empty( $encryptedUserKey ) ) {
		$encryptedUserKey = @file_get_contents( $owncloudData . "USER.private.key" );
	}
	if ( empty( $shareKey )) {
		$shareKey = @file_get_contents( $owncloudData . "share-keys/FILENAME.USER.shareKey" );
	}
	if ( empty( $encryptedKeyfile ) ) {
		$encryptedKeyfile = @file_get_contents( $owncloudData . "keyfiles/FILENAME.key" );
	}

	try {
		// http://blog.schiessle.org/2013/05/28/introduction-to-the-new-owncloud-encryption-app/comment-page-1/#comment-61180
		require_once $owncloudRoot. 'apps/files_encryption/lib/crypt.php';

		// first get users private key and decrypt it
		$decryptedUserKey = OCA\Encryption\Crypt::decryptPrivateKey( $encryptedUserKey, getenv( 'OWNCLOUD_PASSWORD' ) );

		// now we need to decrypt the file-key, therefore we use our private key and the share key
		$decryptedKeyfile = OCA\Encryption\Crypt::multiKeyDecrypt( $encryptedKeyfile, $shareKey, $decryptedUserKey);

		return OCA\Encryption\Crypt::symmetricDecryptFileContent( $encryptedContent, $decryptedKeyfile );

	} catch (Exception $e) {
		echo 'Caught exception: ',  $e->getMessage(), "\n";
	}

	return $encryptedContent;

}

?>