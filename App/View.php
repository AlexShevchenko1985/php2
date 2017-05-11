<?php

namespace App;

class View
implements \Countable
{
    use ViewTrait;

    public function count()
    {
        return count($this->data);
    }

    public function renderer($template)
    {
        foreach ($this->data as $key => $value) {
            $$key = $value;
        }

        include $template;
    }

}