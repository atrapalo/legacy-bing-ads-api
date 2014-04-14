<?php
final class ReportFormat
{
    const Csv = 'Csv';
    const Tsv = 'Tsv';
    const Xml = 'Xml';
}

final class ReportLanguage
{
    const English = 'English';
    const French = 'French';
}

final class ReportRequestStatusType
{
    const Error = 'Error';
    const Success = 'Success';
    const Pending = 'Pending';
}

final class NonHourlyReportAggregation
{
    const Summary = 'Summary';
    const Daily = 'Daily';
    const Weekly = 'Weekly';
    const Monthly = 'Monthly';
    const Yearly = 'Yearly';
}

final class GoalsAndFunnelsReportColumn
{
    const AccountName = 'AccountName';
    const AccountNumber = 'AccountNumber';
    const AccountId = 'AccountId';
    const TimePeriod = 'TimePeriod';
    const CampaignName = 'CampaignName';
    const CampaignId = 'CampaignId';
    const AdGroupName = 'AdGroupName';
    const AdGroupId = 'AdGroupId';
    const Keyword = 'Keyword';
    const KeywordId = 'KeywordId';
    const Goal = 'Goal';
    const Step1Count = 'Step1Count';
    const Step2Count = 'Step2Count';
    const Step3Count = 'Step3Count';
    const Step4Count = 'Step4Count';
    const Step5Count = 'Step5Count';
    const Conversions = 'Conversions';
    const Assists = 'Assists';
    const FunnelConversionRate = 'FunnelConversionRate';
    const Spend = 'Spend';
    const Revenue = 'Revenue';
    const ReturnOnAdSpend = 'ReturnOnAdSpend';
    const ExtendedCost = 'ExtendedCost';
}

final class ReportTimePeriod
{
    const Today = 'Today';
    const Yesterday = 'Yesterday';
    const LastSevenDays = 'LastSevenDays';
    const ThisWeek = 'ThisWeek';
    const LastWeek = 'LastWeek';
    const LastFourWeeks = 'LastFourWeeks';
    const ThisMonth = 'ThisMonth';
    const LastMonth = 'LastMonth';
    const LastThreeMonths = 'LastThreeMonths';
    const LastSixMonths = 'LastSixMonths';
    const ThisYear = 'ThisYear';
    const LastYear = 'LastYear';
}

final class MetroAreaDemographicReportColumn
{
    const AccountName = 'AccountName';
    const AccountNumber = 'AccountNumber';
    const TimePeriod = 'TimePeriod';
    const LanguageAndRegion = 'LanguageAndRegion';
    const CampaignName = 'CampaignName';
    const AdGroupName = 'AdGroupName';
    const Country = 'Country';
    const State = 'State';
    const MetroArea = 'MetroArea';
    const CurrencyCode = 'CurrencyCode';
    const AdDistribution = 'AdDistribution';
    const Impressions = 'Impressions';
    const Clicks = 'Clicks';
    const Ctr = 'Ctr';
    const AverageCpc = 'AverageCpc';
    const Spend = 'Spend';
    const AveragePosition = 'AveragePosition';
    const AverageCpm = 'AverageCpm';
    const ProximityTargetLocation = 'ProximityTargetLocation';
    const Radius = 'Radius';
    const Language = 'Language';
    const City = 'City';
    const QueryIntentCountry = 'QueryIntentCountry';
    const QueryIntentState = 'QueryIntentState';
    const QueryIntentCity = 'QueryIntentCity';
    const QueryIntentDMA = 'QueryIntentDMA';
}

final class AdDistributionReportFilter
{
    const Search = 'Search';
    const Content = 'Content';
}

final class CountryReportFilter
{
    const Canada = 'Canada';
    const France = 'France';
    const Singapore = 'Singapore';
    const UnitedKingdom = 'UnitedKingdom';
    const UnitedStates = 'UnitedStates';
}

final class LanguageAndRegionReportFilter
{
    const EnglishCanada = 'EnglishCanada';
    const FrenchCanada = 'FrenchCanada';
    const France = 'France';
    const Singapore = 'Singapore';
    const UnitedKingdom = 'UnitedKingdom';
    const UnitedStates = 'UnitedStates';
}

final class PublisherUsagePerformanceReportColumn
{
    const AccountName = 'AccountName';
    const AccountNumber = 'AccountNumber';
    const AccountId = 'AccountId';
    const TimePeriod = 'TimePeriod';
    const LanguageAndRegion = 'LanguageAndRegion';
    const CampaignName = 'CampaignName';
    const CampaignId = 'CampaignId';
    const AdGroupName = 'AdGroupName';
    const AdGroupId = 'AdGroupId';
    const CurrencyCode = 'CurrencyCode';
    const AdDistribution = 'AdDistribution';
    const PublisherUrl = 'PublisherUrl';
    const Impressions = 'Impressions';
    const Clicks = 'Clicks';
    const Ctr = 'Ctr';
    const AverageCpc = 'AverageCpc';
    const Spend = 'Spend';
    const AveragePosition = 'AveragePosition';
    const Conversions = 'Conversions';
    const ConversionRate = 'ConversionRate';
    const CostPerConversion = 'CostPerConversion';
    const AverageCpm = 'AverageCpm';
    const PricingModel = 'PricingModel';
    const Language = 'Language';
}

final class ReportAggregation
{
    const Summary = 'Summary';
    const Hourly = 'Hourly';
    const Daily = 'Daily';
    const Weekly = 'Weekly';
    const Monthly = 'Monthly';
    const Yearly = 'Yearly';
    const HourOfDay = 'HourOfDay';
    const DayOfWeek = 'DayOfWeek';
}

final class SitePerformanceReportColumn
{
    const AccountName = 'AccountName';
    const AccountNumber = 'AccountNumber';
    const AccountId = 'AccountId';
    const TimePeriod = 'TimePeriod';
    const LanguageAndRegion = 'LanguageAndRegion';
    const CampaignName = 'CampaignName';
    const CampaignId = 'CampaignId';
    const AdGroupName = 'AdGroupName';
    const AdGroupId = 'AdGroupId';
    const Site = 'Site';
    const SiteId = 'SiteId';
    const AdId = 'AdId';
    const DestinationUrl = 'DestinationUrl';
    const CurrentMaxCpc = 'CurrentMaxCpc';
    const CurrencyCode = 'CurrencyCode';
    const MatchType = 'MatchType';
    const AdDistribution = 'AdDistribution';
    const Impressions = 'Impressions';
    const Clicks = 'Clicks';
    const Ctr = 'Ctr';
    const AverageCpc = 'AverageCpc';
    const Spend = 'Spend';
    const AveragePosition = 'AveragePosition';
    const Conversions = 'Conversions';
    const ConversionRate = 'ConversionRate';
    const CostPerConversion = 'CostPerConversion';
    const AdType = 'AdType';
    const AverageCpm = 'AverageCpm';
    const PricingModel = 'PricingModel';
    const DeviceType = 'DeviceType';
    const Language = 'Language';
}

