<?php
use Luracast\Restler\RestException;
class Currency
{
    function format($number = null)
    {
        /**
         * There is a better way to validate in Restler 3
         * Here we manually validate to show the use of exceptions
         */
        if (is_null($number)) {
            throw new RestException(400);
        }
        if (!is_numeric($number)) {
            throw new RestException(400, 'not a valid number');
        }
        $formatter = new NumberFormatter('en_US', NumberFormatter::CURRENCY);
        return $formatter->formatCurrency($number, 'USD');
    }
}