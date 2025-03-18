Reproduction testcase for issue https://github.com/sebastianbergmann/phpunit/issues/6154

Running PHPStan with `composer analyze` will yield the following error:

```
 ------ -----------------------------------------------------------------
  Line   test/MyServiceTest.php
 ------ -----------------------------------------------------------------
  16     Call to an undefined method
         PHPUnit\Framework\MockObject\Builder\InvocationStubber::with().
         🪪  method.notFound
 ------ -----------------------------------------------------------------
```

Running the sam analysis with PHPUnit 11 do work as expected:

```
composer require --dev --with-all-dependencies phpunit/phpunit:^11.5
composer analyze


 [OK] No errors

```
