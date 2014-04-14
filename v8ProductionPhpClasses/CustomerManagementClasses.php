<?php
final class AccountLifeCycleStatus
{
    const Draft = 'Draft';
    const Active = 'Active';
    const Inactive = 'Inactive';
    const Pause = 'Pause';
    const Pending = 'Pending';
}

final class ApplicationType
{
    const Advertiser = 'Advertiser';
    const Publisher = 'Publisher';
}

final class AccountType
{
    const Advertiser = 'Advertiser';
    const Publisher = 'Publisher';
}

final class CurrencyType
{
    const AlgerianDinar = 'AlgerianDinar';
    const ArgentinePeso = 'ArgentinePeso';
    const ArmenianDram = 'ArmenianDram';
    const AustralianDollar = 'AustralianDollar';
    const AzerbaijanianManat = 'AzerbaijanianManat';
    const BahrainiDinar = 'BahrainiDinar';
    const Baht = 'Baht';
    const Balboa = 'Balboa';
    const BelarussianRuble = 'BelarussianRuble';
    const BelizeDollar = 'BelizeDollar';
    const Bolivar = 'Bolivar';
    const Boliviano = 'Boliviano';
    const BrazilianReal = 'BrazilianReal';
    const BruneiDollar = 'BruneiDollar';
    const CanadianDollar = 'CanadianDollar';
    const ChileanPeso = 'ChileanPeso';
    const ColombianPeso = 'ColombianPeso';
    const CordobaOro = 'CordobaOro';
    const CostaRicanColon = 'CostaRicanColon';
    const Croatiankuna = 'Croatiankuna';
    const CzechKoruna = 'CzechKoruna';
    const DanishKrone = 'DanishKrone';
    const Denar = 'Denar';
    const DominicanPeso = 'DominicanPeso';
    const Dong = 'Dong';
    const EgyptianPound = 'EgyptianPound';
    const Euro = 'Euro';
    const Forint = 'Forint';
    const Guarani = 'Guarani';
    const HongKongDollar = 'HongKongDollar';
    const Hryvnia = 'Hryvnia';
    const IcelandKrona = 'IcelandKrona';
    const IndianRupee = 'IndianRupee';
    const IranianRial = 'IranianRial';
    const IraqiDinar = 'IraqiDinar';
    const JamaicanDollar = 'JamaicanDollar';
    const JapaneseYen = 'JapaneseYen';
    const JordanianDinar = 'JordanianDinar';
    const KenyanShilling = 'KenyanShilling';
    const Kroon = 'Kroon';
    const KuwaitiDinar = 'KuwaitiDinar';
    const Lari = 'Lari';
    const LatvianLats = 'LatvianLats';
    const LebanesePound = 'LebanesePound';
    const Lek = 'Lek';
    const Lempira = 'Lempira';
    const Leu = 'Leu';
    const Lev = 'Lev';
    const LibyanDinar = 'LibyanDinar';
    const LithuanianLitus = 'LithuanianLitus';
    const MalaysianRinggit = 'MalaysianRinggit';
    const MexicanPeso = 'MexicanPeso';
    const MoroccanDirham = 'MoroccanDirham';
    const NewIsraeliSheqel = 'NewIsraeliSheqel';
    const NewTaiwanDollar = 'NewTaiwanDollar';
    const NewZealandDollar = 'NewZealandDollar';
    const NorwegianKrone = 'NorwegianKrone';
    const NuevoSol = 'NuevoSol';
    const PakistanRupee = 'PakistanRupee';
    const Pataca = 'Pataca';
    const PesoUruguayo = 'PesoUruguayo';
    const PhilippinePeso = 'PhilippinePeso';
    const QatariRial = 'QatariRial';
    const Quetzal = 'Quetzal';
    const RialOmani = 'RialOmani';
    const Rufiyaa = 'Rufiyaa';
    const Rupiah = 'Rupiah';
    const RussianRuble = 'RussianRuble';
    const SaudiRiyal = 'SaudiRiyal';
    const SingaporeDollar = 'SingaporeDollar';
    const SlovakKoruna = 'SlovakKoruna';
    const Som = 'Som';
    const SouthAfricanRand = 'SouthAfricanRand';
    const SwedishKrona = 'SwedishKrona';
    const SwissFranc = 'SwissFranc';
    const SyrianPound = 'SyrianPound';
    const Tenge = 'Tenge';
    const Tolar = 'Tolar';
    const TrinidadandTobagoDollar = 'TrinidadandTobagoDollar';
    const Tugrik = 'Tugrik';
    const TunisianDinar = 'TunisianDinar';
    const TurkishLira = 'TurkishLira';
    const UAEDirham = 'UAEDirham';
    const UKPound = 'UKPound';
    const USDollar = 'USDollar';
    const UzbekistanSum = 'UzbekistanSum';
    const Won = 'Won';
    const YemeniRial = 'YemeniRial';
    const YuanRenminbi = 'YuanRenminbi';
    const YugoslavianNewDinar = 'YugoslavianNewDinar';
    const ZimbabweDollar = 'ZimbabweDollar';
    const Zloty = 'Zloty';
}

