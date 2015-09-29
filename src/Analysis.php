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
 * @property-read int $USER_TIME
 * @property-read int $SYS_TIME
 * @property-read int $TOTAL_TIME
 * @property-read int $MEMORY
 * @property-read int $MINOR_FAULTS
 * @property-read int $MAJOR_FAULTS
 * @property-read int $INPUT_COUNT
 * @property-read int $OUTPUT_COUNT
 * @property-read int $VOLUNTARY_CONTEXT_SWITCH
 * @property-read int $INVOLUNTARY_CONTEXT_SWITCH
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