final class AdTypeReportFilter
{
    const Text = 'Text';
    const Mobile = 'Mobile';
    const Image = 'Image';
    const RichMedia = 'RichMedia';
    const Local = 'Local';
    const ThirdPartyCreative = 'ThirdPartyCreative';
    const RichAd = 'RichAd';
}

final class DeliveredMatchTypeReportFilter
{
    const Exact = 'Exact';
    const Phrase = 'Phrase';
    const Broad = 'Broad';
    const Content = 'Content';
}

final class DeviceTypeReportFilter
{
    const Computer = 'Computer';
    const SmartPhone = 'SmartPhone';
    const NonSmartPhone = 'NonSmartPhone';
    const Tablet = 'Tablet';
}

final class BehavioralTargetReportColumn
{
    const AccountName = 'AccountName';
    const AccountNumber = 'AccountNumber';
    const AccountId = 'AccountId';
    const TimePeriod = 'TimePeriod';
    const CurrencyCode = 'CurrencyCode';
    const CampaignId = 'CampaignId';
    const CampaignName = 'CampaignName';
    const LanguageAndRegion = 'LanguageAndRegion';
    const BehavioralId = 'BehavioralId';
    const AdGroupId = 'AdGroupId';
    const AdGroupName = 'AdGroupName';
    const AdDistribution = 'AdDistribution';
    const Impressions = 'Impressions';
    const Clicks = 'Clicks';
    const Ctr = 'Ctr';
    const AverageCpc = 'AverageCpc';
    const Spend = 'Spend';
    const AveragePosition = 'AveragePosition';
    const AverageCpm = 'AverageCpm';
    const PricingModel = 'PricingModel';
}

final class BehavioralPerformanceReportColumn
{
    const AccountName = 'AccountName';
    const AccountNumber = 'AccountNumber';
    const AccountId = 'AccountId';
    const TimePeriod = 'TimePeriod';
    const LanguageAndRegion = 'LanguageAndRegion';
    const CampaignName = 'CampaignName';
    const CampaignId = 'CampaignId';
    const AdGroupName = 'AdGroupName';
    const AdGroupId = 'AdGroupId';
    const BehavioralId = 'BehavioralId';
    const BehavioralName = 'BehavioralName';
    const AdId = 'AdId';
    const DestinationUrl = 'DestinationUrl';
    const CurrentMaxCpc = 'CurrentMaxCpc';
    const CurrencyCode = 'CurrencyCode';
    const MatchType = 'MatchType';
    const AdDistribution = 'AdDistribution';
    const Impressions = 'Impressions';
    const Clicks = 'Clicks';
    const Ctr = 'Ctr';
    const AverageCpc = 'AverageCpc';
    const Spend = 'Spend';
    const AveragePosition = 'AveragePosition';
    const Conversions = 'Conversions';
    const ConversionRate = 'ConversionRate';
    const CostPerConversion = 'CostPerConversion';
    const AdType = 'AdType';
    const AverageCpm = 'AverageCpm';
    const PricingModel = 'PricingModel';
}

final class SearchQueryReportAggregation
{
    const Summary = 'Summary';
    const Hourly = 'Hourly';
    const Daily = 'Daily';
    const Weekly = 'Weekly';
    const Monthly = 'Monthly';
}

final class SearchQueryPerformanceReportColumn
{
    const AccountName = 'AccountName';
    const AccountNumber = 'AccountNumber';
    const AccountId = 'AccountId';
    const TimePeriod = 'TimePeriod';
    const CampaignName = 'CampaignName';
    const CampaignId = 'CampaignId';
    const AdGroupName = 'AdGroupName';
    const AdGroupId = 'AdGroupId';
    const AdId = 'AdId';
    const AdType = 'AdType';
    const DestinationUrl = 'DestinationUrl';
    const MatchType = 'MatchType';
    const LanguageAndRegion = 'LanguageAndRegion';
    const CampaignStatus = 'CampaignStatus';
    const AdStatus = 'AdStatus';
    const Impressions = 'Impressions';
    const Clicks = 'Clicks';
    const Ctr = 'Ctr';
    const AverageCpc = 'AverageCpc';
    const Spend = 'Spend';
    const AveragePosition = 'AveragePosition';
    const SearchQuery = 'SearchQuery';
    const Keyword = 'Keyword';
    const Conversions = 'Conversions';
    const ConversionRate = 'ConversionRate';
    const CostPerConversion = 'CostPerConversion';
    const Language = 'Language';
    const KeywordId = 'KeywordId';
}

final class AdStatusReportFilter
{
    const Submitted = 'Submitted';
    const Rejected = 'Rejected';
    const Deleted = 'Deleted';
    const Pending = 'Pending';
    const Active = 'Active';
}

final class CampaignStatusReportFilter
{
    const Submitted = 'Submitted';
    const Cancelled = 'Cancelled';
    const Deleted = 'Deleted';
    const Paused = 'Paused';
    const BudgetPaused = 'BudgetPaused';
    const Active = 'Active';
}

final class ConversionPerformanceReportColumn
{
    const AccountName = 'AccountName';
    const AccountNumber = 'AccountNumber';
    const AccountId = 'AccountId';
    const TimePeriod = 'TimePeriod';
    const CampaignName = 'CampaignName';
    const CampaignId = 'CampaignId';
    const AdGroupName = 'AdGroupName';
    const AdGroupId = 'AdGroupId';
    const Keyword = 'Keyword';
    const KeywordId = 'KeywordId';
    const Impressions = 'Impressions';
    const Clicks = 'Clicks';
    const Ctr = 'Ctr';
    const Assists = 'Assists';
    const Conversions = 'Conversions';
    const ConversionRate = 'ConversionRate';
    const Spend = 'Spend';
    const ExtendedCost = 'ExtendedCost';
    const Revenue = 'Revenue';
    const ReturnOnAdSpend = 'ReturnOnAdSpend';
    const CostPerConversion = 'CostPerConversion';
    const CostPerAssist = 'CostPerAssist';
    const RevenuePerConversion = 'RevenuePerConversion';
    const RevenuePerAssist = 'RevenuePerAssist';
    const DeviceType = 'DeviceType';
}

