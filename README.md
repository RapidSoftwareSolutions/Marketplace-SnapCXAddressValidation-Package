[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/SnapCXAddressValidation/functions?utm_source=RapidAPIGitHub_SnapCXAddressValidationFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# SnapCXAddressValidation Package
Verify shipping addresses in real-time around the world.
* Domain: snapcx.io
* Credentials: apiKey

## How to get credentials: 
0. Go to [SnapCX website](https://snapcx.io/) 
1. Log in or create a new account
2. Go to [Dashboard page](https://developer.snapcx.io/admin/applications) to get your API key

## SnapCXAddressValidation.validateUSAddress
This API end point is for validating US addresses only.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Api key obtained from SnapCX
| requestId      | String     | Mandatory Client provided unique request id. Same request_id is returned as part of response header.
| street         | String     | Mandatory Address line 1. It’s needed for any address validation
| secondaryStreet| String     | Optional Address line2, if it’s there. Examples are apt# or suite# etc.
| city           | String     | Optional City & State OR zipcode should be present at least. If city & state are present then zipcode is ignored.
| state          | String     | Optional 2 char valid USA state code. Example: NY / NJ / CA etc.
| zipcode        | String     | Optional 5 digit US zipcode

## SnapCXAddressValidation.validateGlobalAddress
This API end point is for validating global addresses.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Api key obtained from SnapCX
| requestId      | String     | Mandatory Client provided unique request id. Same request_id is returned as part of response header.
| street         | String     | Mandatory Address line 1. It’s needed for any address validation
| country        | String     | Country name or ISO 3-char or ISO 2-char country code. Examples USA, CAN, AU etc.
| secondaryStreet| String     | Optional Address line2, if it’s there. Examples are apt# or suite# etc.
| city           | String     | Optional City & State OR zipcode should be present at least. If city & state are present then zipcode is ignored.
| state          | String     | Dependending upon country.
| zipcode        | String     | Optional 5 digit US zipcode

