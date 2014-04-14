<?php
final class AnalyticsType
{
    const Enabled = 'Enabled';
    const Disabled = 'Disabled';
    const CampaignLevel = 'CampaignLevel';
}

final class MigrationStatus
{
    const NotInPilot = 'NotInPilot';
    const NotStarted = 'NotStarted';
    const InProgress = 'InProgress';
    const Completed = 'Completed';
}

final class AdExtensionStatus
{
    const Active = 'Active';
    const Deleted = 'Deleted';
}

final class AdExtensionsTypeFilter
{
    const SiteLinksAdExtension = 'SiteLinksAdExtension';
    const LocationAdExtension = 'LocationAdExtension';
    const CallAdExtension = 'CallAdExtension';
    const ProductsAdExtension = 'ProductsAdExtension';
}

final class CampaignAdExtensionEditorialStatus
{
    const Active = 'Active';
    const Disapproved = 'Disapproved';
    const Inactive = 'Inactive';
    const ActiveLimited = 'ActiveLimited';
}

final class ImageType
{
    const Image = 'Image';
    const Icon = 'Icon';
}

final class AdGroupCriterionStatus
{
    const Active = 'Active';
    const Paused = 'Paused';
    const Deleted = 'Deleted';
}

final class CriterionType
{
    const Product = 'Product';
}

final class EntityType
{
    const Campaign = 'Campaign';
    const AdGroup = 'AdGroup';
    const Target = 'Target';
    const Ad = 'Ad';
    const Keyword = 'Keyword';
    const AdExtension = 'AdExtension';
}

final class ExclusionType
{
    const Location = 'Location';
}

final class AdEditorialStatus
{
    const Active = 'Active';
    const Disapproved = 'Disapproved';
    const Inactive = 'Inactive';
}

final class AdStatus
{
    const Inactive = 'Inactive';
    const Active = 'Active';
    const Paused = 'Paused';
    const Deleted = 'Deleted';
}

final class AdType
{
    const Text = 'Text';
    const Image = 'Image';
    const Mobile = 'Mobile';
    const RichSearch = 'RichSearch';
    const Product = 'Product';
}

final class KeywordEditorialStatus
{
    const Active = 'Active';
    const Disapproved = 'Disapproved';
    const Inactive = 'Inactive';
}

final class KeywordStatus
{
    const Active = 'Active';
    const Paused = 'Paused';
    const Deleted = 'Deleted';
    const Inactive = 'Inactive';
}

final class StandardBusinessIcon
{
    const MoviesOrVideo = 'MoviesOrVideo';
    const PubOrBarOrLiquor = 'PubOrBarOrLiquor';
    const Accommodations = 'Accommodations';
    const RestaurantOrDining = 'RestaurantOrDining';
    const CafeOrCoffeeShop = 'CafeOrCoffeeShop';
    const FlowersOrGarden = 'FlowersOrGarden';
    const CarDealerOrServiceOrRental = 'CarDealerOrServiceOrRental';
    const GroceryOrDepartmentStore = 'GroceryOrDepartmentStore';
    const ShoppingOrBoutique = 'ShoppingOrBoutique';
    const HousewaresOrRealEstateOrHomeRepair = 'HousewaresOrRealEstateOrHomeRepair';
    const PhonesOrServiceProvider = 'PhonesOrServiceProvider';
    const BankOrFinanceOrCurrencyExchange = 'BankOrFinanceOrCurrencyExchange';
    const BankOrFinanceOrCurrencyExchangeUK = 'BankOrFinanceOrCurrencyExchangeUK';
    const BankOrFinanceOrCurrencyExchangeEUR = 'BankOrFinanceOrCurrencyExchangeEUR';
    const HardwareOrRepair = 'HardwareOrRepair';
    const HairdresserOrBarberOrTailor = 'HairdresserOrBarberOrTailor';
}

final class BusinessGeoCodeStatus
{
    const Pending = 'Pending';
    const Complete = 'Complete';
    const Invalid = 'Invalid';
    const Failed = 'Failed';
}

final class Day
{
    const Sunday = 'Sunday';
    const Monday = 'Monday';
    const Tuesday = 'Tuesday';
    const Wednesday = 'Wednesday';
    const Thursday = 'Thursday';
    const Friday = 'Friday';
    const Saturday = 'Saturday';
}

final class PaymentType
{
    const Cash = 'Cash';
    const AmericanExpress = 'AmericanExpress';
    const MasterCard = 'MasterCard';
    const DinersClub = 'DinersClub';
    const DirectDebit = 'DirectDebit';
    const Visa = 'Visa';
    const TravellersCheck = 'TravellersCheck';
    const PayPal = 'PayPal';
    const Invoice = 'Invoice';
    const CashOnDelivery = 'CashOnDelivery';
    const Other = 'Other';
}

final class BusinessStatus
{
    const Active = 'Active';
    const Inactive = 'Inactive';
    const Pending = 'Pending';
}

final class SitePlacementStatus
{
    const Active = 'Active';
    const Paused = 'Paused';
    const Deleted = 'Deleted';
    const Inactive = 'Inactive';
}

