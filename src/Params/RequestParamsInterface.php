<?php

namespace LumenApiQueryParser\Params;

interface RequestParamsInterface
{
    public function hasFilter();
    public function getFilters();
    public function hasSort();
    public function getSorts();
    public function hasPagination();
    public function getPagination();
    public function hasConnection();
    public function getConnections();
}