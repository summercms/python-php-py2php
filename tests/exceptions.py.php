<?php
require_once('py2phplib.php');
class ZeroDivisionException extends Exception {
}
class ValidationException extends Exception {
}
try {
    pyjslib_printFunc('hi');
}
catch(ZeroDivisionError $e) {
    }
function div($x,$y) {
    try {
        if (($x < 0) || ($y < 0)) {
            throw new ValidationException;
        }
        if (($y == 0)) {
            throw new ZeroDivisionException;
        }
        $result = ($x / $y);
    }
    catch(ZeroDivisionException $e) {
                pyjslib_printFunc('division by zero!');
    }
    catch(ValidationException $e) {
                pyjslib_printFunc('Values must be greater than 0!');
    }
    finally {
        pyjslib_printFunc('executing finally clause');
    }
}
div(-1, 3);
div(4, 0);
div(0, 4);
