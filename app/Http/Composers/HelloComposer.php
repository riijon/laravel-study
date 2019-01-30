<?php
/**
 * Created by IntelliJ IDEA.
 * User: takenakariku
 * Date: 2019-01-30
 * Time: 13:46
 */

namespace App\Http\Composers;

use Illuminate\View\View;

class HelloComposer
{
    public function compose(View $view)
    {
        $view->with('view_message', 'this view is "' . $view->getName() . '"!!');
    }
}