final class AgeGenderDemographicReportColumn
{
    const AccountName = 'AccountName';
    const AccountNumber = 'AccountNumber';
    const TimePeriod = 'TimePeriod';
    const LanguageAndRegion = 'LanguageAndRegion';
    const CampaignName = 'CampaignName';
    const AdGroupName = 'AdGroupName';
    const AdDistribution = 'AdDistribution';
    const AgeGroup = 'AgeGroup';
    const Gender = 'Gender';
    const EstimatedImpressionPercent = 'EstimatedImpressionPercent';
    const EstimatedClickPercent = 'EstimatedClickPercent';
    const EstimatedCtr = 'EstimatedCtr';
    const Language = 'Language';
}

final class SegmentationReportColumn
{
    const AccountName = 'AccountName';
    const AccountNumber = 'AccountNumber';
    const AccountId = 'AccountId';
    const TimePeriod = 'TimePeriod';
    const CampaignName = 'CampaignName';
    const CampaignId = 'CampaignId';
    const AdGroupName = 'AdGroupName';
    const AdGroupId = 'AdGroupId';
    const Keyword = 'Keyword';
    const KeywordId = 'KeywordId';
    const Goal = 'Goal';
    const AgeGroup = 'AgeGroup';
    const Gender = 'Gender';
    const Country = 'Country';
    const State = 'State';
    const MetroArea = 'MetroArea';
    const Step1Count = 'Step1Count';
    const Step2Count = 'Step2Count';
    const Step3Count = 'Step3Count';
    const Step4Count = 'Step4Count';
    const Step5Count = 'Step5Count';
    const Conversions = 'Conversions';
    const Assists = 'Assists';
    const Spend = 'Spend';
    const FunnelConversionRate = 'FunnelConversionRate';
    const Revenue = 'Revenue';
    const ReturnOnAdSpend = 'ReturnOnAdSpend';
}

final class AgeGroupReportFilter
{
    const Unknown = 'Unknown';
    const Ages0to12 = 'Ages0to12';
    const Ages13to17 = 'Ages13to17';
    const Ages18to24 = 'Ages18to24';
    const Ages25to34 = 'Ages25to34';
    const Ages35to49 = 'Ages35to49';
    const Ages50to64 = 'Ages50to64';
    const Ages65plus = 'Ages65plus';
}

final class GenderReportFilter
{
    const Unknown = 'Unknown';
    const Male = 'Male';
    const Female = 'Female';
}

final class TacticChannelReportColumn
{
    const AccountName = 'AccountName';
    const AccountNumber = 'AccountNumber';
    const AccountId = 'AccountId';
    const TimePeriod = 'TimePeriod';
    const Tactic = 'Tactic';
    const Channel = 'Channel';
    const ThirdPartyCampaign = 'ThirdPartyCampaign';
    const ThirdPartyAdGroup = 'ThirdPartyAdGroup';
    const ThirdPartyTerm = 'ThirdPartyTerm';
    const CampaignName = 'CampaignName';
    const CampaignId = 'CampaignId';
    const AdGroupName = 'AdGroupName';
    const AdGroupId = 'AdGroupId';
    const Keyword = 'Keyword';
    const KeywordId = 'KeywordId';
    const Goal = 'Goal';
    const Step1Count = 'Step1Count';
    const Step2Count = 'Step2Count';
    const Step3Count = 'Step3Count';
    const Step4Count = 'Step4Count';
    const Step5Count = 'Step5Count';
    const Conversions = 'Conversions';
    const Assists = 'Assists';
    const Spend = 'Spend';
    const FunnelConversionRate = 'FunnelConversionRate';
    const Revenue = 'Revenue';
    const ReturnOnAdSpend = 'ReturnOnAdSpend';
}

final class NegativeKeywordConflictReportColumn
{
    const AccountName = 'AccountName';
    const AccountNumber = 'AccountNumber';
    const AccountId = 'AccountId';
    const CampaignName = 'CampaignName';
    const CampaignId = 'CampaignId';
    const AdGroupName = 'AdGroupName';
    const AdGroupId = 'AdGroupId';
    const Keyword = 'Keyword';
    const KeywordId = 'KeywordId';
    const NegativeKeyword = 'NegativeKeyword';
    const ConflictLevel = 'ConflictLevel';
}

final class KeywordMigrationReportColumn
{
    const AccountName = 'AccountName';
    const AccountId = 'AccountId';
    const CampaignName = 'CampaignName';
    const CampaignId = 'CampaignId';
    const AdGroupName = 'AdGroupName';
    const AdGroupId = 'AdGroupId';
    const Keyword = 'Keyword';
    const KeywordId = 'KeywordId';
    const PreviousKeywordId = 'PreviousKeywordId';
    const BidMatchType = 'BidMatchType';
}

final class SearchCampaignChangeHistoryReportColumn
{
    const DateTime = 'DateTime';
    const ChangedBy = 'ChangedBy';
    const CampaignName = 'CampaignName';
    const AdGroupName = 'AdGroupName';
    const AdTitle = 'AdTitle';
    const AdDescription = 'AdDescription';
    const DisplayUrl = 'DisplayUrl';
    const Keyword = 'Keyword';
    const ItemChanged = 'ItemChanged';
    const AttributeChanged = 'AttributeChanged';
    const HowChanged = 'HowChanged';
    const OldValue = 'OldValue';
    const NewValue = 'NewValue';
}

final class ChangeTypeReportFilter
{
    const Added = 'Added';
    const Deleted = 'Deleted';
    const Changed = 'Changed';
}

final class ChangeEntityReportFilter
{
    const Account = 'Account';
    const Campaign = 'Campaign';
    const AdGroup = 'AdGroup';
    const Ad = 'Ad';
    const Keyword = 'Keyword';
}

