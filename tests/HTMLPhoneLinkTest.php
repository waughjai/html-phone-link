<?php

use PHPUnit\Framework\TestCase;
use WaughJ\HTMLPhoneLink\HTMLPhoneLink;

class HTMLPhoneLinkTest extends TestCase
{
	public function testBasicMailLink()
	{
		$link = new HTMLPhoneLink( '1-800-555-2222' );
		$this->assertEquals( $link->getHTML(), '<a href="tel:18005552222">1-800-555-2222</a>');
	}

	public function testMailLinkWithCustomValue()
	{
		$link = new HTMLPhoneLink( '(206)-555-7129', [ 'value' => 'Call us now!' ] );
		$this->assertEquals( $link->getHTML(), '<a href="tel:2065557129">Call us now!</a>');
	}

	public function testMailLinkWithCustomValueAndOtherLinkAttributes()
	{
		$link = new HTMLPhoneLink( '( 454 ) - 212 - 8102', [ "value" => "Give us a ring", "class" => "phone-link" ] );
		$this->assertStringContainsString( ' href="tel:4542128102', $link->getHTML() );
		$this->assertStringContainsString( ' class="phone-link', $link->getHTML() );
		$this->assertThat( $link->getHTML(), $this->logicalNot( $this->stringContains( ' value="Give us a ring"' ) ) );
	}
}
