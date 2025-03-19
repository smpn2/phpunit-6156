Reproduction testcase for issue https://github.com/sebastianbergmann/phpunit/issues/6156

Running PHPStan with `composer analyze` will yield the following error:

```
------ ---------------------------------------------------------------------------------------------------- 
  Line   test\MyServiceTest.php
 ------ ----------------------------------------------------------------------------------------------------
  :16    Call to method method() on an unknown class PHPUnit\Framework\MockObject\Builder\InvocationMocker.
         🪪  class.notFound
         💡 Learn more at https://phpstan.org/user-guide/discovering-symbols
 ------ ----------------------------------------------------------------------------------------------------
```

Running the sam analysis with PHPUnit 11 do work as expected:

```
composer require --dev --with-all-dependencies phpunit/phpunit:^11.5
composer analyze


 [OK] No errors

```
