HTML Mail Link
=========================

Simple way to create HTML for telephone links.

Simply create an instance sending the phone # in whatever format you want it shown as the 1st argument and either use the object as a string or call getHTML() on it to automatically generate HTML for a "tel" link.

Example:

`new HTMLPhoneLink( '1-800-555-2222' );`

Generates the HTML:

`<a href="tel:18005552222">1-800-555-2222</a>`

For custom value shown in the link, push a hash map as the optional 2nd argument with the value you want in the "value" key:

Example:

`new HTMLPhoneLink( '(206)-555-7129', [ 'value' => 'Call us now!' ] );`

Generates the HTML:

`<a href="tel:2065557129">Call us now!</a>`

This hash map can also be used to send all other valid HTML5 attributes, as well as other options. See HTMLLink source code at https://github.com/waughjai/html-link for mo' details.
