<?php

namespace LumenApiQueryParser\Params;

interface FilterInterface
{
    public function getField();
    public function getOperator();
    public function getValue();
}