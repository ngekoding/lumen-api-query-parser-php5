<?php

namespace LumenApiQueryParser\Params;

interface SortInterface
{
    public function getField();
    public function getDirection();
}