final class AdExtensionByAdsReportColumn
{
    const AccountName = 'AccountName';
    const TimePeriod = 'TimePeriod';
    const CampaignName = 'CampaignName';
    const CampaignId = 'CampaignId';
    const AdGroupName = 'AdGroupName';
    const AdGroupId = 'AdGroupId';
    const AdTitle = 'AdTitle';
    const AdId = 'AdId';
    const AdExtensionType = 'AdExtensionType';
    const DeviceType = 'DeviceType';
    const DeviceOS = 'DeviceOS';
    const Impressions = 'Impressions';
    const Clicks = 'Clicks';
    const TotalClicks = 'TotalClicks';
    const Conversions = 'Conversions';
    const Ctr = 'Ctr';
    const AverageCpc = 'AverageCpc';
    const ConversionRate = 'ConversionRate';
    const Spend = 'Spend';
    const AdExtensionId = 'AdExtensionId';
    const AdExtensionVersion = 'AdExtensionVersion';
    const AccountNumber = 'AccountNumber';
    const AccountId = 'AccountId';
    const ClickType = 'ClickType';
}

final class AdExtensionByKeywordReportColumn
{
    const AccountName = 'AccountName';
    const TimePeriod = 'TimePeriod';
    const CampaignName = 'CampaignName';
    const CampaignId = 'CampaignId';
    const AdGroupName = 'AdGroupName';
    const AdGroupId = 'AdGroupId';
    const Keyword = 'Keyword';
    const KeywordId = 'KeywordId';
    const AdExtensionType = 'AdExtensionType';
    const DeviceType = 'DeviceType';
    const DeviceOS = 'DeviceOS';
    const Impressions = 'Impressions';
    const Clicks = 'Clicks';
    const TotalClicks = 'TotalClicks';
    const Conversions = 'Conversions';
    const Ctr = 'Ctr';
    const AverageCpc = 'AverageCpc';
    const ConversionRate = 'ConversionRate';
    const Spend = 'Spend';
    const AdExtensionId = 'AdExtensionId';
    const AdExtensionVersion = 'AdExtensionVersion';
    const AccountNumber = 'AccountNumber';
    const AccountId = 'AccountId';
    const ClickType = 'ClickType';
}

final class AdExtensionDimensionReportColumn
{
    const AccountId = 'AccountId';
    const AdExtensionType = 'AdExtensionType';
    const AdExtensionId = 'AdExtensionId';
    const AdExtensionVersion = 'AdExtensionVersion';
    const Status = 'Status';
    const AdExtensionPropertyId = 'AdExtensionPropertyId';
    const AdExtensionPropertyValue = 'AdExtensionPropertyValue';
}

final class AdExtensionByAdExtensionItemColumn
{
    const AccountName = 'AccountName';
    const TimePeriod = 'TimePeriod';
    const CampaignName = 'CampaignName';
    const CampaignId = 'CampaignId';
    const AdGroupName = 'AdGroupName';
    const AdGroupId = 'AdGroupId';
    const AdTitle = 'AdTitle';
    const AdId = 'AdId';
    const AdExtensionTypeName = 'AdExtensionTypeName';
    const AdExtensionTypeId = 'AdExtensionTypeId';
    const AdExtensionId = 'AdExtensionId';
    const AdExtensionVersion = 'AdExtensionVersion';
    const AdExtensionPropertyValue = 'AdExtensionPropertyValue';
    const Impressions = 'Impressions';
    const DeviceType = 'DeviceType';
    const DeviceOS = 'DeviceOS';
    const Clicks = 'Clicks';
    const Ctr = 'Ctr';
    const Conversions = 'Conversions';
    const CostPerConversion = 'CostPerConversion';
    const ConversionRate = 'ConversionRate';
}

final class ShareOfVoiceReportColumn
{
    const AccountName = 'AccountName';
    const TimePeriod = 'TimePeriod';
    const ProductName = 'ProductName';
    const CampaignName = 'CampaignName';
    const AdGroupName = 'AdGroupName';
    const LanguageAndRegion = 'LanguageAndRegion';
    const Keyword = 'Keyword';
    const MatchType = 'MatchType';
    const BidMatchType = 'BidMatchType';
    const Language = 'Language';
    const AccountNumber = 'AccountNumber';
    const AccountId = 'AccountId';
    const KeywordId = 'KeywordId';
    const AdGroupId = 'AdGroupId';
    const CampaignId = 'CampaignId';
    const Impressions = 'Impressions';
    const Clicks = 'Clicks';
    const Ctr = 'Ctr';
    const AverageCpc = 'AverageCpc';
    const Spend = 'Spend';
    const AveragePosition = 'AveragePosition';
    const ImpressionSharePercent = 'ImpressionSharePercent';
    const ImpressionLostToBudgetPercent = 'ImpressionLostToBudgetPercent';
    const ImpressionLostToRankPercent = 'ImpressionLostToRankPercent';
    const ImpressionLostToLandingPageRelevancePercent = 'ImpressionLostToLandingPageRelevancePercent';
    const ImpressionLostToKeywordRelevancePercent = 'ImpressionLostToKeywordRelevancePercent';
    const ImpressionLostToRelevancePercent = 'ImpressionLostToRelevancePercent';
    const ImpressionLostToBidPercent = 'ImpressionLostToBidPercent';
    const CurrentMaxCpc = 'CurrentMaxCpc';
    const QualityScore = 'QualityScore';
    const KeywordRelevance = 'KeywordRelevance';
    const LandingPageRelevance = 'LandingPageRelevance';
    const LandingPageUserExperience = 'LandingPageUserExperience';
    const Conversions = 'Conversions';
    const ConversionRate = 'ConversionRate';
    const CostPerConversion = 'CostPerConversion';
    const AdDistribution = 'AdDistribution';
    const ClickSharePercent = 'ClickSharePercent';
}

final class BidMatchTypeReportFilter
{
    const Exact = 'Exact';
    const Phrase = 'Phrase';
    const Broad = 'Broad';
    const Content = 'Content';
}

final class TrafficSourcesReportColumn
{
    const AccountName = 'AccountName';
    const AccountNumber = 'AccountNumber';
    const AccountId = 'AccountId';
    const TimePeriod = 'TimePeriod';
    const Source = 'Source';
    const Goal = 'Goal';
    const Step1Count = 'Step1Count';
    const Step2Count = 'Step2Count';
    const Step3Count = 'Step3Count';
    const Step4Count = 'Step4Count';
    const Step5Count = 'Step5Count';
    const Conversions = 'Conversions';
    const Assists = 'Assists';
    const FunnelConversionRate = 'FunnelConversionRate';
    const Revenue = 'Revenue';
    const RevenuePerConversion = 'RevenuePerConversion';
}

