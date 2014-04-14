<?php

namespace Bing\Production\Reporting;

final class AgeGenderDemographicReportRequest extends ReportRequest
{
    public $Aggregation;
    public $Columns;
    public $Filter;
    public $Scope;
    public $Time;
}