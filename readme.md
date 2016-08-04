<a href="https://www.twilio.com">
  <img src="https://static0.twilio.com/marketing/bundles/marketing/img/logos/wordmark-red.svg" alt="Twilio" width="250" />
</a>
# Click to Call Laravel

An application example implementing Click to Call using Twilio.

[Read the full tutorial here](https://www.twilio.com/docs/tutorials/walkthrough/click-to-call/php/laravel)!

## Installation

Step-by-step on how to deploy, configure and develop on this example app.

### Fastest Deploy

Use Heroku to deploy this app immediately:

[![Deploy](https://www.herokucdn.com/deploy/button.png)](https://heroku.com/deploy?template=https://github.com/TwilioDevEd/clicktocall-laravel)

## Local Development

1. Grab latest source

    ```bash
     $ git clone git://github.com/TwilioDevEd/clicktocall-laravel.git
    ```

1. Setup your environment variables

   Are you using a bash shell? Use echo $SHELL to find out. For a bash
   shell, edit the ~/.bashrc or ~/.bashprofile file and add:

   ```sh
    export TWILIO_ACCOUNT_SID=ACxxxxxxxxxxxxxx
    export TWILIO_AUTH_TOKEN=yyyyyyyyyyyyyyyyy
    export TWILIO_NUMBER=+15556667777
   ```

   Or just export the same variables for this session.

1. Install the dependencies with [Composer](https://getcomposer.org/).

   ```bash
   $ composer install
   ```

1. Generate an `APP_KEY`.

   ```bash
   $ php artisan key:generate
   ```

1. Start the server.

   ```bash
   $ php artisan serve
   ```   

1. [Expose the application to the wider internet](#expose-the-application-to-the-wider-internet)

1. Check out the app at `http://<sub-domain>.ngrok.io`.

### Expose the Application to the Wider Internet

1. Expose your application to the wider internet using [ngrok](http://ngrok.com).
   You can click[here](#expose-the-application-to-the-wider-internet)
   for more details. This step is important because the application won't
   work as expected if you run it through localhost.

  ```bash
   $ ngrok http 8000
  ```

  Once ngrok is running, open up your browser and go to your ngrok URL.
  It will look something like this: `http://<sub-domain>.ngrok.io`

## Meta

 * No warranty expressed or implied. Software is as is. Diggity.
 * [MIT License](http://www.opensource.org/licenses/mit-license.html)
 * Lovingly crafted by Twilio Developer Education.
