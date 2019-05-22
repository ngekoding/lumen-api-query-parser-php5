<?php

namespace LumenApiQueryParser\Params;

class Sort implements SortInterface
{
    protected $field;
    protected $direction;
    public function __construct($field, $direction = 'ASC')
    {
        $this->setField($field);
        $this->setDirection($direction);
    }
    public function setField($field)
    {
        $this->field = $field;
    }
    public function getField()
    {
        return $this->field;
    }
    public function setDirection($direction)
    {
        $this->direction = $direction;
    }
    public function getDirection()
    {
        return $this->direction;
    }
}