final class AccountPerformanceReportColumn
{
    const AccountName = 'AccountName';
    const AccountNumber = 'AccountNumber';
    const TimePeriod = 'TimePeriod';
    const CurrencyCode = 'CurrencyCode';
    const AdDistribution = 'AdDistribution';
    const Impressions = 'Impressions';
    const Clicks = 'Clicks';
    const Ctr = 'Ctr';
    const AverageCpc = 'AverageCpc';
    const Spend = 'Spend';
    const AveragePosition = 'AveragePosition';
    const Conversions = 'Conversions';
    const ConversionRate = 'ConversionRate';
    const CostPerConversion = 'CostPerConversion';
    const LowQualityClicks = 'LowQualityClicks';
    const LowQualityClicksPercent = 'LowQualityClicksPercent';
    const LowQualityImpressions = 'LowQualityImpressions';
    const LowQualityImpressionsPercent = 'LowQualityImpressionsPercent';
    const LowQualityConversions = 'LowQualityConversions';
    const LowQualityConversionRate = 'LowQualityConversionRate';
    const AverageCpm = 'AverageCpm';
    const DeviceType = 'DeviceType';
    const DeviceOS = 'DeviceOS';
    const ImpressionSharePercent = 'ImpressionSharePercent';
    const ImpressionLostToBudgetPercent = 'ImpressionLostToBudgetPercent';
    const ImpressionLostToRankPercent = 'ImpressionLostToRankPercent';
    const ImpressionLostToRelevancePercent = 'ImpressionLostToRelevancePercent';
    const ImpressionLostToOthersPercent = 'ImpressionLostToOthersPercent';
    const ImpressionLostToBidPercent = 'ImpressionLostToBidPercent';
    const ImpressionLostToLandingPageRelevancePercent = 'ImpressionLostToLandingPageRelevancePercent';
    const ImpressionLostToKeywordRelevancePercent = 'ImpressionLostToKeywordRelevancePercent';
}

final class CampaignPerformanceReportColumn
{
    const AccountName = 'AccountName';
    const AccountNumber = 'AccountNumber';
    const TimePeriod = 'TimePeriod';
    const Status = 'Status';
    const CampaignName = 'CampaignName';
    const CampaignId = 'CampaignId';
    const CurrencyCode = 'CurrencyCode';
    const AdDistribution = 'AdDistribution';
    const Impressions = 'Impressions';
    const Clicks = 'Clicks';
    const Ctr = 'Ctr';
    const AverageCpc = 'AverageCpc';
    const Spend = 'Spend';
    const AveragePosition = 'AveragePosition';
    const Conversions = 'Conversions';
    const ConversionRate = 'ConversionRate';
    const CostPerConversion = 'CostPerConversion';
    const LowQualityClicks = 'LowQualityClicks';
    const LowQualityClicksPercent = 'LowQualityClicksPercent';
    const LowQualityImpressions = 'LowQualityImpressions';
    const LowQualityImpressionsPercent = 'LowQualityImpressionsPercent';
    const LowQualityConversions = 'LowQualityConversions';
    const LowQualityConversionRate = 'LowQualityConversionRate';
    const AverageCpm = 'AverageCpm';
    const DeviceType = 'DeviceType';
    const DeviceOS = 'DeviceOS';
    const ImpressionSharePercent = 'ImpressionSharePercent';
    const ImpressionLostToBudgetPercent = 'ImpressionLostToBudgetPercent';
    const ImpressionLostToRankPercent = 'ImpressionLostToRankPercent';
    const ImpressionLostToRelevancePercent = 'ImpressionLostToRelevancePercent';
    const ImpressionLostToOthersPercent = 'ImpressionLostToOthersPercent';
    const QualityScore = 'QualityScore';
    const KeywordRelevance = 'KeywordRelevance';
    const LandingPageRelevance = 'LandingPageRelevance';
    const LandingPageUserExperience = 'LandingPageUserExperience';
    const HistoricQualityScore = 'HistoricQualityScore';
    const HistoricKeywordRelevance = 'HistoricKeywordRelevance';
    const HistoricLandingPageRelevance = 'HistoricLandingPageRelevance';
    const HistoricLandingPageUserExperience = 'HistoricLandingPageUserExperience';
    const ImpressionLostToBidPercent = 'ImpressionLostToBidPercent';
    const ImpressionLostToLandingPageRelevancePercent = 'ImpressionLostToLandingPageRelevancePercent';
    const ImpressionLostToKeywordRelevancePercent = 'ImpressionLostToKeywordRelevancePercent';
}

final class BudgetSummaryReportColumn
{
    const AccountName = 'AccountName';
    const AccountNumber = 'AccountNumber';
    const CampaignName = 'CampaignName';
    const Date = 'Date';
    const CurrencyCode = 'CurrencyCode';
    const MonthlyBudget = 'MonthlyBudget';
    const DailySpend = 'DailySpend';
    const MonthToDateSpend = 'MonthToDateSpend';
}

final class BudgetSummaryReportTimePeriod
{
    const Today = 'Today';
    const Yesterday = 'Yesterday';
    const LastSevenDays = 'LastSevenDays';
    const ThisMonth = 'ThisMonth';
    const LastMonth = 'LastMonth';
}

final class AdGroupPerformanceReportColumn
{
    const AccountName = 'AccountName';
    const AccountNumber = 'AccountNumber';
    const TimePeriod = 'TimePeriod';
    const LanguageAndRegion = 'LanguageAndRegion';
    const Status = 'Status';
    const CampaignName = 'CampaignName';
    const CampaignId = 'CampaignId';
    const AdGroupName = 'AdGroupName';
    const AdGroupId = 'AdGroupId';
    const CurrencyCode = 'CurrencyCode';
    const AdDistribution = 'AdDistribution';
    const Impressions = 'Impressions';
    const Clicks = 'Clicks';
    const Ctr = 'Ctr';
    const AverageCpc = 'AverageCpc';
    const Spend = 'Spend';
    const AveragePosition = 'AveragePosition';
    const Conversions = 'Conversions';
    const ConversionRate = 'ConversionRate';
    const CostPerConversion = 'CostPerConversion';
    const AverageCpm = 'AverageCpm';
    const PricingModel = 'PricingModel';
    const DeviceType = 'DeviceType';
    const Language = 'Language';
    const DeviceOS = 'DeviceOS';
    const ImpressionSharePercent = 'ImpressionSharePercent';
    const ImpressionLostToBudgetPercent = 'ImpressionLostToBudgetPercent';
    const ImpressionLostToRankPercent = 'ImpressionLostToRankPercent';
    const ImpressionLostToRelevancePercent = 'ImpressionLostToRelevancePercent';
    const ImpressionLostToOthersPercent = 'ImpressionLostToOthersPercent';
    const QualityScore = 'QualityScore';
    const KeywordRelevance = 'KeywordRelevance';
    const LandingPageRelevance = 'LandingPageRelevance';
    const LandingPageUserExperience = 'LandingPageUserExperience';
    const HistoricQualityScore = 'HistoricQualityScore';
    const HistoricKeywordRelevance = 'HistoricKeywordRelevance';
    const HistoricLandingPageRelevance = 'HistoricLandingPageRelevance';
    const HistoricLandingPageUserExperience = 'HistoricLandingPageUserExperience';
    const ImpressionLostToBidPercent = 'ImpressionLostToBidPercent';
    const ImpressionLostToLandingPageRelevancePercent = 'ImpressionLostToLandingPageRelevancePercent';
    const ImpressionLostToKeywordRelevancePercent = 'ImpressionLostToKeywordRelevancePercent';
    const BusinessListingId = 'BusinessListingId';
    const BusinessListingName = 'BusinessListingName';
    const BusinessCategoryId = 'BusinessCategoryId';
    const BusinessCategoryName = 'BusinessCategoryName';
}

