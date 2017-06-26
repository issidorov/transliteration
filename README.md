Transliteration helper
======================

Install
-------
```
$ composer require issidorov/transliteration
```

Usage
-----

```
use issidorov\transliteration\Translit;

// result 'Novyi-fail.pdf'
$filename = Translit::filename('Новый файл.pdf');

// result 'Novyi fail'
$text = Traslit::text('Новый файл');
```
