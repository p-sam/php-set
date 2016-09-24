# php-set
A PHP Set class limited to scalar using hashmaps

## Example

```php
use SP\Set\Set;

$set = Set::fromArray([2,3]);

foreach($set as $k=>$v) {
	var_dump($k);
	var_dump($v);
} 

var_dump($set->toArray());

$set->add(5);
var_dump($set->toArray());

$set->add(3);
var_dump($set->toArray());

$set->remove(3);
var_dump($set->toArray());

$set->remove(1);
var_dump($set->toArray());

var_dump($set->has(1));

var_dump($set->has(2));
```

## Expected Output

```php
int(0)
int(2)
int(1)
int(3)
array(2) {
  [0]=>
  int(2)
  [1]=>
  int(3)
}
array(3) {
  [0]=>
  int(2)
  [1]=>
  int(3)
  [2]=>
  int(5)
}
array(3) {
  [0]=>
  int(2)
  [1]=>
  int(3)
  [2]=>
  int(5)
}
array(2) {
  [0]=>
  int(2)
  [1]=>
  int(5)
}
array(2) {
  [0]=>
  int(2)
  [1]=>
  int(5)
}
bool(false)
bool(true)
```