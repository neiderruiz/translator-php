<?php

namespace neidercode\translatorphp\Traits;

use neidercode\translatorphp\Translate;

trait TranslateTrait
{
    public function translate(string $message, string $destination, string $entryLanguage = 'es')
    {
        $translate = new Translate();
        return $translate->translate($message, $destination, $entryLanguage);
    }
}
