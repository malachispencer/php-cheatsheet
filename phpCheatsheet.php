<?php

/*
Server-side language.

Lavarel is a PHP framework.

18:17 of PHP For Absolute Beginners | 6.5 Hour Course, Traversy Media - make apache and mysql services i.e. they start automatically when 
you turn on your computer.

<?php ?> is how to embed PHP in HTML.

// or # for single line comments.

Like JavaScript and Ruby, PHP is loosely typed.

Variables are declared with a $ and letter or underscore at the start e.g. $item = ‘sledgehammer’ or $_item = ‘sledgehammer’.

Semicolons are used at the end of a line.

PHP data types are:
1) String
2) Integer
3) Float/Double
4) Boolean
5) Null
6) Array
7) Object
8) Resource

When a variable holding a false boolean value or a null is printed to the browser, nothing is shown.

Like in Ruby, methods can be used with parenthesis or a space e.g:
$quantity = 5;
echo $quantity => 5
echo($quantity) => 5

The gettype function returns the data type of a variable.

The var_dump function prints out information about one or more variables passed in, specifically type, value and length (if it’s a string).

Some variable checking functions are is_int, is_string, is_bool, is_double, is_array etc.

Constants are declared using the define() function i.e. define(‘PI’, 3.14) and you can print the constant using the name of the variable 
e.g. echo(PI) => 3.14.

Arithmetic operations:
1) += add and reassign.
2) -= subtract and reassign.
3) echo $num++ will print the number as it is, then increment its value.
4) echo ++$num will increment the value, then print the number.
5) Same applies for $num-- and --$num.

Number checking functions include:
- Float/Double: is_float(), is_double().
- Integer: is_int(), is_integer().
- Numeric: is_numeric() e.g. is_numeric(‘3.45’) => true, is_numeric(‘5g’) => false.

Number conversions:
- String to Float: $age = '27.10'; $age = (float)$age; echo gettype($age) => double.
- Float to Int: $age = (int)$age; echo gettype($age) => integer
- We can also use the floatval() and intval() functions.

Math functions include abs(), pow(), sqrt(), max(), min(), round(), floor(), ceil().

The number_format() functions allows us to format a number. The first parameter is the number, second parameter is the number of decimal 
places (0 by default), the third parameter is the decimal divider (‘.’ by default) and the fourth parameter is the thousands separator. 
For example, number_format(2245874.1234, 2, ‘.’, ‘,’) => 2,245,874.12.

Double quotations allows you to do string interpolation by directly placing the variable inside the quotes e.g. $name = ‘Malachi’, 
echo “My name is $name” => ‘My name is Malachi’.

String concatenation is performed using a ‘.’:
1  $name = ‘Malachi’
2  $last_name = ‘Spencer’
3  echo $name.’ ‘.$last_name
T  ‘Malachi Spencer’

Double and single quotations allow you to do multiline strings by default. nl2br() function allows you to do this when php is embedded in 
html.

Arrays are declared using [] or array().

You can append to an array by for example doing:
1  $products = [‘hammer’’];
2  $products[] = ‘screwdriver’;
3   var_dump($products);
T array(2) {
  [0]=>
  string(6) "hammer"
  [1]=>
  string(11) "screwdriver"
}

Array add/remove functions are array_push(), array_pop(), array_unshift(), array_shift().

The explode() function is used to split a string into an array. The implode() function joins an array into a string.

The in_array() function is the equivalent of includes in JavaScript.

The array_search() function is the equivalent of findIndex in JavaScript. The difference is that when the element is not found, it returns 
false instead of -1.

PHP - like JavaScript - contains a spread operator, which can be used to merge to arrays e.g. [...$products, …$prices].

To print arrays, you can use var_dump() or print_r().

Associative arrays are like hashes in Ruby, they use key-value pairs and come in the form:
1  $product = [
2    'name' => 'axe',
3    'price' => 17.99 
4  ];

To get a value from an associative array is variable[key_name] e.g. $product[‘name’]. To set a value is variable[key_name] = value.

The null coalescing assignment operator allows you to set a value to a key, if that key does not exist yet. It is performed 
variable[key] ??= value e.g. $product['quantity'] ??= 100. It is a shorthand of variable[key] = variable[key] ?? value.

array_keys() and array_values() are the equivalent of Objecy.keys and Object.values in JavaScript.

ksort() sorts an associative array by its keys. asort() sorts an associative array by its values.

Here is an example of a two dimensional array, where each element is an associative array. This is how data will look in PHP when it’s 
come from a REST API or a database:
$products = [
  [ "name" => "Sledgehammer", "price" => 125.75 ],
  [ "name" => "Axe", "price" => 190.50 ],
  [ "name" => "Bandsaw", "price" => 562.131 ],
  [ "name" => "Chisel", "price" => 12.9 ],
  [ "name" => "Hacksaw", "price" => 18.45 ],
];

If/else statements, ternary operators and equality operators are the same as in JavaScript.

For and while loops are exactly the same as in JavaScript.

The foreach function allows you to iterate over the elements of an array, it is structured:
1  foreach ($products as $product) {
2
3  }

To iterate over an associative array, you also use the foreach function:
1  foreach ($products as $key => $value) {
2
3  }

Functions are exactly the same as in JavaScript, including explicit return.

The spread operator can be used for an unlimited number of inputs for a function.

Arrow functions exist in PHP, for example:
1  function arraySum($arr) {
2    return array_reduce($arr, fn($carry, $n) => $carry + $n, 0);
3  } 

Creating a class in PHP:
1   class Product {
2     public $name;
3     public $price;
4     private $code;
5
6     public function __construct($name, $price, $code) {
7       $this->name = $name;
8       $this->price = $price;
9       $this->code = $code;
10    }
11  }

Creating an instance of a class is done the same as in JavaScript e.g. $axe = new Product('axe', 17.99, 'ezy-123456');.

Classes can have public and private properties and methods, they can also have static properties and methods, which are class properties 
and methods of the class itself, not instances.

Here we use a class method to create an instance of the class. When calling a class method or working with a class property we use the :: 
symbol.

class Product {
  public $name;
  public $price;
  private $code;

  public function __construct($name, $price, $code) {
    $this->name = $name;
    $this->price = $price;
    $this->code = $code;
  }

  public static function create($name, $price, $code) {
    return new Product(
      $name,
      $price,
      $code
    );
  }
}

$axe = Product::create('axe', 17.99, 'ezy-123456');

Recently, PHP has added typing, so you can declare the type of variables. If you want to allow a variable to have a type, but also be null, 
you would do for example private ?int code;.

Like in JavaScript, the extends keyword is used for inheritance.

*/