final class AdGroupStatusReportFilter
{
    const Submitted = 'Submitted';
    const Deleted = 'Deleted';
    const Expired = 'Expired';
    const Draft = 'Draft';
    const Paused = 'Paused';
    const Active = 'Active';
}

final class AdPerformanceReportColumn
{
    const AccountName = 'AccountName';
    const AccountNumber = 'AccountNumber';
    const TimePeriod = 'TimePeriod';
    const LanguageAndRegion = 'LanguageAndRegion';
    const CampaignName = 'CampaignName';
    const AdGroupName = 'AdGroupName';
    const AdId = 'AdId';
    const AdGroupId = 'AdGroupId';
    const AdTitle = 'AdTitle';
    const AdDescription = 'AdDescription';
    const AdType = 'AdType';
    const CurrencyCode = 'CurrencyCode';
    const AdDistribution = 'AdDistribution';
    const Impressions = 'Impressions';
    const Clicks = 'Clicks';
    const Ctr = 'Ctr';
    const AverageCpc = 'AverageCpc';
    const Spend = 'Spend';
    const AveragePosition = 'AveragePosition';
    const Conversions = 'Conversions';
    const ConversionRate = 'ConversionRate';
    const CostPerConversion = 'CostPerConversion';
    const AverageCpm = 'AverageCpm';
    const PricingModel = 'PricingModel';
    const DestinationUrl = 'DestinationUrl';
    const DeviceType = 'DeviceType';
    const Language = 'Language';
    const DisplayUrl = 'DisplayUrl';
    const BusinessListingId = 'BusinessListingId';
    const BusinessListingName = 'BusinessListingName';
    const BusinessCategoryId = 'BusinessCategoryId';
    const BusinessCategoryName = 'BusinessCategoryName';
}

final class RichAdComponentPerformanceReportColumn
{
    const AccountName = 'AccountName';
    const AccountNumber = 'AccountNumber';
    const TimePeriod = 'TimePeriod';
    const AdId = 'AdId';
    const AdTitle = 'AdTitle';
    const CampaignName = 'CampaignName';
    const AdGroupName = 'AdGroupName';
    const AdGroupId = 'AdGroupId';
    const RichAdSubType = 'RichAdSubType';
    const ComponentType = 'ComponentType';
    const ComponentTitle = 'ComponentTitle';
    const ComponentDestinationURL = 'ComponentDestinationURL';
    const ComponentPosition = 'ComponentPosition';
    const ComponentClicks = 'ComponentClicks';
    const ComponentNonBillableClicks = 'ComponentNonBillableClicks';
    const ComponentTotalClicks = 'ComponentTotalClicks';
    const ComponentCTR = 'ComponentCTR';
}

final class ComponentTypeFilter
{
    const Basic = 'Basic';
    const Deeplink = 'Deeplink';
    const Form = 'Form';
    const Image = 'Image';
    const FavoriteIcon = 'FavoriteIcon';
    const Video = 'Video';
    const TitledLink = 'TitledLink';
}

final class RichAdSubTypeFilter
{
    const Rais2Images4Links = 'Rais2Images4Links';
    const Rais2Images2Links1Form = 'Rais2Images2Links1Form';
    const RaisPharma = 'RaisPharma';
    const Rais1Video4Links = 'Rais1Video4Links';
    const Rais1Video2Links1Form = 'Rais1Video2Links1Form';
}

final class AdDynamicTextPerformanceReportColumn
{
    const AccountName = 'AccountName';
    const AccountNumber = 'AccountNumber';
    const TimePeriod = 'TimePeriod';
    const LanguageAndRegion = 'LanguageAndRegion';
    const AdGroupName = 'AdGroupName';
    const AdGroupId = 'AdGroupId';
    const Keyword = 'Keyword';
    const AdId = 'AdId';
    const AdTitle = 'AdTitle';
    const AdType = 'AdType';
    const DestinationUrl = 'DestinationUrl';
    const Param1 = 'Param1';
    const Param2 = 'Param2';
    const Param3 = 'Param3';
    const CurrencyCode = 'CurrencyCode';
    const AdDistribution = 'AdDistribution';
    const Impressions = 'Impressions';
    const Clicks = 'Clicks';
    const Ctr = 'Ctr';
    const AverageCpc = 'AverageCpc';
    const Spend = 'Spend';
    const AveragePosition = 'AveragePosition';
    const Conversions = 'Conversions';
    const ConversionRate = 'ConversionRate';
    const CostPerConversion = 'CostPerConversion';
    const AverageCpm = 'AverageCpm';
    const PricingModel = 'PricingModel';
    const DeviceType = 'DeviceType';
    const Language = 'Language';
}

