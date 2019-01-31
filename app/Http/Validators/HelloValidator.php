<?php
/**
 * Created by IntelliJ IDEA.
 * User: takenakariku
 * Date: 2019-01-31
 * Time: 17:16
 */

namespace App\Http\Validators;

use Validator;

class HelloValidator extends Validator
{
    public function validateHello($attribute, $value, $parameters)
    {
        return $value % 2 == 0;
    }
}
