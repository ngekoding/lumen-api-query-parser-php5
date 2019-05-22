<?php

namespace LumenApiQueryParser\Params;

class RequestParams implements RequestParamsInterface
{
    protected $filters = [];
    protected $sorts = [];
    protected $pagination;
    protected $connections = [];
    public function addFilter(FilterInterface $filter)
    {
        $this->filters[] = $filter;
    }
    public function hasFilter()
    {
        return (bool) count($this->filters);
    }
    public function getFilters()
    {
        return $this->filters;
    }
    public function addSort(SortInterface $sort)
    {
        $this->sorts[] = $sort;
    }
    public function hasSort()
    {
        return (bool) count($this->sorts);
    }
    public function getSorts()
    {
        return $this->sorts;
    }
    public function addPagination(PaginationInterface $pagination)
    {
        $this->pagination = $pagination;
    }
    public function hasPagination()
    {
        return $this->pagination !== null;
    }
    public function getPagination()
    {
        return $this->pagination;
    }
    public function addConnection(ConnectionInterface $connection)
    {
        $this->connections[] = $connection;
    }
    public function hasConnection()
    {
        return (bool) count($this->connections);
    }
    public function getConnections()
    {
        return $this->connections;
    }
}