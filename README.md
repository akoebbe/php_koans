# PHP Koans

PHP Koans is heavily based on Greg Malcolm's [Python Koans](https://github.com/gregmalcolm/python_koans), which is based on Edgecase's [Ruby Koans](http://rubykoans.com/). Much credit to both projects. Thank you!

![PHP Koans Screenshot](screenshots/php_koans.png?raw=true "PHP Koans Screenshot")

PHP Koans is an interactive tutorial for learning the PHP programming language by making tests pass.

Most tests are fixed by filling the missing parts of assert functions. Eg:

```php
$this->assertEquals(__, 1+2);
```

which can be fixed by replacing the `__` part with the appropriate code:

```php
$this->assertEquals(3, 1+2);
```

Occasionally you will encounter some failing tests that are already filled out. In these cases, you will need to finish implementing some code to progress. For example, there is an exercise for writing some code that will tell you if a triangle is equilateral, isosceles or scalene.

As well as being a great way to learn some PHP, it is also a good way to get a taste of Test Driven Development (TDD).

## Downloading PHP Koans

PHP Koans is available through git on Github:

https://github.com/akoebbe/php_koans

or

[Download a zipped copy](https://github.com/akoebbe/php_koans/archive/master.zip)

## Installing PHP Koans

Aside from downloading or checking out the latest version of PHP Koans, you need to install the PHP interpreter.

PHP Koans was written using PHP 8.1. It is recommended that you use PHP 8.1+, though it may work in earlier versions, don't hold your breath.

Only the command line interface (CLI) for PHP is needed as we will not be testing web development.

### Windows

1. Download the zipped binaries from https://windows.php.net/download/ (non-thread safe version is fine)
2. 

### macOS

macOS bundles PHP, so you may not need to do anything depending on the version installed. To check which version you have open the Terminal app and type

```
php --version
```

If you see version 8.1 or higher, you're good to go! If not, then you will want to install a newer version with [Homebrew](https://brew.sh/).

#### Homebrew

1. Go to  https://brew.sh/
2. Copy the command listed in the Install section and paste it into the Terminal app
3. Follow the install instructions
4. Run `brew install php` to install the latest version
5. Open a new terminal window or run `source ~/.bash_profile`
6. Run `php --version`, you should now see the latest version of PHP reported

### Linux

If you are running Linux, you will use your distributions package manager to install PHP. A few common distribution methods:

#### Debian/Ubuntu (and variants)
```
apt-get install php-cli
```

#### Fedora

```
yum install php
```

If that version is outdated, you can use Remi's Repository to install a newer version. See [section 2.1 on Remi's site](https://blog.remirepo.net/pages/Config-en)

#### Arch

```
sudo pacman -S php
```

### Dockerization

If you prefer not to install php in your system, you can use a docker container.

To build the image run a terminal, go to the php_koans folder and run:

```
docker build . -t 'php-koans'
```

Every time you want to execute the suite run:

```
docker run -ti php-koans
```

## Getting Started

From a *nix terminal or windows command prompt go to the php_koans folder and run:

```
php contempate_koans
```

In my I fire up my Terminal app and run this:

![PHP Koans Screenshot](screenshots/php_koans-step1.png?raw=true "PHP Koans First Run")


Apparently, a test failed:

```
Failed asserting that false is true.
```

It also tells me exactly where the problem is, it's an assert on line 15 of .\koans\AssertKoans.php. This one is easy, just change `FALSE` to `TRUE` to make the test pass.

## PHPUnit

This koans project uses Sebastian Bergmann's wonderful [PHPUnit](https://phpunit.de/) command ([source code](https://github.com/sebastianbergmann/phpunit)). The PHAR binary is included in this project for convenience and to lower the setup curve. It has been renamed from `phpunit` to `contemplate_koans` to fit with the theme of this project. See `LICENSE_PHPUnit` for the relevant license information.

## Work in Progress

This project and document are a work in progress. There is still much to do and many people to thank. Please bear with me (and contribute!) as the project progresses.

These are the list of koans from Python Koans to be ported over to PHP Koans.

- [~~AboutAsserts~~](https://github.com/gregmalcolm/python_koans/blob/master/koans/about_asserts.py)
- [~~AboutStrings~~](https://github.com/gregmalcolm/python_koans/blob/master/koans/about_strings.py)
- [AboutNone](https://github.com/gregmalcolm/python_koans/blob/master/koans/about_none.py)
- [AboutLists](https://github.com/gregmalcolm/python_koans/blob/master/koans/about_lists.py)
- [AboutListAssignments](https://github.com/gregmalcolm/python_koans/blob/master/koans/about_list_assignments.py)
- [AboutDictionaries](https://github.com/gregmalcolm/python_koans/blob/master/koans/about_dictionaries.py)
- [~~AboutStringManipulation~~](https://github.com/gregmalcolm/python_koans/blob/master/koans/about_string_manipulation.py)
- [AboutTuples](https://github.com/gregmalcolm/python_koans/blob/master/koans/about_tuples.py)
- [AboutMethods](https://github.com/gregmalcolm/python_koans/blob/master/koans/about_methods.py)
- [AboutControlStatements](https://github.com/gregmalcolm/python_koans/blob/master/koans/about_control_statements.py)
- [AboutTrueAndFalse](https://github.com/gregmalcolm/python_koans/blob/master/koans/about_true_and_false.py)
- [AboutSets](https://github.com/gregmalcolm/python_koans/blob/master/koans/about_sets.py)
- [AboutTriangleProject](https://github.com/gregmalcolm/python_koans/blob/master/koans/about_triangle_project.py)
- [AboutExceptions](https://github.com/gregmalcolm/python_koans/blob/master/koans/about_exceptions.py)
- [AboutTriangleProject2](https://github.com/gregmalcolm/python_koans/blob/master/koans/about_triangle_project2.py)
- [AboutIteration](https://github.com/gregmalcolm/python_koans/blob/master/koans/about_iteration.py)
- [AboutComprehension](https://github.com/gregmalcolm/python_koans/blob/master/koans/about_comprehension.py)
- [AboutGenerators](https://github.com/gregmalcolm/python_koans/blob/master/koans/about_generators.py)
- [AboutLambdas](https://github.com/gregmalcolm/python_koans/blob/master/koans/about_lambdas.py)
- [AboutScoringProject](https://github.com/gregmalcolm/python_koans/blob/master/koans/about_scoring_project.py)
- [AboutClasses](https://github.com/gregmalcolm/python_koans/blob/master/koans/about_classes.py)
- [AboutNewStyleClasses](https://github.com/gregmalcolm/python_koans/blob/master/koans/about_new_style_classes.py)
- [AboutWithStatements](https://github.com/gregmalcolm/python_koans/blob/master/koans/about_with_statements.py)
- [AboutMonkeyPatching](https://github.com/gregmalcolm/python_koans/blob/master/koans/about_monkey_patching.py)
- [AboutDiceProject](https://github.com/gregmalcolm/python_koans/blob/master/koans/about_dice_project.py)
- [AboutMethodBindings](https://github.com/gregmalcolm/python_koans/blob/master/koans/about_method_bindings.py)
- [AboutDecoratingWithFunctions](https://github.com/gregmalcolm/python_koans/blob/master/koans/about_decorating_with_functions.py)
- [AboutDecoratingWithClasses](https://github.com/gregmalcolm/python_koans/blob/master/koans/about_decorating_with_classes.py)
- [AboutInheritance](https://github.com/gregmalcolm/python_koans/blob/master/koans/about_inheritance.py)
- [AboutMultipleInheritance](https://github.com/gregmalcolm/python_koans/blob/master/koans/about_multiple_inheritance.py)
- [AboutScope](https://github.com/gregmalcolm/python_koans/blob/master/koans/about_scope.py)
- [AboutModules](https://github.com/gregmalcolm/python_koans/blob/master/koans/about_modules.py)
- [AboutPackages](https://github.com/gregmalcolm/python_koans/blob/master/koans/about_packages.py)
- [AboutClassAttributes](https://github.com/gregmalcolm/python_koans/blob/master/koans/about_class_attributes.py)
- [AboutAttributeAccess](https://github.com/gregmalcolm/python_koans/blob/master/koans/about_attribute_access.py)
- [AboutDeletingObjects](https://github.com/gregmalcolm/python_koans/blob/master/koans/about_deleting_objects.py)
- [AboutProxyObjectProject](https://github.com/gregmalcolm/python_koans/blob/master/koans/about_proxy_object_project.py)
- TelevisionTest
- [AboutExtraCredit](https://github.com/gregmalcolm/python_koans/blob/master/koans/about_extra_credit.py)
- [AboutRegex](https://github.com/gregmalcolm/python_koans/blob/master/koans/about_regex.py)
