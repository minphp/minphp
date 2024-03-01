<?php

namespace Pages;

use MinPhp\Page\Contracts\PageInterface;

class DefaultPage implements PageInterface
{
    public function render(): string
    {
        return 'Hello from DefaultPage';
    }
}