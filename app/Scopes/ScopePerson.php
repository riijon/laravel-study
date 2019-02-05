<?php
/**
 * Created by IntelliJ IDEA.
 * User: takenakariku
 * Date: 2019-02-01
 * Time: 19:19
 */

namespace App\Scopes;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class ScopePerson implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $builder->where('age', '>', 20);
    }
}
