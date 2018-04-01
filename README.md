# Mettrr Tech Test

Welcome to the mettrr backend tech test!

## Installation and setup

First ensure you have PHP and [composer]('https://getcomposer.org/') installed
on your local machine. Then clone or fork this repository and run the following
command to install the dependencies:

> composer install

This test should take roughly one or two hours and should be completed using
PHP, ideally with a test suite in place. The repository comes with PHPUnit as a
dependency but feel free to use whichever testing framework you are comfortable
with.

Please start by creating a branch from master with the naming convention -
"{your name}/mettrr-tech-test".

## The Test

Your goal is to create a max-min normalizer that will scale a set of values so
that the maximum value becomes 1, the minimum value becomes 0 and all other
values lie in between, for example:

| Data    | Normalized Data |
|:-------:|:---------------:|
|   4     |     0.22        |
|   9     |     0.78        |
|   11    |      1          |
|   2     |      0          |

There is a simple formula that can be used to work out the normalized values
which I'll leave as a research piece.

The data to be normalized will be of this structure:

```php
[
  [
    "name" => "John",
    "height" => "173"
  ],
  [
    "name" => "Jane",
    "height" => "178"
  ],
  [
    "name" => "Sarah",
    "height" => "166"
  ],
  [
    "name" => "Ian",
    "height" => "180"
  ]
]
```

In this example I'd like to normalize the height of each person. You may return
the results in whichever way you see fit. Please note that the height data may
vary.

Feel free to use whatever third party packages or dependencies you think may
help to simplify this test but please be prepared to justify your decision to
use them.

If at any stage you have any questions, please contact Dom at db@mettrr.com.

Once you are done, you can push your changes to your branch and create a pull
request to master, tagging @dbatten5 in it and followed by an email to myself
(address above) to confirm your completion.

## Bonus points

If you find yourself with a bit of spare time, consider the following scenario:

In the future I may wish add some more data to each person, for example their
age and foot size like so:

```php
[
  [
    "name" => "John",
    "height" => "173",
    "age" => "28",
    "foot_size" => "9"
  ],
  ...
]
```

Modify your solution so that more than one data set can be normalized. Also
allow your max and min to be varied, eg the minimum could become 0 and the
maximum could be 100.