final class AccountFinancialStatus
{
    const Proposed = 'Proposed';
    const PendingCreditCheck = 'PendingCreditCheck';
    const ClearFinancialStatus = 'ClearFinancialStatus';
    const SoldToOnly = 'SoldToOnly';
    const CreditWarning = 'CreditWarning';
    const Hold = 'Hold';
    const WriteOff = 'WriteOff';
    const TaxOnHold = 'TaxOnHold';
    const UserHold = 'UserHold';
}

final class LanguageType
{
    const Danish = 'Danish';
    const Dutch = 'Dutch';
    const English = 'English';
    const Finnish = 'Finnish';
    const French = 'French';
    const German = 'German';
    const Italian = 'Italian';
    const Japanese = 'Japanese';
    const Norwegian = 'Norwegian';
    const Portuguese = 'Portuguese';
    const Swedish = 'Swedish';
    const Spanish = 'Spanish';
    const Arabic = 'Arabic';
    const Hebrew = 'Hebrew';
    const Korean = 'Korean';
    const Russian = 'Russian';
    const Chinese = 'Chinese';
}

final class PaymentMethodType
{
    const CreditCard = 'CreditCard';
    const Invoice = 'Invoice';
    const Check = 'Check';
    const ElectronicFundsTransfer = 'ElectronicFundsTransfer';
}

