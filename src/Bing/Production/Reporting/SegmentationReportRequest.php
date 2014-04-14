<?php

namespace Bing\Production\Reporting;

final class SegmentationReportRequest extends ReportRequest
{
    public $Aggregation;
    public $Columns;
    public $Filter;
    public $Scope;
    public $Time;
}