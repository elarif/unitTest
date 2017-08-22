<?php

declare(strict_types=1);

final class Email
{

	public static function validate($email):bool{
		$result = true;
		if(Email::hasOnlyOneArobase($email) == false || Email::hasArobase($email)== false)
		{
			$result = false;
		}
		return $result;
	}

	private static function hasArobase($email):bool{
		$result = (strpos($email,'@') !==false);
		return $result;
	}

	private static function hasOnlyOneArobase($email):bool{
		$result = (substr_count($email,'@') == 1);
		return $result;

	}
}
