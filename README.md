
# WHMCS Intercom Integration (Addon Module for WHMCS)

Development on this module has slowed. If you require any specific features please create a new Issue and we'll assess if it's viable.

We would love to hear from any individuals looking to continue development.

Looking for a more robust solution? try: [CMS Based](https://cmsbased.net/whmcs-addons/intercom/)

### About

Intercom Addon Module integrates Intercom.io customer platform into WHMCS without altering any WHMCS core code.

This module will automatically feed the following fields into the Intercom system:

- Forename and Surname
- Registration Date
- Company Name
- Email Optin Status
- Only processes Active clients (helps keep Intercom costs low)
- Total client income
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

1. Allow configuring which data is synced from WHMCS.
2. Complex data collection such as abandoned basket, product targeting.
3. ...?

### Help

1. Open an issue
2. enquiries@goodbytes.co.uk
