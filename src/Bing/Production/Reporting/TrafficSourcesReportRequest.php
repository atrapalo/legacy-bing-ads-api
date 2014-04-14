<?php

namespace Bing\Production\Reporting;

final class TrafficSourcesReportRequest extends ReportRequest
{
    public $Aggregation;
    public $Columns;
    public $Filter;
    public $Scope;
    public $Time;
}