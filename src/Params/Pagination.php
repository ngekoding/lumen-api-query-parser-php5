<?php

namespace LumenApiQueryParser\Params;

class Pagination implements PaginationInterface
{
    protected $limit;
    protected $page;
    public function __construct($limit = null, $page = null)
    {
        $this->setLimit($limit);
        $this->setPage($page);
    }
    public function setLimit($limit)
    {
        $this->limit = $limit;
    }
    public function getLimit()
    {
        return $this->limit;
    }
    public function setPage($page)
    {
        $this->page = $page;
    }
    public function getPage()
    {
        return $this->page;
    }
}