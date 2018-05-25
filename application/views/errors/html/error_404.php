<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Affiliate CMS - Page Not Found</title>

    <style media="screen" type="text/css">
      body { background: #f5f5f5; color: rgba(0,0,0,0.87); font-family: 'Ubuntu', sans-serif; margin: 0; padding: 0; }
      #message { border-top: 16px solid #ffa100; border-bottom: 16px solid #ffa100; background: white; max-width: 360px; margin: 50px auto 16px; padding: 32px 24px 16px; border-radius: 3px; }
      #message h3 { color: #888; font-weight: normal; font-size: 16px; margin: 16px 0 12px; }
      #message h2 { color: #ffa100; font-weight: bold; font-size: 30px; margin: 0 0 8px; align-content: center;}
      #message h1 { font-size: 36px; font-weight: 300; color: rgba(0,0,0,0.6); margin: 0 0 16px;}
      #message p { line-height: 140%; margin: 18px 0 24px; font-size: 17px; }
      #message a { display: block; text-align: center; background: #039be5; text-transform: uppercase; text-decoration: none; color: white; padding: 16px; border-radius: 4px; }
      #message, #message a { box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24); }
      #load { color: rgba(0,0,0,0.4); text-align: center; font-size: 13px; }
      @media (max-width: 600px) {
        body, #message { margin-top: 0; background: white; box-shadow: none; }
        body { border-top: 16px solid #ffa100; }
      }
      img{
        position: relative;
      }
      .sr-button{
        background: #4CAF50;
        color: white;
      }
    </style>
  </head>
  <body>
    <div id="message">
      <h2>404</h2>
      <h1>Page Not Found</h1>
      <center><img style="margin-left: auto; margin-right: auto;" src="<?php echo config_item('base_url');?>/assets/images/affiliate.png" width="200" height="200" align="center"/> </center>
      <h2>Affiliate Marketing CMS</h2>
      <p>The specified file was not found on this website. Please check the URL for mistakes and try again.</p>
      <a href="<?php echo config_item('base_url'); ?>" class="sr-button">Back to Home</a>
    </div>
  </body>
</html>