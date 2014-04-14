<?php

namespace Bing\Production\Reporting;

final class GoalsAndFunnelsReportRequest extends ReportRequest
{
    public $Aggregation;
    public $Columns;
    public $Filter;
    public $Scope;
    public $Time;
}