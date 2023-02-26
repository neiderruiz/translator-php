## Translate text php

```
composer require neiderruiz/translator-php
```

# how using translator

```
// import pachage
use neiderruiz\translatorphp\Translate;

// run instance of translator
$traductor = new Translate();
$message = $traductor->translate('hello world from PHP', 'es', 'en');
echo $message; // Hola mundo desde PHP
```
