# Litwicki Common

A set of helper functions and utilities with a wide variety of use.

* `Litwicki\Common\Common` is great for various string manipulations, validations, and quick formatting.
* `Litwicki\Common\Form` provides helper methods to build arrays and form `select` for common city, state, country elements.
* `Litwicki\Common\Http` provides a helper to parse the Http User Agent to a more readable format.
* `Litwicki\Common\Object` includes methods to convert objects to xml, json, array, and vice versa.
* `Litwicki\Common\TimeAgo` allows you to parse a `DateTime` into a readable string of hours, minutes, and/or seconds ago.

## Install

    $ composer require "litwicki/common"
    
## Usage

Include each of the helpers individually.

    use Litwicki\Common\Common;
    use Litwicki\Common\Form;
    use Litwicki\Common\Http;
    use Litwicki\Common\Object;
    use Litwicki\Common\TimeAgo;