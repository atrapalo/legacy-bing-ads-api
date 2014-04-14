<?php

namespace Bing\Production\Reporting;

final class AdGroupPerformanceReportRequest extends ReportRequest
{
    public $Aggregation;
    public $Columns;
    public $Filter;
    public $Scope;
    public $Time;
}