final class KeywordPerformanceReportColumn
{
    const AccountName = 'AccountName';
    const AccountNumber = 'AccountNumber';
    const AccountId = 'AccountId';
    const TimePeriod = 'TimePeriod';
    const LanguageAndRegion = 'LanguageAndRegion';
    const CampaignName = 'CampaignName';
    const CampaignId = 'CampaignId';
    const AdGroupName = 'AdGroupName';
    const AdGroupId = 'AdGroupId';
    const Keyword = 'Keyword';
    const KeywordId = 'KeywordId';
    const AdId = 'AdId';
    const AdType = 'AdType';
    const DestinationUrl = 'DestinationUrl';
    const CurrentMaxCpc = 'CurrentMaxCpc';
    const CurrencyCode = 'CurrencyCode';
    const MatchType = 'MatchType';
    const AdDistribution = 'AdDistribution';
    const Impressions = 'Impressions';
    const Clicks = 'Clicks';
    const Ctr = 'Ctr';
    const AverageCpc = 'AverageCpc';
    const Spend = 'Spend';
    const AveragePosition = 'AveragePosition';
    const Conversions = 'Conversions';
    const ConversionRate = 'ConversionRate';
    const CostPerConversion = 'CostPerConversion';
    const AverageCpm = 'AverageCpm';
    const PricingModel = 'PricingModel';
    const Cashback = 'Cashback';
    const BidMatchType = 'BidMatchType';
    const DeviceType = 'DeviceType';
    const QualityScore = 'QualityScore';
    const KeywordRelevance = 'KeywordRelevance';
    const LandingPageRelevance = 'LandingPageRelevance';
    const LandingPageUserExperience = 'LandingPageUserExperience';
    const Language = 'Language';
    const HistoricQualityScore = 'HistoricQualityScore';
    const HistoricKeywordRelevance = 'HistoricKeywordRelevance';
    const HistoricLandingPageRelevance = 'HistoricLandingPageRelevance';
    const HistoricLandingPageUserExperience = 'HistoricLandingPageUserExperience';
    const KeywordMatchTypeId = 'KeywordMatchTypeId';
    const QualityImpact = 'QualityImpact';
    const BusinessListingId = 'BusinessListingId';
    const BusinessListingName = 'BusinessListingName';
    const BusinessCategoryId = 'BusinessCategoryId';
    const BusinessCategoryName = 'BusinessCategoryName';
}

final class CashbackReportFilter
{
    const NotEnabled = 'NotEnabled';
    const Enabled = 'Enabled';
}

final class DestinationUrlPerformanceReportColumn
{
    const AccountName = 'AccountName';
    const AccountNumber = 'AccountNumber';
    const TimePeriod = 'TimePeriod';
    const LanguageAndRegion = 'LanguageAndRegion';
    const CampaignName = 'CampaignName';
    const CampaignId = 'CampaignId';
    const AdGroupName = 'AdGroupName';
    const AdGroupId = 'AdGroupId';
    const AdId = 'AdId';
    const CurrencyCode = 'CurrencyCode';
    const AdDistribution = 'AdDistribution';
    const DestinationUrl = 'DestinationUrl';
    const Impressions = 'Impressions';
    const Clicks = 'Clicks';
    const Ctr = 'Ctr';
    const AverageCpc = 'AverageCpc';
    const Spend = 'Spend';
    const AveragePosition = 'AveragePosition';
    const Conversions = 'Conversions';
    const ConversionRate = 'ConversionRate';
    const CostPerConversion = 'CostPerConversion';
    const AverageCpm = 'AverageCpm';
    const PricingModel = 'PricingModel';
    const DeviceType = 'DeviceType';
    const Language = 'Language';
}

