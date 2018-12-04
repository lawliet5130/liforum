<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class BreadcrumbsComposer
{

	public function compose(View $view){
		$segments=collect(request()->segments())->mapWithKeys(function ($segment, $key) {
            return [
                $segment => implode('/', array_slice(request()->segments(), 0, $key + 1))
            ];
        });

		$view->with('segments',$segments);
	}

}