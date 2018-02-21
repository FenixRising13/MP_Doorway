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
    * Fname
    * Lname
    * Username
    * Password
    * Role/Type - Manager / Tenant / Handyman(Contractor)

  * Properties (10-100 records)
    * Property ID
    * T Fname
    * T Lname
    * Address
    * Address 2 (Second line for suite, etc.)
    * City
    * State
    * Zip
    * Property (Complex) Name
    * Lease Date

## Technologies
* MySQL - https://www.mysql.com/
* PHP
* Laravel
* NodeJS - https://nodejs.org/
* MaterializeCSS - http://materializecss.com/
* Express NPM - https://www.npmjs.com/package/express

## Pages

* Login
* Create Login
* Property List
* Add/Update Property

## APIs
Google Maps API

## Author
Mark Powalisz