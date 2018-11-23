<?php

declare( strict_types = 1 );
namespace WaughJ\HTMLPhoneLink
{
	use WaughJ\HTMLLink\HTMLLink;
	use function WaughJ\TestHashItem\TestHashItemExists;

	class HTMLPhoneLink extends HTMLLink
	{
		public function __construct( $phone_number, array $other_attributes = [] )
		{
			$phone_number = ( string )( $phone_number );
			$href = "tel:" . $this->formatPhoneNumberForURL( $phone_number );
			$value = TestHashItemExists( $other_attributes, 'value', $phone_number );
			parent::__construct( $href, $value, $other_attributes );
		}

		private function formatPhoneNumberForURL( string $phone_number ) : string
		{
			return preg_replace( '/([^0-9]*)/', '', $phone_number );
		}
	}
}
