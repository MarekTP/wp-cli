<?php

namespace WP_CLI\Bootstrap;

/**
 * Class BootstrapState.
 *
 * Represents the state that is passed from one bootstrap step to the next.
 *
 * @package WP_CLI\Bootstrap
 */
class BootstrapState {

	/**
	 * Whether the command currently being run is "protected".
	 *
	 * This means that the command should not be allowed to break due to
	 * extension code.
	 */
	const IS_PROTECTED_COMMAND = 'is_protected_command';

	/**
	 * Internal storage of the state values.
	 *
	 * @var array
	 */
	private $state = array();

	/**
	 * Get the state value for a given key.
	 *
	 * @param string $key      Key to get the state from.
	 * @param mixed  $fallback Fallback value to use if the key is not defined.
	 *
	 * @return mixed
	 */
	// @codingStandardsIgnoreLine
	public function getValue( $key, $fallback = null ) {
		return array_key_exists( $key, $this->state )
			? $this->state[ $key ]
			: $fallback;
	}

	/**
	 * Set the state value for a given key.
	 *
	 * @param string $key   Key to set the state for.
	 * @param mixed  $value Value to set the state for the given key to.
	 *
	 * @return void
	 */
	// @codingStandardsIgnoreLine
	public function setValue( $key, $value ) {
		$this->state[ $key ] = $value;
	}
}
