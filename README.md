# hord-text-diff

A text-based diff engine and renderers for multiple diff output formats

Based on project https://github.com/horde/Text_Diff alpha fork no production version and has been ready to production
use with support InlineRenderer.

# Why exactly current version lib?

- The most relevant on 2024-01-01
- Support php 8.3
- PSR-4
- Fixed some bugs

# Why Text diff by Horde?

Is the best lib for text diff in php. Is wise and experienced.

Advantages over analogues:

- diff by word inner each line
- diff by symbols inner each line
- tuning the output format
- the best speed in php
- the bets memory optimization in php

# Optimiztions

For very long strings, there is a trick: divide long strings before use diff

# Examples

```php
use Topvisor\Horde\Text\Diff;

$diff = Diff\Diff::fromFileLineArrays($linesA, $linesB);

// calc diff as word
$renderer = new Diff\InlineRenderer();
$res = $renderer->render($diff);
var_dump($res);

// calc diff as symbol
$renderer = new Topvisor\Horde\Text\Diff\InlineRenderer(['split_characters' => true]);
$res2 = $renderer->render($diff);
var_dump($res2);
```

# License

See: https://github.com/horde/Text_Diff/