final class TimeZoneType
{
    const AbuDhabiMuscat = 'AbuDhabiMuscat';
    const Adelaide = 'Adelaide';
    const Alaska = 'Alaska';
    const AlmatyNovosibirsk = 'AlmatyNovosibirsk';
    const AmsterdamBerlinBernRomeStockholmVienna = 'AmsterdamBerlinBernRomeStockholmVienna';
    const Arizona = 'Arizona';
    const AstanaDhaka = 'AstanaDhaka';
    const AthensBuckarestIstanbul = 'AthensBuckarestIstanbul';
    const AtlanticTimeCanada = 'AtlanticTimeCanada';
    const AucklandWellington = 'AucklandWellington';
    const Azores = 'Azores';
    const Baghdad = 'Baghdad';
    const BakuTbilisiYerevan = 'BakuTbilisiYerevan';
    const BangkokHanoiJakarta = 'BangkokHanoiJakarta';
    const BeijingChongqingHongKongUrumqi = 'BeijingChongqingHongKongUrumqi';
    const BelgradeBratislavaBudapestLjubljanaPrague = 'BelgradeBratislavaBudapestLjubljanaPrague';
    const BogotaLimaQuito = 'BogotaLimaQuito';
    const Brasilia = 'Brasilia';
    const Brisbane = 'Brisbane';
    const BrusselsCopenhagenMadridParis = 'BrusselsCopenhagenMadridParis';
    const Bucharest = 'Bucharest';
    const BuenosAiresGeorgetown = 'BuenosAiresGeorgetown';
    const Cairo = 'Cairo';
    const CanberraMelbourneSydney = 'CanberraMelbourneSydney';
    const CapeVerdeIsland = 'CapeVerdeIsland';
    const CaracasLaPaz = 'CaracasLaPaz';
    const CasablancaMonrovia = 'CasablancaMonrovia';
    const CentralAmerica = 'CentralAmerica';
    const CentralTimeUSCanada = 'CentralTimeUSCanada';
    const ChennaiKolkataMumbaiNewDelhi = 'ChennaiKolkataMumbaiNewDelhi';
    const ChihuahuaLaPazMazatlan = 'ChihuahuaLaPazMazatlan';
    const Darwin = 'Darwin';
    const EasternTimeUSCanada = 'EasternTimeUSCanada';
    const Ekaterinburg = 'Ekaterinburg';
    const FijiKamchatkaMarshallIsland = 'FijiKamchatkaMarshallIsland';
    const Greenland = 'Greenland';
    const GreenwichMeanTimeDublinEdinburghLisbonLondon = 'GreenwichMeanTimeDublinEdinburghLisbonLondon';
    const GuadalajaraMexicoCityMonterrey = 'GuadalajaraMexicoCityMonterrey';
    const GuamPortMoresby = 'GuamPortMoresby';
    const HararePretoria = 'HararePretoria';
    const Hawaii = 'Hawaii';
    const HelsinkiKyivRigaSofiaTallinnVilnius = 'HelsinkiKyivRigaSofiaTallinnVilnius';
    const Hobart = 'Hobart';
    const IndianaEast = 'IndianaEast';
    const InternationalDatelineWest = 'InternationalDatelineWest';
    const IrkutskUlaanBataar = 'IrkutskUlaanBataar';
    const IslamabadKarachiTashkent = 'IslamabadKarachiTashkent';
    const Jerusalem = 'Jerusalem';
    const Kabul = 'Kabul';
    const Kathmandu = 'Kathmandu';
    const Krasnoyarsk = 'Krasnoyarsk';
    const KualaLumpurSingapore = 'KualaLumpurSingapore';
    const KuwaitRiyadh = 'KuwaitRiyadh';
    const MagadanSolomonIslandNewCaledonia = 'MagadanSolomonIslandNewCaledonia';
    const MidAtlantic = 'MidAtlantic';
    const MidwayIslandAndSamoa = 'MidwayIslandAndSamoa';
    const MoscowStPetersburgVolgograd = 'MoscowStPetersburgVolgograd';
    const MountainTimeUSCanada = 'MountainTimeUSCanada';
    const Nairobi = 'Nairobi';
    const Newfoundland = 'Newfoundland';
    const Nukualofa = 'Nukualofa';
    const OsakaSapporoTokyo = 'OsakaSapporoTokyo';
    const PacificTimeUSCanadaTijuana = 'PacificTimeUSCanadaTijuana';
    const Perth = 'Perth';
    const Rangoon = 'Rangoon';
    const Santiago = 'Santiago';
    const SarajevoSkopjeWarsawZagreb = 'SarajevoSkopjeWarsawZagreb';
    const Saskatchewan = 'Saskatchewan';
    const Seoul = 'Seoul';
    const SriJayawardenepura = 'SriJayawardenepura';
    const Taipei = 'Taipei';
    const Tehran = 'Tehran';
    const Vladivostok = 'Vladivostok';
    const WestCentralAfrica = 'WestCentralAfrica';
    const Yakutsk = 'Yakutsk';
}

final class CustomerFinancialStatus
{
    const ProposalsOnly = 'ProposalsOnly';
    const PendingCreditCheck = 'PendingCreditCheck';
    const ClearFinancialStatus = 'ClearFinancialStatus';
    const SoldToOnly = 'SoldToOnly';
    const CreditHold = 'CreditHold';
    const CreditWarning = 'CreditWarning';
}

