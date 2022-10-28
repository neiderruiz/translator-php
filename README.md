## Translate text php

```
composer require neidercode/translator-php
```

# how using translator

```
// import pachage
use neidercode\translatorphp\Translate;

// run instance of translator
$traductor = new Translate();
$message = $traductor->translate('hello world from PHP', 'es', 'en');
echo $message; // Hola mundo desde PHP
```