final class AppealStatus
{
    const Appealable = 'Appealable';
    const AppealPending = 'AppealPending';
    const NotAppealable = 'NotAppealable';
}

final class AdComponent
{
    const Unknown = 'Unknown';
    const Keyword = 'Keyword';
    const KeywordParam1 = 'KeywordParam1';
    const KeywordParam2 = 'KeywordParam2';
    const KeywordParam3 = 'KeywordParam3';
    const AdTitleDescription = 'AdTitleDescription';
    const AdTitle = 'AdTitle';
    const AdDescription = 'AdDescription';
    const DisplayUrl = 'DisplayUrl';
    const DestinationUrl = 'DestinationUrl';
    const LandingUrl = 'LandingUrl';
    const SiteDomain = 'SiteDomain';
    const BusinessName = 'BusinessName';
    const PhoneNumber = 'PhoneNumber';
    const CashbackTextParam = 'CashbackTextParam';
    const AltText = 'AltText';
    const Audio = 'Audio';
    const Video = 'Video';
    const Flash = 'Flash';
    const CAsset = 'CAsset';
    const Image = 'Image';
    const Destination = 'Destination';
    const Asset = 'Asset';
    const Ad = 'Ad';
    const Order = 'Order';
    const BiddingKeyword = 'BiddingKeyword';
    const Association = 'Association';
    const Script = 'Script';
    const SiteLinkDestinationUrl = 'SiteLinkDestinationUrl';
    const SiteLinkDisplayText = 'SiteLinkDisplayText';
    const BusinessImage = 'BusinessImage';
    const MapIcon = 'MapIcon';
    const AddressLine1 = 'AddressLine1';
    const AddressLine2 = 'AddressLine2';
    const LocationExtensionBusinessName = 'LocationExtensionBusinessName';
    const Country = 'Country';
}

final class CostModel
{
    const None = 'None';
    const NonAdvertising = 'NonAdvertising';
    const Taxed = 'Taxed';
    const Shipped = 'Shipped';
}

final class DaysApplicableForConversion
{
    const Seven = 'Seven';
    const Fifteen = 'Fifteen';
    const Thirty = 'Thirty';
    const FortyFive = 'FortyFive';
}

final class RevenueModelType
{
    const Constant = 'Constant';
    const Variable = 'Variable';
    const None = 'None';
}

final class StepType
{
    const Lead = 'Lead';
    const Browse = 'Browse';
    const Prospect = 'Prospect';
    const Conversion = 'Conversion';
}

final class BudgetLimitType
{
    const MonthlyBudgetSpendUntilDepleted = 'MonthlyBudgetSpendUntilDepleted';
    const DailyBudgetAccelerated = 'DailyBudgetAccelerated';
    const DailyBudgetStandard = 'DailyBudgetStandard';
}

final class CampaignStatus
{
    const Active = 'Active';
    const Paused = 'Paused';
    const BudgetPaused = 'BudgetPaused';
    const BudgetAndManualPaused = 'BudgetAndManualPaused';
    const Deleted = 'Deleted';
}

final class AdDistribution
{
    const Search = 'Search';
    const Content = 'Content';
}

final class BiddingModel
{
    const Keyword = 'Keyword';
    const SitePlacement = 'SitePlacement';
}

final class Network
{
    const OwnedAndOperatedAndSyndicatedSearch = 'OwnedAndOperatedAndSyndicatedSearch';
    const OwnedAndOperatedOnly = 'OwnedAndOperatedOnly';
    const SyndicatedSearchOnly = 'SyndicatedSearchOnly';
}

final class PricingModel
{
    const Cpc = 'Cpc';
    const Cpm = 'Cpm';
}

final class AdGroupStatus
{
    const Draft = 'Draft';
    const Active = 'Active';
    const Paused = 'Paused';
    const Deleted = 'Deleted';
}

final class AdRotationType
{
    const OptimizeForClicks = 'OptimizeForClicks';
    const RotateAdsEvenly = 'RotateAdsEvenly';
}

final class AgeRange
{
    const EighteenToTwentyFive = 'EighteenToTwentyFive';
    const TwentyFiveToThirtyFive = 'TwentyFiveToThirtyFive';
    const ThirtyFiveToFifty = 'ThirtyFiveToFifty';
    const FiftyToSixtyFive = 'FiftyToSixtyFive';
    const SixtyFiveAndAbove = 'SixtyFiveAndAbove';
}

final class IncrementalBidPercentage
{
    const ZeroPercent = 'ZeroPercent';
    const TenPercent = 'TenPercent';
    const TwentyPercent = 'TwentyPercent';
    const ThirtyPercent = 'ThirtyPercent';
    const FortyPercent = 'FortyPercent';
    const FiftyPercent = 'FiftyPercent';
    const SixtyPercent = 'SixtyPercent';
    const SeventyPercent = 'SeventyPercent';
    const EightyPercent = 'EightyPercent';
    const NinetyPercent = 'NinetyPercent';
    const OneHundredPercent = 'OneHundredPercent';
    const NegativeTenPercent = 'NegativeTenPercent';
    const NegativeTwentyPercent = 'NegativeTwentyPercent';
    const NegativeThirtyPercent = 'NegativeThirtyPercent';
    const NegativeFortyPercent = 'NegativeFortyPercent';
    const NegativeFiftyPercent = 'NegativeFiftyPercent';
    const NegativeSixtyPercent = 'NegativeSixtyPercent';
    const NegativeSeventyPercent = 'NegativeSeventyPercent';
    const NegativeEightyPercent = 'NegativeEightyPercent';
    const NegativeNinetyPercent = 'NegativeNinetyPercent';
    const NegativeOneHundredPercent = 'NegativeOneHundredPercent';
}

