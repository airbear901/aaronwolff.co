<?php

class Address {
	public $street_address_1;
	public $street_address_2;
	public $city_name;
	public $subdivision_name;
	public $postal_code;
	public $country;


	function display() {
		$output = ' ';

		//street address
		$output .= $this->street_address_1;
		if ($this->street_address_2) {
			$output .= '<br/' . $this->street_address_2;
		}

		//city, subdivision, postal
		$output .= '<br/>';
		$output .= $this->city_name;
		$output .= '<br/>';
		$output .= $this->subdivision_name . ' ' . $this->postal_code;
		$output .= '<br/>';
		$output .= $this->country;


		return $output;


	}



}

?>
