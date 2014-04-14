<?php

namespace Bing\Production\Reporting;

final class PublisherUsagePerformanceReportRequest extends ReportRequest
{
    public $Aggregation;
    public $Columns;
    public $Filter;
    public $Scope;
    public $Time;
}