class ReportRequest
{
    public $Format;
    public $Language;
    public $ReportName;
    public $ReturnOnlyCompleteData;
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

final class ReportRequestStatus
{
    public $ReportDownloadUrl;
    public $Status;
}

final class GoalsAndFunnelsReportFilter
{
    public $GoalIds;
}

final class AdGroupReportScope
{
    public $ParentAccountId;
    public $ParentCampaignId;
    public $AdGroupId;
}

final class CampaignReportScope
{
    public $ParentAccountId;
    public $CampaignId;
}

final class AccountThroughAdGroupReportScope
{
    public $AccountIds;
    public $AdGroups;
    public $Campaigns;
}

final class Date
{
    public $Day;
    public $Month;
    public $Year;
}

final class ReportTime
{
    public $CustomDateRangeEnd;
    public $CustomDateRangeStart;
    public $PredefinedTime;
}

final class GoalsAndFunnelsReportRequest extends ReportRequest
{
    public $Aggregation;
    public $Columns;
    public $Filter;
    public $Scope;
    public $Time;
}

final class MetroAreaDemographicReportFilter
{
    public $AdDistribution;
    public $Country;
    public $LanguageAndRegion;
    public $LanguageCode;
}

final class MetroAreaDemographicReportRequest extends ReportRequest
{
    public $Aggregation;
    public $Columns;
    public $Filter;
    public $Scope;
    public $Time;
}

final class PublisherUsagePerformanceReportFilter
{
    public $AdDistribution;
    public $LanguageAndRegion;
    public $LanguageCode;
}

final class PublisherUsagePerformanceReportRequest extends ReportRequest
{
    public $Aggregation;
    public $Columns;
    public $Filter;
    public $Scope;
    public $Time;
}

final class SitePerformanceReportFilter
{
    public $AdDistribution;
    public $AdType;
    public $DeliveredMatchType;
    public $DeviceType;
    public $LanguageAndRegion;
    public $SiteIds;
}

final class SitePerformanceReportRequest extends ReportRequest
{
    public $Aggregation;
    public $Columns;
    public $Filter;
    public $Scope;
    public $Time;
}

final class BehavioralTargetReportFilter
{
    public $AdDistribution;
    public $BehavioralIds;
    public $LanguageAndRegion;
}

final class BehavioralTargetReportRequest extends ReportRequest
{
    public $Aggregation;
    public $Columns;
    public $Filter;
    public $Scope;
    public $Time;
}

final class BehavioralPerformanceReportFilter
{
    public $AdDistribution;
    public $AdType;
    public $BehavioralIds;
    public $DeliveredMatchType;
    public $LanguageAndRegion;
}

final class BehavioralPerformanceReportRequest extends ReportRequest
{
    public $Aggregation;
    public $Columns;
    public $Filter;
    public $Scope;
    public $Time;
}

final class SearchQueryPerformanceReportFilter
{
    public $AdStatus;
    public $AdType;
    public $CampaignStatus;
    public $DeliveredMatchType;
    public $LanguageAndRegion;
    public $LanguageCode;
    public $SearchQueries;
}

final class SearchQueryPerformanceReportRequest extends ReportRequest
{
    public $Aggregation;
    public $Columns;
    public $Filter;
    public $Scope;
    public $Time;
}

final class ConversionPerformanceReportFilter
{
    public $DeviceType;
    public $Keywords;
}

final class ConversionPerformanceReportRequest extends ReportRequest
{
    public $Aggregation;
    public $Columns;
    public $Filter;
    public $Scope;
    public $Time;
}

final class AgeGenderDemographicReportFilter
{
    public $AdDistribution;
    public $LanguageAndRegion;
    public $LanguageCode;
}

final class AgeGenderDemographicReportRequest extends ReportRequest
{
    public $Aggregation;
    public $Columns;
    public $Filter;
    public $Scope;
    public $Time;
}

final class SegmentationReportFilter
{
    public $AgeGroup;
    public $Country;
    public $Gender;
    public $GoalIds;
    public $Keywords;
}

final class SegmentationReportRequest extends ReportRequest
{
    public $Aggregation;
    public $Columns;
    public $Filter;
    public $Scope;
    public $Time;
}

final class TacticChannelReportFilter
{
    public $ChannelIds;
    public $TacticIds;
    public $ThirdPartyAdGroupIds;
    public $ThirdPartyCampaignIds;
}

final class TacticChannelReportRequest extends ReportRequest
{
    public $Aggregation;
    public $Columns;
    public $Filter;
    public $Scope;
    public $Time;
}

final class NegativeKeywordConflictReportRequest extends ReportRequest
{
    public $Columns;
    public $Scope;
}

final class AccountThroughCampaignReportScope
{
    public $AccountIds;
    public $Campaigns;
}

final class KeywordMigrationReportRequest extends ReportRequest
{
    public $Columns;
    public $Scope;
}

final class SearchCampaignChangeHistoryReportFilter
{
    public $HowChanged;
    public $ItemChanged;
}

final class SearchCampaignChangeHistoryReportRequest extends ReportRequest
{
    public $Columns;
    public $Filter;
    public $Scope;
    public $Time;
}

final class AdExtensionByAdsReportRequest extends ReportRequest
{
    public $Aggregation;
    public $Columns;
    public $Scope;
    public $Time;
}

final class AdExtensionByKeywordReportRequest extends ReportRequest
{
    public $Aggregation;
    public $Columns;
    public $Scope;
    public $Time;
}

final class AccountReportScope
{
    public $AccountIds;
}

final class AdExtensionDimensionReportRequest extends ReportRequest
{
    public $Columns;
    public $Scope;
}

final class AdExtensionByAdExtensionItemRequest extends ReportRequest
{
    public $Aggregation;
    public $Columns;
    public $Scope;
    public $Time;
}

final class ShareOfVoiceReportFilter
{
    public $AdDistribution;
    public $BidMatchType;
    public $DeliveredMatchType;
    public $Keywords;
    public $LanguageAndRegion;
    public $LanguageCode;
}

final class ShareOfVoiceReportRequest extends ReportRequest
{
    public $Aggregation;
    public $Columns;
    public $Filter;
    public $Scope;
    public $Time;
}

final class TrafficSourcesReportFilter
{
    public $GoalIds;
}

final class TrafficSourcesReportRequest extends ReportRequest
{
    public $Aggregation;
    public $Columns;
    public $Filter;
    public $Scope;
    public $Time;
}

final class AccountPerformanceReportFilter
{
    public $AdDistribution;
    public $DeviceType;
}

final class AccountPerformanceReportRequest extends ReportRequest
{
    public $Aggregation;
    public $Columns;
    public $Filter;
    public $Scope;
    public $Time;
}

final class CampaignPerformanceReportFilter
{
    public $AdDistribution;
    public $DeviceType;
    public $Status;
}

final class CampaignPerformanceReportRequest extends ReportRequest
{
    public $Aggregation;
    public $Columns;
    public $Filter;
    public $Scope;
    public $Time;
}

final class BudgetSummaryReportTime
{
    public $CustomDateRangeEnd;
    public $CustomDateRangeStart;
    public $PredefinedTime;
}

final class BudgetSummaryReportRequest extends ReportRequest
{
    public $Columns;
    public $Scope;
    public $Time;
}

final class AdGroupPerformanceReportFilter
{
    public $AdDistribution;
    public $DeviceType;
    public $LanguageAndRegion;
    public $LanguageCode;
    public $Status;
}

final class AdGroupPerformanceReportRequest extends ReportRequest
{
    public $Aggregation;
    public $Columns;
    public $Filter;
    public $Scope;
    public $Time;
}

final class AdPerformanceReportFilter
{
    public $AdDistribution;
    public $AdType;
    public $DeviceType;
    public $LanguageAndRegion;
    public $LanguageCode;
}

final class AdPerformanceReportRequest extends ReportRequest
{
    public $Aggregation;
    public $Columns;
    public $Filter;
    public $Scope;
    public $Time;
}

final class RichAdComponentPerformanceReportFilter
{
    public $ComponentType;
    public $RichAdSubType;
}

final class RichAdComponentPerformanceReportRequest extends ReportRequest
{
    public $Aggregation;
    public $Columns;
    public $Filter;
    public $Scope;
    public $Time;
}

final class AdDynamicTextPerformanceReportFilter
{
    public $AdDistribution;
    public $AdType;
    public $DeviceType;
    public $LanguageAndRegion;
    public $LanguageCode;
}

final class AdDynamicTextPerformanceReportRequest extends ReportRequest
{
    public $Aggregation;
    public $Columns;
    public $Filter;
    public $Scope;
    public $Time;
}

final class KeywordPerformanceReportFilter
{
    public $AdDistribution;
    public $AdType;
    public $BidMatchType;
    public $Cashback;
    public $DeliveredMatchType;
    public $DeviceType;
    public $KeywordRelevance;
    public $Keywords;
    public $LandingPageRelevance;
    public $LandingPageUserExperience;
    public $LanguageAndRegion;
    public $LanguageCode;
    public $QualityScore;
}

final class KeywordPerformanceReportRequest extends ReportRequest
{
    public $Aggregation;
    public $Columns;
    public $Filter;
    public $Scope;
    public $Time;
}

final class DestinationUrlPerformanceReportFilter
{
    public $AdDistribution;
    public $DeviceType;
    public $LanguageAndRegion;
    public $LanguageCode;
}

final class DestinationUrlPerformanceReportRequest extends ReportRequest
{
    public $Aggregation;
    public $Columns;
    public $Filter;
    public $Scope;
    public $Time;
}

class ApplicationFault
{
    public $TrackingId;
}

final class SubmitGenerateReportRequest
{
    public $ReportRequest;
}

final class SubmitGenerateReportResponse
{
    public $ReportRequestId;
}

final class PollGenerateReportRequest
{
    public $ReportRequestId;
}

final class PollGenerateReportResponse
{
    public $ReportRequestStatus;
}