final class Industry
{
    const NA = 'NA';
    const AgencySalesHouse = 'AgencySalesHouse';
    const Automotive = 'Automotive';
    const ConsumerPackagedGoods = 'ConsumerPackagedGoods';
    const Education = 'Education';
    const Entertainment = 'Entertainment';
    const FinancialServices = 'FinancialServices';
    const FoodServices = 'FoodServices';
    const Gaming = 'Gaming';
    const GovernmentNonprofitPolitical = 'GovernmentNonprofitPolitical';
    const Healthcare = 'Healthcare';
    const Internal = 'Internal';
    const PublishingAndWebMedia = 'PublishingAndWebMedia';
    const RealEstate = 'RealEstate';
    const Retail = 'Retail';
    const Services = 'Services';
    const Technology = 'Technology';
    const Telecommunications = 'Telecommunications';
    const TravelHospitality = 'TravelHospitality';
    const Other = 'Other';
    const Pharmaceuticals = 'Pharmaceuticals';
}

final class ServiceLevel
{
    const SelfServe = 'SelfServe';
    const SelfServeTrusted = 'SelfServeTrusted';
    const Premium = 'Premium';
    const Internal = 'Internal';
    const Select = 'Select';
}

final class CustomerLifeCycleStatus
{
    const Active = 'Active';
    const Inactive = 'Inactive';
}

final class EmailFormat
{
    const Html = 'Html';
    const Text = 'Text';
}

final class LCID
{
    const ArabicSaudiArabia = 'ArabicSaudiArabia';
    const ChineseTaiwan = 'ChineseTaiwan';
    const DanishDenmark = 'DanishDenmark';
    const GermanGermany = 'GermanGermany';
    const EnglishUS = 'EnglishUS';
    const SpanishSpain = 'SpanishSpain';
    const FinnishFinland = 'FinnishFinland';
    const FrenchFrance = 'FrenchFrance';
    const HebrewIsrael = 'HebrewIsrael';
    const ItalianItaly = 'ItalianItaly';
    const KoreanKorea = 'KoreanKorea';
    const DutchNetherlands = 'DutchNetherlands';
    const NorwegianNorway = 'NorwegianNorway';
    const PortuguesePortugal = 'PortuguesePortugal';
    const RussianRussia = 'RussianRussia';
    const SwedishSweden = 'SwedishSweden';
    const EnglishThailand = 'EnglishThailand';
    const EnglishIndonesia = 'EnglishIndonesia';
    const EnglishVietnam = 'EnglishVietnam';
    const GermanSwitzerland = 'GermanSwitzerland';
    const EnglishUK = 'EnglishUK';
    const SpanishMexico = 'SpanishMexico';
    const ChineseHongKong = 'ChineseHongKong';
    const GermanAustria = 'GermanAustria';
    const EnglishAustralia = 'EnglishAustralia';
    const FrenchCanada = 'FrenchCanada';
    const EnglishCanada = 'EnglishCanada';
    const EnglishNewZeeland = 'EnglishNewZeeland';
    const EnglishIreland = 'EnglishIreland';
    const SpanishVenezuela = 'SpanishVenezuela';
    const SpanishColombia = 'SpanishColombia';
    const SpanishPeru = 'SpanishPeru';
    const SpanishArgentina = 'SpanishArgentina';
    const EnglishPhilippines = 'EnglishPhilippines';
    const SpanishChile = 'SpanishChile';
    const EnglishIndia = 'EnglishIndia';
    const EnglishMalaysia = 'EnglishMalaysia';
    const EnglishSingapore = 'EnglishSingapore';
}

