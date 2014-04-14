<?php
final class DataType
{
    const Xml = 'Xml';
    const Pdf = 'Pdf';
}

final class InvoiceInfo
{
    public $AccountId;
    public $AccountName;
    public $AccountNumber;
    public $Amount;
    public $CurrencyCode;
    public $InvoiceDate;
    public $InvoiceId;
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

final class BatchError
{
    public $Code;
    public $Details;
    public $Index;
    public $Message;
}

final class ApiBatchFault extends ApiFault
{
    public $BatchErrors;
}

final class Invoice
{
    public $Data;
    public $Id;
    public $Type;
}

final class InsertionOrder
{
    public $AccountId;
    public $BalanceAmount;
    public $BookingCountryCode;
    public $Comment;
    public $EndDate;
    public $InsertionOrderId;
    public $LastModifiedByUserId;
    public $LastModifiedTime;
    public $NotificationThreshold;
    public $ReferenceId;
    public $SpendCapAmount;
    public $StartDate;
}

class ApplicationFault
{
    public $TrackingId;
}

final class GetInvoicesInfoRequest
{
    public $AccountIds;
    public $StartDate;
    public $EndDate;
}

final class GetInvoicesInfoResponse
{
    public $InvoicesInfo;
}

final class GetInvoicesRequest
{
    public $InvoiceIds;
    public $Type;
}

final class GetInvoicesResponse
{
    public $Invoices;
}

final class GetDisplayInvoicesRequest
{
    public $InvoiceIds;
    public $Type;
}

final class GetDisplayInvoicesResponse
{
    public $Invoices;
}

final class AddInsertionOrderRequest
{
    public $InsertionOrder;
}

final class AddInsertionOrderResponse
{
    public $InsertionOrderId;
    public $CreateTime;
}

final class UpdateInsertionOrderRequest
{
    public $InsertionOrder;
}

final class UpdateInsertionOrderResponse
{
    public $LastModifiedTime;
}

final class GetInsertionOrdersByAccountRequest
{
    public $AccountId;
    public $InsertionOrderIds;
}

final class GetInsertionOrdersByAccountResponse
{
    public $InsertionOrders;
}

final class GetKOHIOInvoicesRequest
{
    public $InvoiceIds;
}

final class GetKOHIOInvoicesResponse
{
    public $Invoices;
}

final class GetAccountMonthlySpendRequest
{
    public $AccountId;
    public $MonthYear;
}

final class GetAccountMonthlySpendResponse
{
    public $Amount;
}


