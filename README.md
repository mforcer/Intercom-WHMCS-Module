
# WHMCS Intercom Integration (Addon Module for WHMCS)

No longer being actively developed.

We have been busy launching a new project and after trying out several live chat / lead gen solutions we have decided to move away from Intercom and focus our efforts elsewhere. 

This repo will remain active for anyone who would still like to use it or develop it further - We would love to hear from any individuals looking to continue development.

Looking for another solution, try: [CMS Based](https://cmsbased.net/whmcs-addons/intercom/)

We may look at it again in the future.

### About

Intercom Addon Module integrates Intercom.io customer platform into WHMCS without altering any WHMCS core code.

This module will automatically feed the following fields into the Intercom system:

- Forename and Surname
- Registration Date
- Company Name
- Email Optin Status
- Account Status (Active, Closed, etc...)
- More coming soon..


### Installation
1. Download [master](https://github.com/goodbytes-gb/Intercom-WHMCS-Module/archive/master.zip) branch (or clone).
2. Extract files from zip
3. Upload 'intercom' folder to your _**public/whmcs/modules/addons**_ folder (replacing public with your web root, and whmcs with your WHMCS folder name).
4. Go to _**Setup** -> **Addon Modules** -> **Intercom**_ and click `Activate`
5. To configure, go to _**Setup** -> **Addon Modules** -> **Intercom** -> **Configure**_
6. Enter your App ID, which can be found under _**App Settings** -> **Secure Mode**_ (and various other locations such as your app path inside Intercom and existing javascript implementations)
7. Click `Save Changes` and you're done!

### Roadmap

1. Allow settings user data collection fields from WHMCS.
2. Complex data collection such as abandoned basket, product targeting.
3. ...?

### Help

1. Open an issue
2. enquiries@goodbytes.co.uk
