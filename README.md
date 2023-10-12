# Adyen Payment plugin for Shopware 6
Use Adyen's plugin for Shopware 6 to offer frictionless payments online, in-app, and in-store.

## Contributing
We strongly encourage you to join us in contributing to this repository so everyone can benefit from:
* New features and functionality
* Resolved bug fixes and issues
* Any general improvements

Read our [**contribution guidelines**](https://github.com/Adyen/.github/blob/main/CONTRIBUTING.md) to find out how.

## Requirements
This plugin supports Shopware >= 6.3.1.1

Please note that versions >= 3.0.0 of this plugin only support Shopware versions >= 6.4. If you are on a lower Shopware version please use version 2.

For Shopware 5 support please see our Shopware 5 repository.

## Releases

1. **Major** releases are done ONLY when absolutely required. We try to not to introduce breaking changes and do major releases as rare as possible. Current average is **yearly**.
2. A minor or a patch release is scheduled but not limited to **once every 2 weeks.**

**Note: This can be subject to change based on the load and dependancies of the Ecommerce plugins team.**

## Support & Maintenance

We provide three levels of support:
1. **Level 1 (12 months)**: full support (including new features) *Keep in mind that some new features are not possible on older versions, therefore this is not inclusive of ALL new features that are built.* 
2. **Level 2 (12 months - 18 months)**: high priority bugs / security only.
3. **Level 3 (18 months - 24 months)**: security updates only (no support from support team).

> After Level 3 there is no support or maintenance from Adyen and it should be treated as a native integration of the merchant.

The schedule for the current maintained branches is:

|  Plugin Major Version   |  Release Date  |  Level 1 Support ends   |  Level 2 Support ends   |  Level 3 Support ends  |
|  :-----          |  :-----          |  :-----          |  :-----          |  :-----          |
|  Version 2 |  March 2021 |  March 2022 |  October  2022 |  March 2023 |
|  Version 3 |  June 2021 |  Not planned |  Not planned | Not planned |
|  Version 4 |  - |  12 months after release |  18 months after release |  24 months after release |


## Documentation
Please find the relevant documentation for
 - [How to start with Adyen](https://www.adyen.com/get-started)
 - [Adyen Plugin for Shopware 6](https://docs.adyen.com/plugins/shopware-6)
 - [Adyen PHP API Library](https://docs.adyen.com/development-resources/libraries#php)

## Support
If you have a feature request, or spotted a bug or a technical problem, create a GitHub issue. For other questions, 
contact our [support team](https://support.adyen.com/hc/en-us/requests/new?ticket_form_id=360000705420).

# For developers

## Integration
The plugin integrates card component (Secured Fields) using Adyen Checkout for all card payments.

### Supported payment methods
 - Credit and debit cards (non 3D secure, 3D secure 1, 3D secure 2 native)
 - Stored card payment methods (One click payment methods)
 - Affirm
 - AfterPay invoice
 - Alipay , Alipay HK
 - Amazon Pay
 - Apple Pay
 - Bancontact
 - Blik
 - Clearpay
 - Dotpay
 - Electronic Payment Service (EPS)
 - Gift cards
 - GiroPay
 - Google Pay
 - iDeal
 - Klarna Pay Later
 - Klarna Pay Now
 - Klarna Pay Over Time
 - MB Way
 - MobilePay
 - Multibanco
 - Oney (3x, 4x, 6x, 10x, 12x)
 - PayBright
 - PayPal
 - PaySafeCard
 - RatePay, RatePay Direct Debit
 - SEPA Direct Debit
 - Sofort
 - Swish
 - Trustly
 - Twint
 - Vipps
 - WeChat Pay
 - Open Banking / Pay by Bank

## API Library
This module is using the Adyen APIs Library for PHP for all (API) connections to Adyen.
<a href="https://github.com/Adyen/adyen-php-api-library" target="_blank">This library can be found here</a>

## License
MIT license. For more information, see the [LICENSE file](LICENSE).
