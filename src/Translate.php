<?php

namespace neiderruiz\translatorphp;

class Translate
{
    public function translate(string $message, string $destination, string $entryLanguage = 'en'): ?string
    {
        $translateBase = new BaseTranslate();

        return $translateBase->translate($message, $destination, $entryLanguage);
    }
}
