<?php

namespace neiderruiz\translatorphp\Traits;

use neiderruiz\translatorphp\Translate;

trait TranslateTrait
{
    public function translate(string $message, string $destination, string $entryLanguage = 'es')
    {
        $translate = new Translate();
        return $translate->translate($message, $destination, $entryLanguage);
    }
}
