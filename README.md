# Litwicki Common

A set of helper functions and utilities with a wide variety of use.

## Utilities

* cURL class

## Helpers

* Several commonly used selection arrays for forms (month, year, country, state, etc)

## Install

    $ composer require "litwicki/common"
    
## Usage

Build an array of states, keyed by abbreviation:

    $ use Litwicki\Common\Common;
    $ $states = Common::getStateOptions();
    $ //$states['IL'] = 'Illinois'; //example
    
Build a cURL object..

    $ use Litwicki\Common\cURL;
    $ $curl = new cURL();
    $ $response = $curl->get('http://example.com");