<?php
final class TimeInterval
{
    const Last30Days = 'Last30Days';
    const Last7Days = 'Last7Days';
    const LastDay = 'LastDay';
}

final class Scale
{
    const Minimal = 'Minimal';
    const Low = 'Low';
    const Medium = 'Medium';
    const High = 'High';
    const VeryHigh = 'VeryHigh';
}

final class TargetAdPosition
{
    const MainLine1 = 'MainLine1';
    const MainLine = 'MainLine';
    const SideBar = 'SideBar';
}

final class MatchType
{
    const Exact = 'Exact';
    const Phrase = 'Phrase';
    const Broad = 'Broad';
    const Content = 'Content';
    const Aggregate = 'Aggregate';
}

final class Currency
{
    const CanadianDollar = 'CanadianDollar';
    const EURO = 'EURO';
    const SingaporeDollar = 'SingaporeDollar';
    const UKPound = 'UKPound';
    const USDollar = 'USDollar';
    const IndianRupee = 'IndianRupee';
    const ArgentinePeso = 'ArgentinePeso';
    const Bolivar = 'Bolivar';
    const ChileanPeso = 'ChileanPeso';
    const ColombianPeso = 'ColombianPeso';
    const DanishKrone = 'DanishKrone';
    const MexicanPeso = 'MexicanPeso';
    const NorwegianKrone = 'NorwegianKrone';
    const NuevoSol = 'NuevoSol';
    const SwedishKrona = 'SwedishKrona';
}

final class AdPosition
{
    const All = 'All';
    const MainLine1 = 'MainLine1';
    const MainLine2 = 'MainLine2';
    const MainLine3 = 'MainLine3';
    const MainLine4 = 'MainLine4';
    const SideBar1 = 'SideBar1';
    const SideBar2 = 'SideBar2';
    const SideBar3 = 'SideBar3';
    const SideBar4 = 'SideBar4';
    const SideBar5 = 'SideBar5';
    const SideBar6 = 'SideBar6';
    const SideBar7 = 'SideBar7';
    const SideBar8 = 'SideBar8';
    const SideBar9 = 'SideBar9';
    const SideBar10 = 'SideBar10';
    const Aggregate = 'Aggregate';
}

