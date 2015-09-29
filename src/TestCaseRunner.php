<?php namespace Znck\Runner;

/**
 * This file belongs to runner-php.
 *
 * Author: Rahul Kadyan, <hi@znck.me>
 * Find license in root directory of this project.
 */
class TestCaseRunner
{
    public static function binary()
    {
        $binary = dirname(__DIR__) . '/runner/bin/runner';
        if (!file_exists($binary)) {
            exec("cd ../runner/ && make");
        }

        return $binary;
    }
}