# MP Doorway

## Items to Cover
* Lease Expiry - Setup notifications for tenant renewals
* Rents Received - Can be exported for a verification of rent 
* Grace Period - When should rent be received? When should late notice by provided?
* Tenant - Repair Requests
* Payment Portal?
* Foreclosure Scraper?

## Database Structure

### Tables

  * Users (1-20 records)
    * Name
    * Username
    * Password
    * Title - Manager / Tenant / Handyman(Contractor)

  * Properties (10-100 records)
    * Property ID
    * Name
    * Address
    * Address 2 (Second line for suite, etc.)
    * City
    * State
    * Zip
    * Property (Complex) Name
    * Lease Date
    * Rent
    * Renter (Boolean)
    * Grace Period

  * Repairs
    * Description

  * History

## Technologies
* MySQL - https://www.mysql.com/
* PHP
* Laravel
* MaterializeCSS - http://materializecss.com/

## Pages

* Users (CRUD)
* Properties (CRUD)
* Repairs (CRUD)
* Forms
* Rental History

<!-- ## APIs
Google Maps API -->

![MP Doorway](/mpdoorway.gif)

## Author
Mark Powalisz