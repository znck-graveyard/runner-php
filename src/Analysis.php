<?php namespace Znck\Runner;

/**
 * This file belongs to runner-php.
 *
 * Author: Rahul Kadyan, <hi@znck.me>
 * Find license in root directory of this project.
 */
use Symfony\Component\Yaml\Yaml;

/**
 * Class Analysis
 *
 * @package Znck\Runner
 * @property-read USER_TIME
 * @property-read SYS_TIME
 * @property-read TOTAL_TIME
 * @property-read MEMORY
 * @property-read MINOR_FAULTS
 * @property-read MAJOR_FAULTS
 * @property-read INPUT_COUNT
 * @property-read OUTPUT_COUNT
 * @property-read VOLUNTRY_CONTEXT_SWITCH
 * @property-read INVOLUNTRY_CONTEXT_SWITCH
 */
class Analysis
{
    /**
     * @type array
     */
    protected $data;


    /**
     * Analysis constructor.
     *
     * @param string $content
     */
    public function __construct($content)
    {
        $this->data = Yaml::parse($content);
    }

    /**
     * @param $name
     *
     * @return null
     */
    function __get($name)
    {
        $name = strtoupper($name);
        if (array_key_exists($name)) {
            return $this->data[$name];
        }

        return null;
    }
}