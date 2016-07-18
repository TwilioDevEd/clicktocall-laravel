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

1. Check it out at [http://localhost:8000](http://localhost:8000).

### Expose the Application to the Wider Internet

#### Using Ngrok

1. Expose your application to the wider internet using [ngrok](http://ngrok.com).
   You can click[here](#expose-the-application-to-the-wider-internet) 
   for more details. This step is important because the application won't
   work as expected if you run it through localhost.

  ```bash
   $ ngrok http 8000
  ```

  Once ngrok is running, open up your browser and go to your ngrok URL. 
  It will look something like this: `http://<sub-domain>.ngrok.io`

#### Using Heroku

1. Navigate to your project folder and create new Heroku Cedar app
    
    ```bash
     $ heroku create
    ```

1. Deploy to Heroku

    ```bash
     $ git push heroku master
    ```

1. Scale your dynos

    ```bash
     $ heroku scale web=1
    ```

1. Visit the home page of your new Heroku app to see your newly 
   configured app!

    ```bash
     $ heroku open
    ```

### Configure Twilio to call your webhooks.

  You will also need to configure Twilio to call your application when 
  calls are received on your _Twilio Number_. The **Voice Request URL** 
  should look something like this:

  ```
  http://<internet-public-url>/call
  ```

  ![Configure SMS](http://howtodocs.s3.amazonaws.com/twilio-number-config-all-med.gif)

## Meta

 * No warranty expressed or implied. Software is as is. Diggity.
 * [MIT License](http://www.opensource.org/licenses/mit-license.html)
 * Lovingly crafted by Twilio Developer Education.
