This repository is meant to be used as an example for the issue https://github.com/phpstan/phpstan/issues/6585
It uses the predefined github action `extdn/github-actions-m2/magento-phpstan` to run phpstan on push and pull request events.
To reproduce the issue, simply create a pull request with an empty file or push something unrelated.
This will trigger the phpstan action and you will (in most of the cases) get the following error:
```
 ------ --------------------------------------------------------------------- 
  Line   Model/FailingFunction.php                                            
 ------ --------------------------------------------------------------------- 
  11     Method CustomGento\Phpstan\Model\FailingFunction::failingFunction()  
         should return array but return statement is missing.                 
 ------ --------------------------------------------------------------------- 
```

As you can clearly see in the file, this is obiously not the case.

```
    public function failingFunction(): array
    {
        return [];
    }
```

I would expect a green checkmark, since the code is valid and the phpstan check should pass.