final class SecretQuestion
{
    const None = 'None';
    const FavoritePetsName = 'FavoritePetsName';
    const FavoriteMovie = 'FavoriteMovie';
    const Anniversary = 'Anniversary';
    const FatherMiddleName = 'FatherMiddleName';
    const SpouseMiddleName = 'SpouseMiddleName';
    const FirstChildMiddleName = 'FirstChildMiddleName';
    const HighSchoolName = 'HighSchoolName';
    const FavoriteTeacherName = 'FavoriteTeacherName';
    const FavoriteSportsTeam = 'FavoriteSportsTeam';
}

final class UserLifeCycleStatus
{
    //const New = 'New'; Hey Bill, ESTO ES BASURA !!!!
    const Active = 'Active';
    const Inactive = 'Inactive';
    const Deleted = 'Deleted';
}

final class UserRole
{
    const AdvertiserCampaignManager = 'AdvertiserCampaignManager';
    const SuperAdmin = 'SuperAdmin';
    const ClientViewer = 'ClientViewer';
    const ClientManager = 'ClientManager';
    const PublisherAdmin = 'PublisherAdmin';
    const PublisherAccountManager = 'PublisherAccountManager';
    const PublisherReportUser = 'PublisherReportUser';
    const PublisherListManager = 'PublisherListManager';
    const PublisherAdViewer = 'PublisherAdViewer';
    const ClientAdmin = 'ClientAdmin';
}

final class ManageAccountsRequestStatus
{
    const Accepted = 'Accepted';
    const Cancelled = 'Cancelled';
    const Declined = 'Declined';
    const Failed = 'Failed';
    const Inactive = 'Inactive';
    const InProgress = 'InProgress';
    const Pending = 'Pending';
    const Succeeded = 'Succeeded';
}

final class ManageAccountsRequestType
{
    const EndedByAdvertiser = 'EndedByAdvertiser';
    const EndedByAgency = 'EndedByAgency';
    const RequestedByAdvertiser = 'RequestedByAdvertiser';
    const RequestedByAgency = 'RequestedByAgency';
}

final class AccountInfo
{
    public $Id;
    public $Name;
    public $Number;
    public $AccountLifeCycleStatus;
    public $PauseReason;
}

final class OperationError
{
    public $Code;
    public $Details;
    public $Message;
}

