<?php
final class NotificationType
{
    const CreditCardPendingExpiration = 'CreditCardPendingExpiration';
    const DepletedBudget = 'DepletedBudget';
    const EditorialRejection = 'EditorialRejection';
    const ExpiredCreditCard = 'ExpiredCreditCard';
    const ExpiredInsertionOrder = 'ExpiredInsertionOrder';
    const LowBudgetBalance = 'LowBudgetBalance';
}

class Notification
{
    public $NotificationId;
    public $NotificationDate;
    public $NotificationType;
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

final class CreditCardPendingExpirationNotification extends AccountNotification
{
    public $CardType;
    public $LastFourDigits;
    public $AccountName;
}

final class AccountNotification extends Notification
{
    public $AccountId;
    public $AccountNumber;
}

final class ExpiredCreditCardNotification extends AccountNotification
{
    public $CardType;
    public $LastFourDigits;
    public $AccountName;
}

final class ExpiredInsertionOrderNotification extends AccountNotification
{
    public $BillToCustomerName;
}

final class BudgetDepletedCampaignInfo extends CampaignInfo
{
    public $CurrencyCode;
    public $BudgetDepletedDate;
}

final class BudgetDepletedNotification extends AccountNotification
{
    public $AffectedCampaigns;
    public $AccountName;
}

class CampaignInfo
{
    public $CampaignId;
    public $CampaignName;
    public $BudgetAmount;
}

final class EditorialRejectionNotification extends AccountNotification
{
}

final class LowBudgetBalanceCampaignInfo extends CampaignInfo
{
    public $EstimatedBudgetBalance;
    public $EstimatedImpressions;
}

final class LowBudgetBalanceNotification extends AccountNotification
{
    public $CustomerId;
    public $AffectedCampaigns;
    public $AccountName;
}

class ApplicationFault
{
    public $TrackingId;
}

final class GetNotificationsRequest
{
    public $NotificationTypes;
    public $TopN;
}

final class GetNotificationsResponse
{
    public $Notifications;
}

final class GetArchivedNotificationsRequest
{
    public $NotificationTypes;
    public $TopN;
    public $StartDate;
    public $EndDate;
}

final class GetArchivedNotificationsResponse
{
    public $Notifications;
}


