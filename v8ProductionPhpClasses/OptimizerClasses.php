<?php
final class BudgetLimitType
{
    const MonthlyBudgetSpendUntilDepleted = 'MonthlyBudgetSpendUntilDepleted';
    const DailyBudgetStandard = 'DailyBudgetStandard';
    const DailyBudgetAccelerated = 'DailyBudgetAccelerated';
}

final class ErrorCodes
{
    const InternalError = 'InternalError';
    const NullRequest = 'NullRequest';
    const InvalidCredentials = 'InvalidCredentials';
    const UserIsNotAuthorized = 'UserIsNotAuthorized';
    const QuotaNotAvailable = 'QuotaNotAvailable';
    const InvalidDateObject = 'InvalidDateObject';
    const RequestMissingHeaders = 'RequestMissingHeaders';
    const ApiInputValidationError = 'ApiInputValidationError';
    const APIExecutionError = 'APIExecutionError';
    const NullParameter = 'NullParameter';
    const OperationNotSupported = 'OperationNotSupported';
    const InvalidVersion = 'InvalidVersion';
    const NullArrayArgument = 'NullArrayArgument';
    const ConcurrentRequestOverLimit = 'ConcurrentRequestOverLimit';
    const InvalidAccount = 'InvalidAccount';
    const TimestampNotMatch = 'TimestampNotMatch';
    const EntityNotExistent = 'EntityNotExistent';
    const NameTooLong = 'NameTooLong';
    const FilterListOverLimit = 'FilterListOverLimit';
    const InvalidAccountId = 'InvalidAccountId';
    const InvalidCustomerId = 'InvalidCustomerId';
    const CustomerIdHasToBeSpecified = 'CustomerIdHasToBeSpecified';
    const AccountIdHasToBeSpecified = 'AccountIdHasToBeSpecified';
    const FutureFeatureCode = 'FutureFeatureCode';
    const InvalidOpportunityKeysList = 'InvalidOpportunityKeysList';
    const OpportunityExpired = 'OpportunityExpired';
    const OpportunityAlreadyApplied = 'OpportunityAlreadyApplied';
    const OpportunityKeysArrayShouldNotBeNullOrEmpty = 'OpportunityKeysArrayShouldNotBeNullOrEmpty';
    const OpportunityKeysArrayExceedsLimit = 'OpportunityKeysArrayExceedsLimit';
    const InvalidOpportunityKey = 'InvalidOpportunityKey';
    const CampaignBudgetAmountIsAboveLimit = 'CampaignBudgetAmountIsAboveLimit';
    const CampaignBudgetAmountIsBelowConfiguredLimit = 'CampaignBudgetAmountIsBelowConfiguredLimit';
    const CampaignBudgetAmountIsLessThanSpendAmount = 'CampaignBudgetAmountIsLessThanSpendAmount';
    const CampaignBudgetLessThanAdGroupBudget = 'CampaignBudgetLessThanAdGroupBudget';
    const CampaignDailyTargetBudgetAmountIsInvalid = 'CampaignDailyTargetBudgetAmountIsInvalid';
    const IncrementalBudgetAmountRequiredForDayTarget = 'IncrementalBudgetAmountRequiredForDayTarget';
    const BidsAmountsGreaterThanCeilingPrice = 'BidsAmountsGreaterThanCeilingPrice';
    const KeywordExactBidAmountsGreaterThanCeilingPrice = 'KeywordExactBidAmountsGreaterThanCeilingPrice';
    const KeywordPhraseBidAmountsGreaterThanCeilingPrice = 'KeywordPhraseBidAmountsGreaterThanCeilingPrice';
    const KeywordBroadBidAmountsGreaterThanCeilingPrice = 'KeywordBroadBidAmountsGreaterThanCeilingPrice';
    const BidAmountsLessThanFloorPrice = 'BidAmountsLessThanFloorPrice';
    const KeywordExactBidAmountsLessThanFloorPrice = 'KeywordExactBidAmountsLessThanFloorPrice';
    const KeywordPhraseBidAmountsLessThanFloorPrice = 'KeywordPhraseBidAmountsLessThanFloorPrice';
    const KeywordBroadBidAmountsLessThanFloorPrice = 'KeywordBroadBidAmountsLessThanFloorPrice';
    const KeywordAlreadyExists = 'KeywordAlreadyExists';
    const MaxKeywordsLimitExceededForAccount = 'MaxKeywordsLimitExceededForAccount';
    const MaxKeywordsLimitExceededForAdGroup = 'MaxKeywordsLimitExceededForAdGroup';
}

final class BudgetOpportunity extends Opportunity
{
    public $BudgetDepletionDate;
    public $BudgetType;
    public $CampaignId;
    public $CurrentBudget;
    public $IncreaseInClicks;
    public $IncreaseInImpressions;
    public $PercentageIncreaseInClicks;
    public $PercentageIncreaseInImpressions;
    public $RecommendedBudget;
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

final class BidOpportunity extends Opportunity
{
    public $AdGroupId;
    public $CurrentBid;
    public $EstimatedIncreaseInClicks;
    public $EstimatedIncreaseInCost;
    public $EstimatedIncreaseInImpressions;
    public $KeywordId;
    public $MatchType;
    public $SuggestedBid;
}

final class KeywordOpportunity extends Opportunity
{
    public $AdGroupId;
    public $CampaignId;
    public $Competition;
    public $MatchType;
    public $MonthlySearches;
    public $SuggestedBid;
    public $SuggestedKeyword;
}

class ApplicationFault
{
    public $TrackingId;
}

class Opportunity
{
    public $ExpirationDate;
    public $OpportunityKey;
}

final class GetBudgetOpportunitiesRequest
{
    public $AccountId;
}

final class GetBudgetOpportunitiesResponse
{
    public $Opportunities;
}

final class GetBidOpportunitiesRequest
{
    public $AccountId;
    public $AdGroupId;
    public $CampaignId;
}

final class GetBidOpportunitiesResponse
{
    public $Opportunities;
}

final class GetKeywordOpportunitiesRequest
{
    public $AccountId;
    public $AdGroupId;
    public $CampaignId;
}

final class GetKeywordOpportunitiesResponse
{
    public $Opportunities;
}

final class ApplyBudgetOpportunitiesRequest
{
    public $AccountId;
    public $OpportunityKeys;
}

final class ApplyBudgetOpportunitiesResponse
{
}

final class ApplyOpportunitiesRequest
{
    public $AccountId;
    public $OpportunityKeys;
}

final class ApplyOpportunitiesResponse
{
}


