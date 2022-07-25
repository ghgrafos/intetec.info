<?php

namespace App\View\Helper;

use Cake\View\Helper;

class GaleryHelper extends Helper
{
    public function categoryToCss($categories)
    {
        $css = ['cat'];
        foreach ($categories as $category) {
            $css[] = "cat-{$category->slug}";
        }

        return implode(' ', $css);
    }
}
