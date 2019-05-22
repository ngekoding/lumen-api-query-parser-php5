<?php

namespace LumenApiQueryParser\Params;

interface PaginationInterface
{
    public function getLimit();
    public function getPage();
}