final class KeywordPerformance
{
    public $Keyword;
    public $AverageCpc;
    public $Impressions;
    public $BidDensity;
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

final class KeywordAndConfidence
{
    public $SuggestedKeyword;
    public $ConfidenceScore;
}

final class EstimatedBidAndTraffic
{
    public $MatchType;
    public $MinClicksPerWeek;
    public $MaxClicksPerWeek;
    public $AverageCPC;
    public $MinImpressionsPerWeek;
    public $MaxImpressionsPerWeek;
    public $CTR;
    public $MinTotalCostPerWeek;
    public $MaxTotalCostPerWeek;
    public $Currency;
    public $EstimatedMinBid;
}

final class KeywordEstimatedBid
{
    public $Keyword;
    public $EstimatedBids;
}

final class KeywordIdEstimatedBid
{
    public $KeywordId;
    public $KeywordEstimatedBid;
}

final class EstimatedPositionAndTraffic
{
    public $MatchType;
    public $MinClicksPerWeek;
    public $MaxClicksPerWeek;
    public $AverageCPC;
    public $MinImpressionsPerWeek;
    public $MaxImpressionsPerWeek;
    public $CTR;
    public $MinTotalCostPerWeek;
    public $MaxTotalCostPerWeek;
    public $Currency;
    public $EstimatedAdPosition;
}

final class KeywordEstimatedPosition
{
    public $Keyword;
    public $EstimatedPositions;
}

final class KeywordIdEstimatedPosition
{
    public $KeywordId;
    public $KeywordEstimatedPosition;
}

final class MonthAndYear
{
    public $Month;
    public $Year;
}

final class HistoricalSearchCount
{
    public $SearchCount;
    public $MonthAndYear;
}

final class KeywordSearchCount
{
    public $Keyword;
    public $HistoricalSearchCounts;
}

final class DayMonthAndYear
{
    public $Day;
    public $Month;
    public $Year;
}

final class HistoricalSearchCountPeriodic
{
    public $SearchCount;
    public $DayMonthAndYear;
}

final class KeywordSearchCountByDevice
{
    public $Keyword;
    public $Device;
    public $HistoricalSearchCounts;
}

final class KeywordKPI
{
    public $MatchType;
    public $AdPosition;
    public $Clicks;
    public $Impressions;
    public $AverageCPC;
    public $CTR;
    public $TotalCost;
    public $AverageBid;
}

final class KeywordHistoricalPerformance
{
    public $Keyword;
    public $KeywordKPIs;
}

final class KeywordHistoricalPerformanceByDevice
{
    public $Keyword;
    public $Device;
    public $KeywordKPIs;
}

final class KeywordSuggestion
{
    public $Keyword;
    public $SuggestionsAndConfidence;
}

final class KeywordLocation
{
    public $Location;
    public $Percentage;
}

final class KeywordLocationResult
{
    public $Keyword;
    public $Device;
    public $KeywordLocations;
}

final class KeywordCategory
{
    public $Category;
    public $ConfidenceScore;
}

final class KeywordCategoryResult
{
    public $Keyword;
    public $KeywordCategories;
}

final class KeywordDemographic
{
    public $Age18_24;
    public $Age25_34;
    public $Age35_49;
    public $Age50_64;
    public $Age65Plus;
    public $AgeUnknown;
    public $Female;
    public $Male;
    public $GenderUnknown;
}

final class KeywordDemographicResult
{
    public $Keyword;
    public $Device;
    public $KeywordDemographics;
}

class ApplicationFault
{
    public $TrackingId;
}

final class GetPublisherKeywordPerformanceRequest
{
    public $Keywords;
    public $TimeInterval;
}

final class GetPublisherKeywordPerformanceResponse
{
    public $KeywordPerformance;
}

final class SuggestKeywordsForUrlRequest
{
    public $Url;
    public $Language;
    public $MaxKeywords;
    public $MinConfidenceScore;
    public $ExcludeBrand;
}

final class SuggestKeywordsForUrlResponse
{
    public $Keywords;
}

final class GetEstimatedBidByKeywordIdsRequest
{
    public $KeywordIds;
    public $TargetPositionForAds;
}

final class GetEstimatedBidByKeywordIdsResponse
{
    public $KeywordEstimatedBids;
}

final class GetEstimatedPositionByKeywordIdsRequest
{
    public $KeywordIds;
    public $MaxBid;
}

final class GetEstimatedPositionByKeywordIdsResponse
{
    public $KeywordEstimatedPositions;
}

final class GetEstimatedBidByKeywordsRequest
{
    public $Keywords;
    public $TargetPositionForAds;
    public $Language;
    public $PublisherCountries;
    public $Currency;
    public $MatchTypes;
    public $CampaignId;
    public $AdgroupId;
}

final class GetEstimatedBidByKeywordsResponse
{
    public $KeywordEstimatedBids;
}

final class GetEstimatedPositionByKeywordsRequest
{
    public $Keywords;
    public $MaxBid;
    public $Language;
    public $PublisherCountries;
    public $Currency;
    public $MatchTypes;
    public $CampaignId;
    public $AdgroupId;
}

final class GetEstimatedPositionByKeywordsResponse
{
    public $KeywordEstimatedPositions;
}

final class GetHistoricalSearchCountRequest
{
    public $Keywords;
    public $Language;
    public $PublisherCountries;
    public $StartMonthAndYear;
    public $EndMonthAndYear;
}

final class GetHistoricalSearchCountResponse
{
    public $KeywordSearchCounts;
}

final class GetHistoricalSearchCountByDeviceRequest
{
    public $Keywords;
    public $Language;
    public $PublisherCountries;
    public $StartTimePeriod;
    public $EndTimePeriod;
    public $TimePeriodRollup;
    public $Devices;
}

final class GetHistoricalSearchCountByDeviceResponse
{
    public $KeywordSearchCounts;
}

final class GetHistoricalKeywordPerformanceRequest
{
    public $Keywords;
    public $TimeInterval;
    public $TargetAdPosition;
    public $MatchType;
    public $Language;
    public $PublisherCountries;
}

final class GetHistoricalKeywordPerformanceResponse
{
    public $KeywordHistoricalPerformances;
}

final class GetHistoricalKeywordPerformanceByDeviceRequest
{
    public $Keywords;
    public $TimeInterval;
    public $TargetAdPosition;
    public $MatchTypes;
    public $Language;
    public $PublisherCountries;
    public $Devices;
}

final class GetHistoricalKeywordPerformanceByDeviceResponse
{
    public $KeywordHistoricalPerformances;
}

final class SuggestKeywordsFromExistingKeywordsRequest
{
    public $Keywords;
    public $Language;
    public $PublisherCountries;
    public $MaxSuggestionsPerKeyword;
    public $SuggestionType;
    public $RemoveDuplicates;
    public $ExcludeBrand;
}

final class SuggestKeywordsFromExistingKeywordsResponse
{
    public $KeywordSuggestions;
}

final class GetKeywordLocationsRequest
{
    public $Keywords;
    public $Language;
    public $PublisherCountry;
    public $Device;
    public $Level;
    public $ParentCountry;
    public $MaxLocations;
}

final class GetKeywordLocationsResponse
{
    public $KeywordLocationResult;
}

final class GetKeywordCategoriesRequest
{
    public $Keywords;
    public $Language;
    public $PublisherCountry;
    public $MaxCategories;
}

final class GetKeywordCategoriesResponse
{
    public $Result;
}

final class GetKeywordDemographicsRequest
{
    public $Keywords;
    public $Language;
    public $PublisherCountry;
    public $Device;
}

final class GetKeywordDemographicsResponse
{
    public $KeywordDemographicResult;
}


