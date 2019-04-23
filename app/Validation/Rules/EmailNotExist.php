<?php

namespace App\Validation\Rules;

use App\Models\User;
use Respect\Validation\Rules\AbstractRule;

/**
 * 
 */
class EmailNotExist extends AbstractRule
{
	
	function validate($input)
	{
		return User::where('email', $input)->count() > 0;
	}
}