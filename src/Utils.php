<?php
/**
 * Created by PhpStorm.
 * User: hocvt
 * Date: 5/22/16
 * Time: 18:27
 */

namespace VuThaiHoc\FlarumVnSlug;


use Cocur\Slugify\Slugify;

class Utils {
	public static $MY_RULE = [

		/* Vietnamese */
		'ạ' => 'a',
		'á' => 'a',
		'à' => 'a',
		'ả' => 'a',
		'ã' => 'a',

		'â' => 'a',
		'ầ' => 'a',
		'ấ' => 'a',
		'ậ' => 'a',
		'ẩ' => 'a',
		'ẫ' => 'a',

		'ă' => 'a',
		'ằ' => 'a',
		'ắ' => 'a',
		'ặ' => 'a',
		'ẳ' => 'a',
		'ẵ' => 'a',

		'ẹ' => 'e',
		'è' => 'e',
		'é' => 'e',
		'ẽ' => 'e',
		'ẻ' => 'e',

		'ê' => 'e',
		'ề' => 'e',
		'ế' => 'e',
		'ệ' => 'e',
		'ể' => 'e',
		'ễ' => 'e',

		'ị' => 'i',
		'ỉ' => 'i',
		'í' => 'i',
		'ì' => 'i',
		'ĩ' => 'i',

		'ò' => 'o',
		'ó' => 'o',
		'õ' => 'o',
		'ọ' => 'o',
		'ỏ' => 'o',

		'ô' => 'o',
		'ồ' => 'o',
		'ố' => 'o',
		'ộ' => 'o',
		'ổ' => 'o',
		'ỗ' => 'o',

		'ơ' => 'o',
		'ờ' => 'o',
		'ớ' => 'o',
		'ợ' => 'o',
		'ở' => 'o',
		'ỡ' => 'o',

		'ù' => 'u',
		'ú' => 'u',
		'ụ' => 'u',
		'ũ' => 'u',
		'ủ' => 'u',

		'ư' => 'u',
		'ừ' => 'u',
		'ứ' => 'u',
		'ự' => 'u',
		'ử' => 'u',
		'ữ' => 'u',

		'ỳ' => 'y',
		'ý' => 'y',
		'ỵ' => 'y',
		'ỷ' => 'y',
		'ỹ' => 'y',

		"Ạ" => "a",
		"Á" => "a",
		"À" => "a",
		"Ả" => "a",
		"Ã" => "a",
		"Â" => "a",
		"Ầ" => "a",
		"Ấ" => "a",
		"Ậ" => "a",
		"Ẩ" => "a",
		"Ẫ" => "a",
		"Ă" => "a",
		"Ằ" => "a",
		"Ắ" => "a",
		"Ặ" => "a",
		"Ẳ" => "a",
		"Ẵ" => "a",
		"Ẹ" => "e",
		"È" => "e",
		"É" => "e",
		"Ẽ" => "e",
		"Ẻ" => "e",
		"Ê" => "e",
		"Ề" => "e",
		"Ế" => "e",
		"Ệ" => "e",
		"Ể" => "e",
		"Ễ" => "e",
		"Ị" => "i",
		"Ỉ" => "i",
		"Í" => "i",
		"Ì" => "i",
		"Ĩ" => "i",
		"Ò" => "o",
		"Ó" => "o",
		"Õ" => "o",
		"Ọ" => "o",
		"Ỏ" => "o",
		"Ô" => "o",
		"Ồ" => "o",
		"Ố" => "o",
		"Ộ" => "o",
		"Ổ" => "o",
		"Ỗ" => "o",
		"Ơ" => "o",
		"Ờ" => "o",
		"Ớ" => "o",
		"Ợ" => "o",
		"Ở" => "o",
		"Ỡ" => "o",
		"Ù" => "u",
		"Ú" => "u",
		"Ụ" => "u",
		"Ũ" => "u",
		"Ủ" => "u",
		"Ư" => "u",
		"Ừ" => "u",
		"Ứ" => "u",
		"Ự" => "u",
		"Ử" => "u",
		"Ữ" => "u",
		"Ỳ" => "y",
		"Ý" => "y",
		"Ỵ" => "y",
		"Ỷ" => "y",
		"Ỹ" => "y",
	];

