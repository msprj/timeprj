package's home : msprj/timeprj

This package show Time & Date from diffrent Timezones

Installation:

Run below statements on your terminal :

STEP 1 :

composer require msprj/timeprj

STEP 2 : Add provider in config/app.php

'providers' => [
  ...
  \msprj\timeprj\TimeServiceProvider::class, // <-- add this line at the end of provider array
],

Step 3:

php artisan vendor:publish

url pages:
.../time
.../date

Configuration file is placed in config/MyConfig.php , open it and enter your Timezone
