<?php

namespace CoffeeBike\SalesforceBundle\Http;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
class Filter
{
    /**
     * @var string
     */
    private $field;

    /**
     * @var string
     */
    private $operator;

    /**
     * @var string
     */
    private $value;

    /**
     * @param string $field
     * @param string $operator
     * @param string $value
     */
    public function __construct(string $field, string $operator, string $value)
    {
        $this->field = $field;
        $this->operator = $operator;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getField(): string
    {
        return $this->field;
    }

    /**
     * @return string
     */
    public function getOperator(): string
    {
        return $this->operator;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $field
     * @param string $value
     *
     * @return Filter
     */
    public static function equals(string $field, string $value): self
    {
        return new static($field, '==', $value);
    }

    /**
     * @param string $field
     * @param string $value
     *
     * @return Filter
     */
    public static function notEquals(string $field, string $value): self
    {
        return new static($field, '!=', $value);
    }
}
