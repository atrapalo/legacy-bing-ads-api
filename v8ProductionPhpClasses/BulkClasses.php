<?php
final class AdditionalEntity
{
    const CampaignNegativeKeywords = 'CampaignNegativeKeywords';
    const AdGroupNegativeKeywords = 'AdGroupNegativeKeywords';
    const CampaignTargets = 'CampaignTargets';
    const AdGroupTargets = 'AdGroupTargets';
    const CampaignNegativeSites = 'CampaignNegativeSites';
    const AdGroupNegativeSites = 'AdGroupNegativeSites';
    const AdEditorialRejectionReasons = 'AdEditorialRejectionReasons';
    const KeywordEditorialRejectionReasons = 'KeywordEditorialRejectionReasons';
    const CampaignSiteLinksAdExtensions = 'CampaignSiteLinksAdExtensions';
}

final class DownloadStatus
{
    const InProgress = 'InProgress';
    const Failed = 'Failed';
    const Success = 'Success';
    const PartialSuccess = 'PartialSuccess';
}

final class BatchError
{
    public $Code;
    public $Details;
    public $ErrorCode;
    public $Index;
    public $Message;
}

final class OperationError
{
    public $Code;
    public $Details;
    public $ErrorCode;
    public $Message;
}

final class ApiFaultDetail extends ApplicationFault
{
    public $BatchErrors;
    public $OperationErrors;
}

final class AdApiError
{
    public $Code;
    public $Detail;
    public $ErrorCode;
    public $Message;
}

final class AdApiFaultDetail extends ApplicationFault
{
    public $Errors;
}

final class CampaignScope
{
    public $CampaignId;
    public $ParentAccountId;
}

class ApplicationFault
{
    public $TrackingId;
}

final class DownloadCampaignsByAccountIdsRequest
{
    public $AccountIds;
    public $AdditionalEntities;
    public $LastSyncTimeInUTC;
}

final class DownloadCampaignsByAccountIdsResponse
{
    public $DownloadRequestId;
}

final class DownloadCampaignsByCampaignIdsRequest
{
    public $AdditionalEntities;
    public $Campaigns;
    public $LastSyncTimeInUTC;
}

final class DownloadCampaignsByCampaignIdsResponse
{
    public $DownloadRequestId;
}

final class GetDownloadStatusRequest
{
    public $DownloadRequestId;
}

final class GetDownloadStatusResponse
{
    public $DownloadUrl;
    public $Status;
}


