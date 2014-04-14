<?php

namespace Bing\Production\Reporting;

final class DestinationUrlPerformanceReportRequest extends ReportRequest
{
    public $Aggregation;
    public $Columns;
    public $Filter;
    public $Scope;
    public $Time;
}