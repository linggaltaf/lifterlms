import { pressKeyWithModifier } from '@wordpress/e2e-test-utils';

/**
 * Type text into a field identified by a selector.
 *
 * @since 3.37.8
 * @since [version] Automatically cast `text` to a string.
 *
 * @param {String} selector Query selector to identify the field element.
 * @param {Mixed}  text     Text to type into the field.
 * @return {void}
 */
export async function fillField( selector, text ) {

	await page.focus( selector );
	await pressKeyWithModifier( 'primary', 'a' );
	await page.type( selector, text.toString() );

}
