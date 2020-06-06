# Sintex Account Management Synchronization 
Laravel Sintex Datasource Helper


## Installation
```
composer require "sintexph/acms-lib @dev"
```

## Usage

Use it in LoginController.php

```
use AuthenticatesUsers,ACMSLoginTrait {
    ACMSLoginTrait::attemptLogin insteadof AuthenticatesUsers;
    AuthenticatesUsers::attemptLogin as excludeAttemptLogin;
}