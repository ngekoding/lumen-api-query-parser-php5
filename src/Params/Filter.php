<?php

namespace LumenApiQueryParser\Params;

class Filter implements FilterInterface
{
    protected $field;
    protected $operator;
    protected $value;
    public function __construct($field, $operator, $value)
    {
        $this->setField($field);
        $this->setOperator($operator);
        $this->setValue($value);
    }
    public function setField($field)
    {
        $this->field = $field;
    }
    public function getField()
    {
        return $this->field;
    }
    public function setOperator($operator)
    {
        $this->operator = $operator;
    }
    public function getOperator()
    {
        return $this->operator;
    }
    public function setValue($value)
    {
        $this->value = $value;
    }
    public function getValue()
    {
        return $this->value;
    }
}