	public static $MY_RULE1 = [

		/* Vietnamese */
		'ạ' => 'ạ',
		'á' => 'á',
		'à' => 'à',
		'ả' => 'ả',
		'ã' => 'ã',

		'â' => 'â',
		'ầ' => 'ầ',
		'ấ' => 'ấ',
		'ậ' => 'ậ',
		'ẩ' => 'ẩ',
		'ẫ' => 'ẫ',

		'ă' => 'ă',
		'ằ' => 'ằ',
		'ắ' => 'ắ',
		'ặ' => 'ặ',
		'ẳ' => 'ẳ',
		'ẵ' => 'ẵ',

		'ẹ' => 'ẹ',
		'è' => 'è',
		'é' => 'é',
		'ẽ' => 'ẽ',
		'ẻ' => 'ẻ',

		'ê' => 'ê',
		'ề' => 'ề',
		'ế' => 'ế',
		'ệ' => 'ệ',
		'ể' => 'ể',
		'ễ' => 'ễ',

		'ị' => 'ị',
		'ỉ' => 'ỉ',
		'í' => 'í',
		'ì' => 'ì',
		'ĩ' => 'ĩ',

		'ò' => 'ò',
		'ó' => 'ó',
		'õ' => 'õ',
		'ọ' => 'ọ',
		'ỏ' => 'ỏ',

		'ô' => 'ô',
		'ồ' => 'ồ',
		'ố' => 'ố',
		'ộ' => 'ộ',
		'ổ' => 'ổ',
		'ỗ' => 'ỗ',

		'ơ' => 'ơ',
		'ờ' => 'ờ',
		'ớ' => 'ớ',
		'ợ' => 'ợ',
		'ở' => 'ở',
		'ỡ' => 'ỡ',

		'ù' => 'ù',
		'ú' => 'ú',
		'ụ' => 'ụ',
		'ũ' => 'ũ',
		'ủ' => 'ủ',

		'ư' => 'ư',
		'ừ' => 'ừ',
		'ứ' => 'ứ',
		'ự' => 'ự',
		'ử' => 'ử',
		'ữ' => 'ữ',

		'ỳ' => 'ỳ',
		'ý' => 'ý',
		'ỵ' => 'ỵ',
		'ỷ' => 'ỷ',
		'ỹ' => 'ỹ',

		"Ạ" => "Ạ",
		"Á" => "Á",
		"À" => "À",
		"Ả" => "Ả",
		"Ã" => "Ã",
		"Â" => "Â",
		"Ầ" => "Ầ",
		"Ấ" => "Ấ",
		"Ậ" => "Ậ",
		"Ẩ" => "Ẩ",
		"Ẫ" => "Ẫ",
		"Ă" => "Ă",
		"Ằ" => "Ằ",
		"Ắ" => "Ắ",
		"Ặ" => "Ặ",
		"Ẳ" => "Ẳ",
		"Ẵ" => "Ẵ",
		"Ẹ" => "Ẹ",
		"È" => "È",
		"É" => "É",
		"Ẽ" => "Ẽ",
		"Ẻ" => "Ẻ",
		"Ê" => "Ê",
		"Ề" => "Ề",
		"Ế" => "Ế",
		"Ệ" => "Ệ",
		"Ể" => "Ể",
		"Ễ" => "Ễ",
		"Ị" => "Ị",
		"Ỉ" => "Ỉ",
		"Í" => "Í",
		"Ì" => "Ì",
		"Ĩ" => "Ĩ",
		"Ò" => "Ò",
		"Ó" => "Ó",
		"Õ" => "Õ",
		"Ọ" => "Ọ",
		"Ỏ" => "Ỏ",
		"Ô" => "Ô",
		"Ồ" => "Ồ",
		"Ố" => "Ố",
		"Ộ" => "Ộ",
		"Ổ" => "Ổ",
		"Ỗ" => "Ỗ",
		"Ơ" => "Ơ",
		"Ờ" => "Ờ",
		"Ớ" => "Ớ",
		"Ợ" => "Ợ",
		"Ở" => "Ở",
		"Ỡ" => "Ỡ",
		"Ù" => "Ù",
		"Ú" => "Ú",
		"Ụ" => "Ụ",
		"Ũ" => "Ũ",
		"Ủ" => "Ủ",
		"Ư" => "Ư",
		"Ừ" => "Ừ",
		"Ứ" => "Ứ",
		"Ự" => "Ự",
		"Ử" => "Ử",
		"Ữ" => "Ữ",
		"Ỳ" => "Ỳ",
		"Ý" => "Ý",
		"Ỵ" => "Ỵ",
		"Ỷ" => "Ỷ",
		"Ỹ" => "Ỹ",
	];

	/**
	 * @param $string
	 * @return string
	 */
	public static function genSlug($string)
	{
//		return $string;
		//$accepted = implode(self::$MY_RULE);
		//$replace_char = "/([^a-zA-Z0-9" . $accepted . "]|-)+/u";
		//echo $replace_char;
		$slug_engine = new Slugify();//new Slugify($replace_char);
		$slug_engine->addRules(self::$MY_RULE);
		$slug_engine->addRule('#', '-sharp-');
		$slug_engine->addRule('+', '-plus-');
		return $slug_engine->slugify($string);
	}
}