final class DeviceType
{
    const Smartphones = 'Smartphones';
    const Computers = 'Computers';
}

final class GenderType
{
    const Male = 'Male';
    const Female = 'Female';
}

final class HourRange
{
    const ThreeAMToSevenAM = 'ThreeAMToSevenAM';
    const SevenAMToElevenAM = 'SevenAMToElevenAM';
    const ElevenAMToTwoPM = 'ElevenAMToTwoPM';
    const TwoPMToSixPM = 'TwoPMToSixPM';
    const SixPMToElevenPM = 'SixPMToElevenPM';
    const ElevenPMToThreeAM = 'ElevenPMToThreeAM';
}

final class GeoLocationType
{
    const Country = 'Country';
    const SubGeography = 'SubGeography';
    const MetroArea = 'MetroArea';
    const City = 'City';
}

final class AccountAnalyticsType
{
    public $AccountId;
    public $Type;
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

final class PhoneExtension
{
    public $Country;
    public $EnableClickToCallOnly;
    public $EnablePhoneExtension;
    public $Phone;
}

final class AdExtension
{
    public $CampaignId;
    public $EnableLocationExtension;
    public $PhoneExtension;
}

final class EditorialError
{
    public $Appealable;
    public $Code;
    public $DisapprovedText;
    public $ErrorCode;
    public $Index;
    public $Message;
    public $PublisherCountry;
}

final class EditorialApiFaultDetail extends ApplicationFault
{
    public $BatchErrors;
    public $EditorialErrors;
    public $OperationErrors;
}

final class MigrationStatusInfo
{
    public $MigrationType;
    public $StartTimeInUtc;
    public $Status;
}

final class AccountMigrationStatusesInfo
{
    public $AccountId;
    public $MigrationStatusInfo;
}

class AdExtension2
{
    public $Id;
    public $Status;
    public $Type;
    public $Version;
}

final class AdExtensionIdentity
{
    public $Id;
    public $Version;
}

final class CampaignAdExtension
{
    public $AdExtension;
    public $CampaignId;
    public $EditorialStatus;
}

final class CampaignAdExtensionCollection
{
    public $CampaignAdExtensions;
}

final class AdExtensionIdToCampaignIdAssociation
{
    public $AdExtensionId;
    public $CampaignId;
}

final class AdExtensionEditorialReason
{
    public $Location;
    public $PublisherCountries;
    public $ReasonCode;
    public $Term;
}

final class AdExtensionEditorialReasonCollection
{
    public $AdExtensionId;
    public $Reasons;
}

class Criterion
{
    public $Type;
}

class AdGroupCriterion
{
    public $AdGroupId;
    public $Criterion;
    public $Id;
    public $Status;
    public $Type;
}

final class Entity
{
    public $EntityType;
    public $Id;
}

class Exclusion
{
    public $Id;
    public $Type;
}

final class EntityToExclusionsAssociation
{
    public $AssociatedEntity;
    public $Exclusions;
}

final class ExclusionToEntityAssociation
{
    public $AssociatedEntity;
    public $Exclusion;
}

class Ad
{
    public $EditorialStatus;
    public $Id;
    public $Status;
    public $Type;
}

final class Bid
{
    public $Amount;
}

final class Keyword
{
    public $BroadMatchBid;
    public $ContentMatchBid;
    public $EditorialStatus;
    public $ExactMatchBid;
    public $Id;
    public $NegativeKeywords;
    public $Param1;
    public $Param2;
    public $Param3;
    public $PhraseMatchBid;
    public $Status;
    public $Text;
}

final class KeywordDestinationUrl
{
    public $DestinationUrl;
    public $KeywordId;
}

final class BusinessImageIcon
{
    public $CustomIconAssetId;
    public $StandardBusinessIcon;
}

final class TimeOfTheDay
{
    public $Hour;
    public $Minute;
}

final class DayTimeInterval
{
    public $Begin;
    public $End;
}

final class HoursOfOperation
{
    public $Day;
    public $openTime1;
    public $openTime2;
}

final class Business
{
    public $AddressLine1;
    public $AddressLine2;
    public $BusinessImageIcon;
    public $City;
    public $CountryOrRegion;
    public $Description;
    public $Email;
    public $GeoCodeStatus;
    public $HrsOfOperation;
    public $Id;
    public $IsOpen24Hours;
    public $LatitudeDegrees;
    public $LongitudeDegrees;
    public $Name;
    public $OtherPaymentTypeDesc;
    public $Payment;
    public $Phone;
    public $StateOrProvince;
    public $Status;
    public $URL;
    public $ZipOrPostalCode;
}

final class BusinessInfo
{
    public $Id;
    public $Name;
}

final class SitePlacement
{
    public $Bid;
    public $Id;
    public $PlacementId;
    public $Status;
    public $Url;
}

final class ImpressionsPerDayRange
{
    public $Maximum;
    public $Minimum;
}

final class Dimension
{
    public $Height;
    public $Width;
}

final class MediaType
{
    public $Dimensions;
    public $Name;
}

final class PlacementDetail
{
    public $ImpressionsRangePerDay;
    public $PathName;
    public $PlacementId;
    public $SupportedMediaTypes;
}

final class EditorialReason
{
    public $Location;
    public $PublisherCountries;
    public $ReasonCode;
    public $Term;
}

final class EditorialReasonCollection
{
    public $AdOrKeywordId;
    public $AppealStatus;
    public $Reasons;
}

final class RevenueModel
{
    public $ConstantRevenueValue;
    public $Type;
}

final class Step
{
    public $Id;
    public $Name;
    public $PositionNumber;
    public $Script;
    public $Type;
}

final class Goal
{
    public $CostModel;
    public $DaysApplicableForConversion;
    public $Id;
    public $Name;
    public $RevenueModel;
    public $Steps;
    public $YEventId;
}

final class GoalResult
{
    public $GoalId;
    public $StepIds;
}

final class GoalError
{
    public $BatchErrors;
    public $Index;
    public $StepErrors;
}

final class AnalyticsApiFaultDetail extends ApplicationFault
{
    public $GoalErrors;
    public $OperationErrors;
}

final class Campaign
{
    public $BudgetType;
    public $ConversionTrackingEnabled;
    public $DailyBudget;
    public $DaylightSaving;
    public $Description;
    public $Id;
    public $MonthlyBudget;
    public $Name;
    public $Status;
    public $TimeZone;
}

final class CampaignNegativeKeywords
{
    public $CampaignId;
    public $NegativeKeywords;
}

final class CampaignNegativeSites
{
    public $CampaignId;
    public $NegativeSites;
}

final class Date
{
    public $Day;
    public $Month;
    public $Year;
}

final class PublisherCountry
{
    public $Country;
    public $IsOptedIn;
}

final class AdGroup
{
    public $AdDistribution;
    public $BiddingModel;
    public $BroadMatchBid;
    public $ContentMatchBid;
    public $EndDate;
    public $ExactMatchBid;
    public $Id;
    public $Language;
    public $Name;
    public $Network;
    public $PhraseMatchBid;
    public $PricingModel;
    public $PublisherCountries;
    public $StartDate;
    public $Status;
}

final class AdGroupNegativeKeywords
{
    public $AdGroupId;
    public $NegativeKeywords;
}

final class AdGroupNegativeSites
{
    public $AdGroupId;
    public $NegativeSites;
}

final class AdRotation
{
    public $EndDate;
    public $StartDate;
    public $Type;
}

final class AdGroupAdRotation
{
    public $AdGroupId;
    public $AdRotation;
}

final class AgeTargetBid
{
    public $Age;
    public $IncrementalBid;
}

final class AgeTarget
{
    public $Bids;
}

final class DayTargetBid
{
    public $Day;
    public $IncrementalBid;
}

final class DayTarget
{
    public $Bids;
    public $TargetAllDays;
}

final class DeviceTarget
{
    public $Devices;
}

final class GenderTargetBid
{
    public $Gender;
    public $IncrementalBid;
}

final class GenderTarget
{
    public $Bids;
}

final class HourTargetBid
{
    public $Hour;
    public $IncrementalBid;
}

final class HourTarget
{
    public $Bids;
    public $TargetAllHours;
}

final class BusinessTargetBid
{
    public $BusinessId;
    public $IncrementalBid;
    public $Radius;
}

final class BusinessTarget
{
    public $Bids;
}

final class CityTargetBid
{
    public $City;
    public $IncrementalBid;
}

final class CityTarget
{
    public $Bids;
}

final class CountryTargetBid
{
    public $CountryAndRegion;
    public $IncrementalBid;
}

final class CountryTarget
{
    public $Bids;
}

final class MetroAreaTargetBid
{
    public $IncrementalBid;
    public $MetroArea;
}

final class MetroAreaTarget
{
    public $Bids;
}

final class RadiusTargetBid
{
    public $Id;
    public $IncrementalBid;
    public $LatitudeDegrees;
    public $LongitudeDegrees;
    public $Name;
    public $Radius;
}

final class RadiusTarget
{
    public $Bids;
}

final class StateTargetBid
{
    public $IncrementalBid;
    public $State;
}

final class StateTarget
{
    public $Bids;
}

final class LocationTarget
{
    public $BusinessTarget;
    public $CityTarget;
    public $CountryTarget;
    public $HasPhysicalIntent;
    public $MetroAreaTarget;
    public $RadiusTarget;
    public $StateTarget;
    public $TargetAllLocations;
}

final class Target
{
    public $Age;
    public $Day;
    public $Device;
    public $Gender;
    public $Hour;
    public $Id;
    public $IsLibraryTarget;
    public $Location;
    public $Name;
}

final class DeviceOS
{
    public $DeviceName;
    public $OSName;
}

final class DeviceOSTarget
{
    public $DeviceOSList;
}

final class TargetAssociation
{
    public $DeviceOSTarget;
    public $Id;
}

final class TargetInfo
{
    public $Id;
    public $Name;
}

final class MobileAd extends Ad
{
    public $BusinessName;
    public $DestinationUrl;
    public $DisplayUrl;
    public $PhoneNumber;
    public $Text;
    public $Title;
}

final class TextAd extends Ad
{
    public $DestinationUrl;
    public $DisplayUrl;
    public $Text;
    public $Title;
}

final class ProductAd extends Ad
{
    public $PromotionalText;
}

class ApplicationFault
{
    public $TrackingId;
}

final class CallAdExtension extends AdExtension2
{
    public $CountryCode;
    public $IsCallOnly;
    public $PhoneNumber;
}

final class Address
{
    public $CityName;
    public $CountryCode;
    public $PostalCode;
    public $ProvinceCode;
    public $ProvinceName;
    public $StreetAddress;
    public $StreetAddress2;
}

final class GeoPoint
{
    public $LatitudeInMicroDegrees;
    public $LongitudeInMicroDegrees;
}

final class LocationAdExtension extends AdExtension2
{
    public $Address;
    public $CompanyName;
    public $GeoCodeStatus;
    public $GeoPoint;
    public $IconMediaId;
    public $ImageMediaId;
    public $PhoneNumber;
}

final class SiteLink
{
    public $DestinationUrl;
    public $DisplayText;
}

final class SiteLinksAdExtension extends AdExtension2
{
    public $SiteLinks;
}

final class ProductCondition
{
    public $Attribute;
    public $Operand;
}

final class ProductConditionCollection
{
    public $Conditions;
}

final class ProductAdExtension extends AdExtension2
{
    public $Name;
    public $ProductCollectionId;
    public $ProductSelection;
}

final class Product extends Criterion
{
    public $Conditions;
}

class CriterionBid
{
    public $Type;
}

final class BiddableAdGroupCriterion extends AdGroupCriterion
{
    public $CriterionBid;
}

final class FixedBid extends CriterionBid
{
    public $Bid;
}

final class ExcludedGeoLocation
{
    public $LocationName;
    public $LocationType;
}

final class ExcludedRadiusLocation
{
    public $Id;
    public $LatitudeDegrees;
    public $LongitudeDegrees;
    public $Name;
    public $Radius;
}

final class ExcludedRadiusTarget
{
    public $ExcludedRadiusLocations;
}

final class LocationExclusion extends Exclusion
{
    public $ExcludedGeoTargets;
    public $ExcludedRadiusTarget;
}

final class SetAnalyticsTypeRequest
{
    public $AccountAnalyticsTypes;
}

final class SetAnalyticsTypeResponse
{
}

final class GetAnalyticsTypeRequest
{
    public $AccountIds;
}

final class GetAnalyticsTypeResponse
{
    public $Types;
}

final class GetCampaignAdExtensionsRequest
{
    public $AccountId;
    public $CampaignIds;
}

final class GetCampaignAdExtensionsResponse
{
    public $AdExtensions;
}

final class SetCampaignAdExtensionsRequest
{
    public $AccountId;
    public $AdExtensions;
}

final class SetCampaignAdExtensionsResponse
{
}

final class GetAccountMigrationStatusesRequest
{
    public $AccountIds;
    public $MigrationType;
}

final class GetAccountMigrationStatusesResponse
{
    public $MigrationStatuses;
}

final class AddAdExtensionsRequest
{
    public $AccountId;
    public $AdExtensions;
}

final class AddAdExtensionsResponse
{
    public $AdExtensionIdentities;
}

final class DeleteAdExtensionsRequest
{
    public $AccountId;
    public $AdExtensionIds;
}

final class DeleteAdExtensionsResponse
{
}

final class GetAdExtensionsByCampaignIdsRequest
{
    public $AccountId;
    public $CampaignIds;
    public $AdExtensionType;
}

final class GetAdExtensionsByCampaignIdsResponse
{
    public $CampaignAdExtensionCollection;
}

final class GetAdExtensionsByIdsRequest
{
    public $AccountId;
    public $AdExtensionIds;
    public $AdExtensionType;
}

final class GetAdExtensionsByIdsResponse
{
    public $AdExtensions;
}

final class GetAdExtensionsEditorialReasonsByCampaignIdsRequest
{
    public $AccountId;
    public $AdExtensionIdToCampaignIdAssociations;
    public $AdExtensionType;
}

final class GetAdExtensionsEditorialReasonsByCampaignIdsResponse
{
    public $EditorialReasons;
}

final class SetAdExtensionsToCampaignsRequest
{
    public $AccountId;
    public $AdExtensionIdToCampaignIdAssociations;
}

final class SetAdExtensionsToCampaignsResponse
{
}

final class DeleteAdExtensionsFromCampaignsRequest
{
    public $AccountId;
    public $AdExtensionIdToCampaignIdAssociations;
}

final class DeleteAdExtensionsFromCampaignsResponse
{
}

final class AddImageRequest
{
    public $AccountId;
    public $Data;
    public $Type;
}

final class AddImageResponse
{
    public $MediaId;
}

final class GetImageByIdRequest
{
    public $AccountId;
    public $MediaId;
}

final class GetImageByIdResponse
{
    public $Data;
}

final class GetAdGroupCriterionsByIdsRequest
{
    public $AccountId;
    public $AdGroupCriterionIds;
}

final class GetAdGroupCriterionsByIdsResponse
{
    public $AdGroupCriterions;
}

final class GetAdGroupCriterionsByAdGroupIdRequest
{
    public $AccountId;
    public $AdGroupId;
    public $CriterionTypeFilter;
}

final class GetAdGroupCriterionsByAdGroupIdResponse
{
    public $AdGroupCriterions;
}

final class AddAdGroupCriterionsRequest
{
    public $AccountId;
    public $AdGroupCriterions;
}

final class AddAdGroupCriterionsResponse
{
    public $AdGroupCriterionIds;
}

final class SetAdGroupCriterionsRequest
{
    public $AccountId;
    public $AdGroupCriterions;
}

final class SetAdGroupCriterionsResponse
{
}

final class DeleteAdGroupCriterionsRequest
{
    public $AccountId;
    public $AdGroupCriterionIds;
    public $AdGroupId;
}

final class DeleteAdGroupCriterionsResponse
{
}

final class GetExclusionsByAssociatedEntityIdsRequest
{
    public $Entities;
    public $ExclusionType;
    public $LocationTargetVersion;
}

final class GetExclusionsByAssociatedEntityIdsResponse
{
    public $EntityToExclusionsAssociations;
}

final class SetExclusionsToAssociatedEntitiesRequest
{
    public $ExclusionToEntityAssociations;
}

final class SetExclusionsToAssociatedEntitiesResponse
{
}

final class AddAdsRequest
{
    public $AdGroupId;
    public $Ads;
}

final class AddAdsResponse
{
    public $AdIds;
}

final class DeleteAdsRequest
{
    public $AdGroupId;
    public $AdIds;
}

final class DeleteAdsResponse
{
}

final class GetAdsByEditorialStatusRequest
{
    public $AdGroupId;
    public $EditorialStatus;
}

final class GetAdsByEditorialStatusResponse
{
    public $Ads;
}

final class GetAdsByIdsRequest
{
    public $AdGroupId;
    public $AdIds;
}

final class GetAdsByIdsResponse
{
    public $Ads;
}

final class GetAdsByAdGroupIdRequest
{
    public $AdGroupId;
}

final class GetAdsByAdGroupIdResponse
{
    public $Ads;
}

final class UpdateAdsRequest
{
    public $AdGroupId;
    public $Ads;
}

final class UpdateAdsResponse
{
}

final class PauseAdsRequest
{
    public $AdGroupId;
    public $AdIds;
}

final class PauseAdsResponse
{
}

final class ResumeAdsRequest
{
    public $AdGroupId;
    public $AdIds;
}

final class ResumeAdsResponse
{
}

final class AddKeywordsRequest
{
    public $AdGroupId;
    public $Keywords;
}

final class AddKeywordsResponse
{
    public $KeywordIds;
}

final class DeleteKeywordsRequest
{
    public $AdGroupId;
    public $KeywordIds;
}

final class DeleteKeywordsResponse
{
}

final class GetKeywordsByEditorialStatusRequest
{
    public $AdGroupId;
    public $EditorialStatus;
}

final class GetKeywordsByEditorialStatusResponse
{
    public $Keywords;
}

final class GetKeywordsByIdsRequest
{
    public $AdGroupId;
    public $KeywordIds;
}

final class GetKeywordsByIdsResponse
{
    public $Keywords;
}

final class GetKeywordsByAdGroupIdRequest
{
    public $AdGroupId;
}

final class GetKeywordsByAdGroupIdResponse
{
    public $Keywords;
}

final class PauseKeywordsRequest
{
    public $AdGroupId;
    public $KeywordIds;
}

final class PauseKeywordsResponse
{
}

final class ResumeKeywordsRequest
{
    public $AdGroupId;
    public $KeywordIds;
}

final class ResumeKeywordsResponse
{
}

final class UpdateKeywordsRequest
{
    public $AdGroupId;
    public $Keywords;
}

final class UpdateKeywordsResponse
{
}

final class SetDestinationUrlToKeywordsRequest
{
    public $AdGroupId;
    public $KeywordDestinationUrls;
}

final class SetDestinationUrlToKeywordsResponse
{
}

final class GetDestinationUrlByKeywordIdsRequest
{
    public $AdGroupId;
    public $KeywordIds;
}

final class GetDestinationUrlByKeywordIdsResponse
{
    public $DestinationUrls;
}

final class AppealEditorialRejectionsRequest
{
    public $EntityIds;
    public $EntityType;
    public $JustificationText;
}

final class AppealEditorialRejectionsResponse
{
}

final class AddBusinessesRequest
{
    public $Businesses;
}

final class AddBusinessesResponse
{
    public $BusinessIds;
}

final class UpdateBusinessesRequest
{
    public $Businesses;
}

final class UpdateBusinessesResponse
{
}

final class DeleteBusinessesRequest
{
    public $BusinessIds;
}

final class DeleteBusinessesResponse
{
}

final class GetBusinessesInfoRequest
{
}

final class GetBusinessesInfoResponse
{
    public $BusinessesInfo;
}

final class GetBusinessesByIdsRequest
{
    public $BusinessIds;
}

final class GetBusinessesByIdsResponse
{
    public $Businesses;
}

final class AddSitePlacementsRequest
{
    public $AdGroupId;
    public $SitePlacements;
}

final class AddSitePlacementsResponse
{
    public $SitePlacementIds;
}

final class DeleteSitePlacementsRequest
{
    public $AdGroupId;
    public $SitePlacementIds;
}

final class DeleteSitePlacementsResponse
{
}

final class GetSitePlacementsByIdsRequest
{
    public $AdGroupId;
    public $SitePlacementIds;
}

final class GetSitePlacementsByIdsResponse
{
    public $SitePlacements;
}

final class GetSitePlacementsByAdGroupIdRequest
{
    public $AdGroupId;
}

final class GetSitePlacementsByAdGroupIdResponse
{
    public $SitePlacements;
}

final class PauseSitePlacementsRequest
{
    public $AdGroupId;
    public $SitePlacementIds;
}

final class PauseSitePlacementsResponse
{
}

final class ResumeSitePlacementsRequest
{
    public $AdGroupId;
    public $SitePlacementIds;
}

final class ResumeSitePlacementsResponse
{
}

final class UpdateSitePlacementsRequest
{
    public $AdGroupId;
    public $SitePlacements;
}

final class UpdateSitePlacementsResponse
{
}

final class GetPlacementDetailsForUrlsRequest
{
    public $Urls;
}

final class GetPlacementDetailsForUrlsResponse
{
    public $PlacementDetails;
}

final class GetNormalizedStringsRequest
{
    public $Strings;
    public $Language;
    public $RemoveNoise;
}

final class GetNormalizedStringsResponse
{
    public $NormalizedStrings;
}

final class GetKeywordEditorialReasonsByIdsRequest
{
    public $KeywordIds;
    public $AccountId;
}

final class GetKeywordEditorialReasonsByIdsResponse
{
    public $EditorialReasons;
}

final class GetAdEditorialReasonsByIdsRequest
{
    public $AdIds;
    public $AccountId;
}

final class GetAdEditorialReasonsByIdsResponse
{
    public $EditorialReasons;
}

final class GetEditorialReasonsByIdsRequest
{
    public $AccountId;
    public $EntityIds;
    public $EntityType;
}

final class GetEditorialReasonsByIdsResponse
{
    public $EditorialReasons;
}

final class AddGoalsRequest
{
    public $AccountId;
    public $Goals;
}

final class AddGoalsResponse
{
    public $GoalResults;
}

final class UpdateGoalsRequest
{
    public $AccountId;
    public $Goals;
}

final class UpdateGoalsResponse
{
    public $GoalResults;
}

final class GetGoalsRequest
{
    public $AccountId;
}

final class GetGoalsResponse
{
    public $Goals;
}

final class DeleteGoalsRequest
{
    public $AccountId;
    public $GoalIds;
}

final class DeleteGoalsResponse
{
}

final class AddCampaignsRequest
{
    public $AccountId;
    public $Campaigns;
}

final class AddCampaignsResponse
{
    public $CampaignIds;
}

final class GetCampaignsByAccountIdRequest
{
    public $AccountId;
}

final class GetCampaignsByAccountIdResponse
{
    public $Campaigns;
}

final class GetCampaignsByIdsRequest
{
    public $AccountId;
    public $CampaignIds;
}

final class GetCampaignsByIdsResponse
{
    public $Campaigns;
}

final class PauseCampaignsRequest
{
    public $AccountId;
    public $CampaignIds;
}

final class PauseCampaignsResponse
{
}

final class ResumeCampaignsRequest
{
    public $AccountId;
    public $CampaignIds;
}

final class ResumeCampaignsResponse
{
}

final class DeleteCampaignsRequest
{
    public $AccountId;
    public $CampaignIds;
}

final class DeleteCampaignsResponse
{
}

final class UpdateCampaignsRequest
{
    public $AccountId;
    public $Campaigns;
}

final class UpdateCampaignsResponse
{
}

final class GetNegativeKeywordsByCampaignIdsRequest
{
    public $AccountId;
    public $CampaignIds;
}

final class GetNegativeKeywordsByCampaignIdsResponse
{
    public $CampaignNegativeKeywords;
}

final class SetNegativeKeywordsToCampaignsRequest
{
    public $AccountId;
    public $CampaignNegativeKeywords;
}

final class SetNegativeKeywordsToCampaignsResponse
{
}

final class GetNegativeSitesByCampaignIdsRequest
{
    public $AccountId;
    public $CampaignIds;
}

final class GetNegativeSitesByCampaignIdsResponse
{
    public $CampaignNegativeSites;
}

final class SetNegativeSitesToCampaignsRequest
{
    public $AccountId;
    public $CampaignNegativeSites;
}

final class SetNegativeSitesToCampaignsResponse
{
}

final class AddAdGroupsRequest
{
    public $CampaignId;
    public $AdGroups;
}

final class AddAdGroupsResponse
{
    public $AdGroupIds;
}

final class DeleteAdGroupsRequest
{
    public $CampaignId;
    public $AdGroupIds;
}

final class DeleteAdGroupsResponse
{
}

final class GetAdGroupsByIdsRequest
{
    public $CampaignId;
    public $AdGroupIds;
}

final class GetAdGroupsByIdsResponse
{
    public $AdGroups;
}

final class GetAdGroupsByCampaignIdRequest
{
    public $CampaignId;
}

final class GetAdGroupsByCampaignIdResponse
{
    public $AdGroups;
}

final class PauseAdGroupsRequest
{
    public $CampaignId;
    public $AdGroupIds;
}

final class PauseAdGroupsResponse
{
}

final class ResumeAdGroupsRequest
{
    public $CampaignId;
    public $AdGroupIds;
}

final class ResumeAdGroupsResponse
{
}

final class SubmitAdGroupForApprovalRequest
{
    public $AdGroupId;
}

final class SubmitAdGroupForApprovalResponse
{
}

final class UpdateAdGroupsRequest
{
    public $CampaignId;
    public $AdGroups;
}

final class UpdateAdGroupsResponse
{
}

final class GetNegativeKeywordsByAdGroupIdsRequest
{
    public $CampaignId;
    public $AdGroupIds;
}

final class GetNegativeKeywordsByAdGroupIdsResponse
{
    public $AdGroupNegativeKeywords;
}

final class SetNegativeKeywordsToAdGroupsRequest
{
    public $CampaignId;
    public $AdGroupNegativeKeywords;
}

final class SetNegativeKeywordsToAdGroupsResponse
{
}

final class GetNegativeSitesByAdGroupIdsRequest
{
    public $CampaignId;
    public $AdGroupIds;
}

final class GetNegativeSitesByAdGroupIdsResponse
{
    public $AdGroupNegativeSites;
}

final class SetNegativeSitesToAdGroupsRequest
{
    public $CampaignId;
    public $AdGroupNegativeSites;
}

final class SetNegativeSitesToAdGroupsResponse
{
}

final class GetAdRotationByAdGroupIdsRequest
{
    public $AdGroupIds;
    public $CampaignId;
}

final class GetAdRotationByAdGroupIdsResponse
{
    public $AdRotationByAdGroupIds;
}

final class SetAdRotationToAdGroupsRequest
{
    public $AdGroupAdRotations;
    public $CampaignId;
}

final class SetAdRotationToAdGroupsResponse
{
}

final class AddTargetRequest
{
    public $AdGroupId;
    public $Target;
}

final class AddTargetResponse
{
    public $TargetId;
}

final class DeleteTargetRequest
{
    public $AdGroupId;
}

final class DeleteTargetResponse
{
}

final class GetTargetByAdGroupIdRequest
{
    public $AdGroupId;
    public $LocationTargetVersion;
}

final class GetTargetByAdGroupIdResponse
{
    public $Target;
}

final class UpdateTargetRequest
{
    public $AdGroupId;
    public $Target;
}

final class UpdateTargetResponse
{
}

final class AddTargetsToLibraryRequest
{
    public $Targets;
}

final class AddTargetsToLibraryResponse
{
    public $TargetIds;
}

final class UpdateTargetsInLibraryRequest
{
    public $Targets;
}

final class UpdateTargetsInLibraryResponse
{
}

final class UpdateDeviceOSTargetsRequest
{
    public $TargetAssociations;
}

final class UpdateDeviceOSTargetsResponse
{
}

final class DeleteTargetsFromLibraryRequest
{
    public $TargetIds;
}

final class DeleteTargetsFromLibraryResponse
{
}

final class GetTargetsInfoFromLibraryRequest
{
}

final class GetTargetsInfoFromLibraryResponse
{
    public $TargetsInfo;
}

final class GetTargetsByIdsRequest
{
    public $TargetIds;
    public $LocationTargetVersion;
}

final class GetTargetsByIdsResponse
{
    public $Targets;
}

final class GetDeviceOSTargetsByIdsRequest
{
    public $TargetIds;
}

final class GetDeviceOSTargetsByIdsResponse
{
    public $TargetAssociations;
}

final class SetTargetToAdGroupRequest
{
    public $AdGroupId;
    public $TargetId;
}

final class SetTargetToAdGroupResponse
{
}

final class DeleteTargetFromAdGroupRequest
{
    public $AdGroupId;
}

final class DeleteTargetFromAdGroupResponse
{
}

final class GetTargetsByAdGroupIdsRequest
{
    public $AdGroupIds;
    public $LocationTargetVersion;
}

final class GetTargetsByAdGroupIdsResponse
{
    public $Targets;
}

final class SetTargetToCampaignRequest
{
    public $CampaignId;
    public $TargetId;
}

final class SetTargetToCampaignResponse
{
}

final class DeleteTargetFromCampaignRequest
{
    public $CampaignId;
}

final class DeleteTargetFromCampaignResponse
{
}

final class GetTargetsByCampaignIdsRequest
{
    public $CampaignIds;
    public $LocationTargetVersion;
}

final class GetTargetsByCampaignIdsResponse
{
    public $Targets;
}


