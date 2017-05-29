# Instagram plugin for CakePHP 3

[![Build Status](https://travis-ci.org/multidots/cakephp-instagram.svg?branch=master)](https://travis-ci.org/multidots/cakephp-instagram)
[![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg)](https://raw.githubusercontent.com/multidots/cakephp-rest-api/master/LICENSE)
[![Latest Stable Version](https://poser.pugx.org/multidots/cakephp-instagram/v/stable)](https://packagist.org/packages/multidots/cakephp-instagram)
[![Total Downloads](https://poser.pugx.org/multidots/cakephp-instagram/downloads)](https://packagist.org/packages/multidots/cakephp-instagram)
## Requirements

This plugin has the following requirements:

* CakePHP 3.0.0 or greater.
* PHP 5.4.16 or greater.

## Installation

You can install this plugin into your CakePHP application using [composer](http://getcomposer.org).

```
composer require multidots/cakephp-instagram
```

After installation, [Load the plugin](http://book.cakephp.org/3.0/en/plugins.html#loading-a-plugin)
```php
Plugin::load('Instagram', ['bootstrap' => true]);
```
Or, you can load the plugin using the shell command
```sh
$ bin/cake plugin load -b Instagram
```

## Usage

This plugin provides a Utility class to connect with Instagram APIs. Simply create an instance of this class and perform API calls.

Instagram API uses the OAuth 2.0 protocol and requires `access_token` for all authenticated requests.

### Basic setup
Before making any API call, you need to create a new instance of InstagramClient class in your application and pass your client id and client secret.

First of all, write a configuration variable with client id, secret and redirect url like,

```php
$instaConfig = [
	'clientId' => 'your-client-id',
	'clientSecret' => 'your-client-secret',
	'redirectUri' => 'your-redirect-url'
];

Configure::write('Instagram.config', $instaConfig);
```

After this, create an instance and pass the configuration values like,

```php
$instagramClient = new InstagramClient(Configure::read('Instagram.config'));
```

### Authenticate User

To make an authenticated call, Instagram API requires access_token in request. To get an access token, you need to redirect user to Instagram authentication URL.
This plugin provides a Helper to generate authentication URL for your user. Load the Instagram helper in your application and use it's `getAuthUrl()` method to generate URL.

In your AppView,
```php
$this->loadHelper('Instagram.Instagram');
```

In your template,
```php
<a href="<?= $this->Instagram->getAuthUrl(); ?>">Authorize with Instagram</a>
```

#### Handle access token from response
After successful authentication by user, Instagram will redirect to your specified redirect uri with `code`.
In your action, make an API call to get an `access_token` from the code like,

```php
$response = $instagramClient->getAccessToken($this->request->query('code'));
$accessToken = $response->access_token; // You may want to store it into database for future use
```

#### Set access token
Once you have the `access_token` from Instagram, set it via `accessToken()` method.
```php
$instagramClient = new InstagramClient(Configure::read('Instagram.config'));
$instagramClient->accessToken('your-access-token');
```
Now it is ready to make authenticated API calls.

### API Methods

As of now, this plugin provides following API methods.

#### Users
##### Profile
Get profile information about the self/specific user. It supports following parameters:

* user_id: User id (self will be used if not set)

```php
$instagramClient = new InstagramClient($options);
$instagramClient->accessToken($accessToken);
// own profile
$response = $instagramClient->getProfile();
// specific user profile
$params = ['user_id' => 1];
$response = $instagramClient->getProfile($params);
```
##### Recent Media
Get the most recent media published by a user. It supports following parameters:

* user_id: User id (self will be used if not set)
* url: API url (mostly used in pagination (next_url), if set other
* options will be ignored)
* count: Count of media to return
* min_id: Return media later than this min_id
* max_id: Return media earlier than this max_ids

```php
$instagramClient = new InstagramClient($options);
$instagramClient->accessToken($accessToken);
$params = ['count' => 20];
$response = $instagramClient->getMedia($params);
```
