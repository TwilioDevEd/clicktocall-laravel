<?php
  return array(
    'TWILIO_ACCOUNT_SID' => getenv('TWILIO_ACCOUNT_SID'),
    'TWILIO_AUTH_TOKEN' => getenv('TWILIO_AUTH_TOKEN'),
    'TWILIO_NUMBER' => getenv('TWILIO_NUMBER'),
    'URL' => getenv('URL') // set in a Heroku app - can override for localhost
  );

