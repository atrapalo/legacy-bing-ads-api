<?php

namespace Bing\Production\Reporting;

final class ShareOfVoiceReportRequest extends ReportRequest
{
    public $Aggregation;
    public $Columns;
    public $Filter;
    public $Scope;
    public $Time;
}