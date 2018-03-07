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
    * ID
    * Name
    * Username
    * Password
    * Title - Manager / Tenant / Handyman(Contractor)
    * Property_ID
    * Timestamps

  * Properties (10-100 records)
    * Property_ID
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
    * Timestamps

  * Repairs
    * Property_ID
    * Description
    * Completed
    * Completed_At
    * Contractor
    * Timestamps

  * Histories
    * Description
    * Rent
    * Date Received
    * User_ID
    * Property_ID
    * Timestamps

## Technologies
* MySQL - https://www.mysql.com/
* PHP - http://www.php.net/
* Laravel - https://laravel.com/
* MaterializeCSS - https://www.materializecss.com/
* Heroku - https://www.heroku.com/
* ClearDB - https://www.cleardb.com/

## Pages

* Users (CRUD)
* Properties (CRUD)
* Repairs (CRUD)
* Forms
* Rental History

<!-- ## APIs
Google Maps API -->

![MP Doorway](mpdoorway.gif)

## Author
Mark Powalisz