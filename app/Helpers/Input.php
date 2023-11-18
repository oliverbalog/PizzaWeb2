<?php

namespace App\Helpers;

use Exception;
use DateTime;

class Input
{
	static $errors = true;

	/**
	 * @param $arr
	 * @param $on
	 * @return void
	 * @throws Exception
	 */
	public static function check($arr, $on = false)
	{
		if($on === false) {
			$on = $_REQUEST;
		}
		foreach($arr as $value) {
			if(empty($on[$value])) {
				self::throwError(ucfirst($value) . ' mező kitöltése kötelező', 900);
			}
		}
	}

	/**
	 * @param $field
	 * @param $value
	 * @return mixed
	 * @throws Exception
	 */
	public static function required($field, $value)
	{
		if(empty($value)) {
			self::throwError(ucfirst($field) . ' kötelező', 900);
		}

		return $value;
	}

	/**
	 * @param $field
	 * @param $value
	 * @return mixed
	 */
	public static function nullable($field, $value)
	{
		return $value;
	}

	/**
	 * @param $value
	 * @return false|mixed
	 * @throws Exception
	 */
	public static function int($field, $value)
	{
		$value = filter_var($value, FILTER_VALIDATE_INT);
		if($value === false) {
			self::throwError(ucfirst($field) . ' integer típusúnak kell legyen', 901);
		}

		return trim($value);
	}

	/**
	 * @param $value
	 * @return false|mixed
	 * @throws Exception
	 */
	public static function float($field, $value)
	{
		$value = filter_var($value, FILTER_VALIDATE_FLOAT);
		if($value === false) {
			self::throwError(ucfirst($field) . ' float típusúnak kell legyen', 901);
		}

		return trim($value);
	}

	/**
	 * @param $value
	 * @return string
	 * @throws Exception
	 */
	public static function string($field, $value)
	{
		if(!is_string($value)) {
			self::throwError(ucfirst($field) . ' stringnek kell legyen', 902);
		}

		return trim(htmlspecialchars($value));
	}

	/**
	 * @param $value
	 * @return mixed
	 */
	public static function bool($field, $value)
	{
		$value = filter_var($value, FILTER_VALIDATE_BOOLEAN);
		if($value === false) {
			self::throwError(ucfirst($field) . ' boolean érték kell', 903);
		}

		return $value;
	}

	/**
	 * @param $value
	 * @return false|mixed
	 * @throws Exception
	 */
	public static function email($field, $value)
	{
		$value = filter_var($value, FILTER_VALIDATE_EMAIL);
		if($value === false) {
			self::throwError(ucfirst($field) . ' valós e-mail címet kell megadni', 904);
		}

		return trim($value);
	}

	/**
	 * @param $value
	 * @return false|mixed
	 * @throws Exception
	 */
	public static function url($field, $value)
	{
		$value = filter_var($value, FILTER_VALIDATE_URL);
		if($value === false) {
			self::throwError(ucfirst($field) . ' valós URL cím kell', 905);
		}

		return $value;
	}

	/**
	 * @param $value
	 * @return false|mixed
	 * @throws Exception
	 */
	public static function datetime($field, $value)
	{
		$date = DateTime::createFromFormat('Y-m-d\TH:i', $value);
		if(!$date || $date->format('Y-m-d\TH:i') <> $value)
		{
			self::throwError(ucfirst($field) . ' datetime típusúnak kell legyen', 906);
		}

		return $value;
	}

	/**
	 * @param $fieldname
	 * @param $value
	 * @param $minimum
	 * @return void
	 */
	public static function tooshort($fieldname, $value, $minimum)
	{
		$length = strlen($value);
		if($length < $minimum) {
			// do error handling
		}
	}

	/**
	 * @param $fieldname
	 * @param $value
	 * @param $maximum
	 * @return void
	 */
	public static function toolong($fieldname, $value, $maximum)
	{
		$length = strlen($value);
		if($length > $maximum) {
			// do error handling
		}
	}

	/**
	 * @param $fieldname
	 * @param $value
	 * @return void
	 */
	public static function badcontent($fieldname, $value)
	{
		if(!preg_match("/^[a-zA-Z0-9 '-]*$/", $value)) {
			// do error handling
		}
	}

	/**
	 * @param $error
	 * @param $errorCode
	 * @return void
	 * @throws Exception
	 */
	public static function throwError($error = 'Hiba feldolgozáskor', $errorCode = 0)
	{
		if(self::$errors === true) {
			throw new Exception($error, $errorCode);
		}
	}
}