final class ApiFault extends ApplicationFault
{
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

class Account
{
    public $AccountType;
    public $BillToCustomerId;
    public $CountryCode;
    public $CurrencyType;
    public $AccountFinancialStatus;
    public $Id;
    public $Language;
    public $LastModifiedByUserId;
    public $LastModifiedTime;
    public $Name;
    public $Number;
    public $ParentCustomerId;
    public $PaymentMethodId;
    public $PaymentMethodType;
    public $PrimaryUserId;
    public $AccountLifeCycleStatus;
    public $TimeStamp;
    public $TimeZone;
    public $PauseReason;
}

final class Address
{
    public $City;
    public $CountryCode;
    public $Id;
    public $Line1;
    public $Line2;
    public $Line3;
    public $Line4;
    public $PostalCode;
    public $StateOrProvince;
    public $TimeStamp;
}

final class Customer
{
    public $CustomerAddress;
    public $CustomerFinancialStatus;
    public $Id;
    public $Industry;
    public $LastModifiedByUserId;
    public $LastModifiedTime;
    public $MarketCountry;
    public $MarketLanguage;
    public $Name;
    public $ServiceLevel;
    public $CustomerLifeCycleStatus;
    public $TimeStamp;
    public $Number;
}

final class ContactInfo
{
    public $Address;
    public $ContactByPhone;
    public $ContactByPostalMail;
    public $Email;
    public $EmailFormat;
    public $Fax;
    public $HomePhone;
    public $Id;
    public $Mobile;
    public $Phone1;
    public $Phone2;
}

final class PersonName
{
    public $FirstName;
    public $LastName;
    public $MiddleInitial;
}

final class User
{
    public $ContactInfo;
    public $CustomerAppScope;
    public $CustomerId;
    public $Id;
    public $JobTitle;
    public $LastModifiedByUserId;
    public $LastModifiedTime;
    public $Lcid;
    public $Name;
    public $Password;
    public $SecretAnswer;
    public $SecretQuestion;
    public $UserLifeCycleStatus;
    public $TimeStamp;
    public $UserName;
}

final class CustomerInfo
{
    public $Id;
    public $Name;
}

final class UserInfo
{
    public $Id;
    public $UserName;
}

final class PilotFeature
{
    public $Id;
    public $Countries;
}

final class AccountInfoWithCustomerData
{
    public $CustomerId;
    public $CustomerName;
    public $AccountId;
    public $AccountName;
    public $AccountNumber;
    public $AccountLifeCycleStatus;
    public $PauseReason;
}

final class Date
{
    public $Day;
    public $Month;
    public $Year;
}

final class ManageAccountsRequest
{
    public $AdvertiserAccountNumbers;
    public $AgencyCustomerNumber;
    public $EffectiveDate;
    public $Id;
    public $LastModifiedByUserId;
    public $LastModifiedDateTime;
    public $Notes;
    public $PaymentMethodId;
    public $RequestDate;
    public $RequesterContactEmail;
    public $RequesterContactName;
    public $RequesterContactPhoneNumber;
    public $RequesterCustomerNumber;
    public $RequestStatus;
    public $RequestStatusDetails;
    public $RequestType;
    public $TimeStamp;
}

final class ManageAccountsRequestInfo
{
    public $AdvertiserAccountNumbers;
    public $AgencyCustomerNumber;
    public $RequestDate;
    public $EffectiveDate;
    public $Id;
    public $Status;
}

final class PublisherAccount extends Account
{
}

final class AdvertiserAccount extends Account
{
    public $AgencyContactName;
    public $AgencyCustomerId;
    public $SalesHouseCustomerId;
}

class ApplicationFault
{
    public $TrackingId;
}

final class GetAccountsInfoRequest
{
    public $CustomerId;
    public $OnlyParentAccounts;
}

final class GetAccountsInfoResponse
{
    public $AccountsInfo;
}

final class FindAccountsRequest
{
    public $CustomerId;
    public $AccountFilter;
    public $TopN;
    public $ApplicationScope;
}

final class FindAccountsResponse
{
    public $AccountsInfo;
}

final class AddAccountRequest
{
    public $Account;
}

final class AddAccountResponse
{
    public $AccountId;
    public $AccountNumber;
    public $CreateTime;
}

final class UpdateAccountRequest
{
    public $Account;
}

final class UpdateAccountResponse
{
    public $LastModifiedTime;
}

final class GetCustomerRequest
{
    public $CustomerId;
}

final class GetCustomerResponse
{
    public $Customer;
}

final class UpdateCustomerRequest
{
    public $Customer;
}

final class UpdateCustomerResponse
{
    public $LastModifiedTime;
}

final class SignupCustomerRequest
{
    public $Customer;
    public $User;
    public $Account;
    public $ParentCustomerId;
    public $ApplicationScope;
}

final class SignupCustomerResponse
{
    public $CustomerId;
    public $CustomerNumber;
    public $UserId;
    public $AccountId;
    public $AccountNumber;
    public $CreateTime;
}

final class GetAccountRequest
{
    public $AccountId;
}

final class GetAccountResponse
{
    public $Account;
}

final class GetCustomersInfoRequest
{
    public $CustomerNameFilter;
    public $TopN;
    public $ApplicationScope;
}

final class GetCustomersInfoResponse
{
    public $CustomersInfo;
}

final class AddUserRequest
{
    public $User;
    public $Role;
    public $AccountIds;
}

final class AddUserResponse
{
    public $Id;
    public $CreateTime;
}

final class DeleteAccountRequest
{
    public $AccountId;
    public $TimeStamp;
}

final class DeleteAccountResponse
{
}

final class DeleteCustomerRequest
{
    public $CustomerId;
    public $TimeStamp;
}

final class DeleteCustomerResponse
{
}

final class UpdateUserRequest
{
    public $User;
}

final class UpdateUserResponse
{
    public $LastModifiedTime;
}

final class UpdateUserRolesRequest
{
    public $CustomerId;
    public $UserId;
    public $NewRoleId;
    public $NewAccountIds;
    public $NewCustomerIds;
    public $DeleteRoleId;
    public $DeleteAccountIds;
    public $DeleteCustomerIds;
}

final class UpdateUserRolesResponse
{
    public $LastModifiedTime;
}

final class GetUserRequest
{
    public $UserId;
}

final class GetUserResponse
{
    public $User;
    public $Roles;
    public $Accounts;
    public $Customers;
}

final class GetCurrentUserRequest
{
}

final class GetCurrentUserResponse
{
    public $User;
}

final class DeleteUserRequest
{
    public $UserId;
    public $TimeStamp;
}

final class DeleteUserResponse
{
}

final class GetUsersInfoRequest
{
    public $CustomerId;
    public $StatusFilter;
}

final class GetUsersInfoResponse
{
    public $UsersInfo;
}

final class GetCustomerPilotFeatureRequest
{
    public $CustomerId;
}

final class GetCustomerPilotFeatureResponse
{
    public $FeaturePilotFlags;
}

final class GetPilotFeaturesCountriesRequest
{
}

final class GetPilotFeaturesCountriesResponse
{
    public $PilotFeatures;
}

final class GetAccessibleCustomerRequest
{
    public $CustomerId;
}

final class GetAccessibleCustomerResponse
{
    public $AccessibleCustomer;
    public $ValidFields;
}

final class FindAccountsOrCustomersInfoRequest
{
    public $Filter;
    public $TopN;
    public $ApplicationScope;
}

final class FindAccountsOrCustomersInfoResponse
{
    public $AccountInfoWithCustomerData;
}

final class UpgradeCustomerToAgencyRequest
{
    public $CustomerId;
}

final class UpgradeCustomerToAgencyResponse
{
}

final class SendRequestToManageAccountsRequest
{
    public $ManageAccountsRequest;
}

final class SendRequestToManageAccountsResponse
{
    public $RequestId;
}

final class AcceptRequestToManageAccountsRequest
{
    public $ManageAccountsRequestId;
    public $PaymentMethodId;
}

final class AcceptRequestToManageAccountsResponse
{
}

final class CancelRequestToManageAccountsRequest
{
    public $ManageAccountsRequestId;
}

final class CancelRequestToManageAccountsResponse
{
}

final class SendRequestToStopManagingAccountsRequest
{
    public $ManageAccountsRequest;
}

final class SendRequestToStopManagingAccountsResponse
{
    public $RequestId;
}

final class GetRequestToManageAccountsRequest
{
    public $ManageAccountsRequestId;
}

final class GetRequestToManageAccountsResponse
{
    public $ManageAccountsRequest;
}

final class GetRequestToManageAccountsInfosRequest
{
    public $AccountNumber;
    public $CustomerNumber;
    public $RequestsSentAfter;
    public $RequestsSentBefore;
    public $RequestStatusFilter;
    public $RequestTypeFilter;
}

final class GetRequestToManageAccountsInfosResponse
{
    public $ManageAccountsRequestInfos;
}

final class DeclineRequestToManageAccountsRequest
{
    public $ManageAccountsRequestId;
}

final class DeclineRequestToManageAccountsResponse
{
}

final class AddPrepayAccountRequest
{
    public $Account;
}

final class AddPrepayAccountResponse
{
    public $AccountId;
    public $AccountNumber;
    public $CreateTime;
}

final class MapCustomerIdToExternalCustomerIdRequest
{
    public $CustomerId;
    public $ExternalCustomerId;
}

final class MapCustomerIdToExternalCustomerIdResponse
{
}

final class MapAccountIdToExternalAccountIdsRequest
{
    public $AccountId;
    public $ExternalAccountIds;
}

final class MapAccountIdToExternalAccountIdsResponse
{
}


