# mcf-sdk

The Selling Partner API for Reports lets you retrieve and manage a variety of reports that can help selling partners manage their businesses.

For more information, please visit [https://sellercentral.amazon.com/gp/mws/contactus.html](https://sellercentral.amazon.com/gp/mws/contactus.html).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/mcf-sdk/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Ced\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$report_id = 'report_id_example'; // string | The identifier for the report. This identifier is unique only in combination with a seller ID.

try {
    $apiInstance->cancelReport($report_id);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->cancelReport: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://sellingpartnerapi-na.amazon.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ReportsApi* | [**cancelReport**](docs/Api/ReportsApi.md#cancelreport) | **DELETE** /reports/2021-06-30/reports/{reportId} | 
*ReportsApi* | [**cancelReportSchedule**](docs/Api/ReportsApi.md#cancelreportschedule) | **DELETE** /reports/2021-06-30/schedules/{reportScheduleId} | 
*ReportsApi* | [**createReport**](docs/Api/ReportsApi.md#createreport) | **POST** /reports/2021-06-30/reports | 
*ReportsApi* | [**createReportSchedule**](docs/Api/ReportsApi.md#createreportschedule) | **POST** /reports/2021-06-30/schedules | 
*ReportsApi* | [**getReport**](docs/Api/ReportsApi.md#getreport) | **GET** /reports/2021-06-30/reports/{reportId} | 
*ReportsApi* | [**getReportDocument**](docs/Api/ReportsApi.md#getreportdocument) | **GET** /reports/2021-06-30/documents/{reportDocumentId} | 
*ReportsApi* | [**getReportSchedule**](docs/Api/ReportsApi.md#getreportschedule) | **GET** /reports/2021-06-30/schedules/{reportScheduleId} | 
*ReportsApi* | [**getReportSchedules**](docs/Api/ReportsApi.md#getreportschedules) | **GET** /reports/2021-06-30/schedules | 
*ReportsApi* | [**getReports**](docs/Api/ReportsApi.md#getreports) | **GET** /reports/2021-06-30/reports | 

## Models

- [CreateReportResponse](docs/Model/CreateReportResponse.md)
- [CreateReportScheduleResponse](docs/Model/CreateReportScheduleResponse.md)
- [CreateReportScheduleSpecification](docs/Model/CreateReportScheduleSpecification.md)
- [CreateReportSpecification](docs/Model/CreateReportSpecification.md)
- [Error](docs/Model/Error.md)
- [ErrorList](docs/Model/ErrorList.md)
- [GetReportsResponse](docs/Model/GetReportsResponse.md)
- [Report](docs/Model/Report.md)
- [ReportDocument](docs/Model/ReportDocument.md)
- [ReportSchedule](docs/Model/ReportSchedule.md)
- [ReportScheduleList](docs/Model/ReportScheduleList.md)

## Authorization
All endpoints do not require authorization.
## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2021-06-30`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
