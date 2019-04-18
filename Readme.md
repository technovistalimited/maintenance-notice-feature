# Maintenance Notice Feature (PHP)

When the maintenance happen to a application/website, mass user get affected. In most of the case the application/website made completely readonly. In that case the users face _huge_ shock.

That's why it would be best to inform them beforehand.

This feature will enable you display a notice beforehand announcing your plan of maintenance.

> **NOTE**<br>
> This is _not_ a 'maintenance mode' feature, it's _just_ a feature to display a pre-notification

## Requirements

* PHP (because the conditions are done in PHP, but you can easily copy the logic in your language)
* JavaScripts
* Browser cookies

## Features

* Displays a notice within the mentioned time
* Dismiss the notice only on user acknowledgment
* Doesn't display the notice again within the same day

## Installation
The package includes four (4) files:

1. `config.php` - _contains the configurations_
2. `maintenance.php` - _contains the notice texts and logics_
3. `maintenance.css` - _contains the styles_
4. `maintenance.js` - _contains the necessary javascripts_

### Step 0: Include the Configurations
Include the `config.php` in your project:
```php
require_once 'config.php';
```
Change the Timezone accordingly. Default: `Asia/Dhaka`.

### Step 1: Include the Maintenance notice
Include the `maintenance.php` in your project header:
```php
require_once 'maintenance.php';
```

### Step 2: Include the JavaScripts
Add the `maintenance.js` in your project footer:
```html
<script src="assets/js/maintenance.js"></script>
```

### Step 3: Include the Styling
Include the `maintenance.css` in your project header:
```html
<link rel="stylesheet" href="assets/css/maintenance.css" media="screen">
```

For Step#2 and #3 you can copy-paste content your script and style files instead of loading them separately.

## How to Use
When your maintenance schedule is ready, open the `config.php` and change the schedule date and time, and don't forget to set `IS_MAINTENANCE` value to `true` when you are ready to display the notice.

## License
The code is licensed in [GPL3](https://opensource.org/licenses/GPL-3.0).

----
<sup>[TechnoVista Limited](https://technovista.com.bd/)</sup>
