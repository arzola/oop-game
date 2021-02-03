# Pressbooks live coding exercise

Please complete the source code to make all the tests pass ✅. To succeed in this exercise you'll need a working understanding of OOP, dependency injection, polymorphism, access modifiers, callbacks, and late static binding.

## Test context

Inside the src folder, you will find some incomplete classes or functions that need to be completed before the phpunit test suite will pass. **Important note:** You are not allowed to modify the tests 😔

All the objects inside the src folders are pieces of a custom PHP ecommerce application that uses database access, notifications, product hierarchy, invoicing, external data fetching, users, and some utility helper functions.

## Getting Started
`git clone git@github.com:pressbooks/oop-game.git`

Switch to the repo's directory and run `composer install`

### Run the tests

Remember you should complete the group 1 tests first
`vendor/bin/phpunit tests --colors=auto --group 1`

If you have some extra time you can try to solve group 2 for extra points
`vendor/bin/phpunit tests --colors=auto --group 2`

Run the test suite: `vendor/bin/phpunit tests --colors=auto`

Fix the code so that all tests pass. Do not change any of the tests. Additional details about the exercise below.

### Objects

**For Database access**

The objects in this exercise don't need to "connect" to a real database. To make `ConnectionTest` pass, you only need to complete the missing code (attributes, interface implementations, hierarchy) in the following objects: 

* Database\Connection
* Database\PersistentConnection
* Database\Drivers\DatabaseDriver
* Database\Drivers\MySql
* Database\Drivers\Oracle

**For Product hierarchy**

The objects defined in the `LateStatic` namespace are examples of products in an ecommerce application.

* LateStatic\Computer (parent)
* LateStatic\Mac (child)

**For User management**

You'll find a User Object that is used for notifications and is the main entity to interact with the app.

* \User

**For Notifications**

There are two types of system notifications handled by the system. These objects should follow a contract to be unified:

* Notificators\EmailNotification
* Notificators\WhatsAppNotification

**For invoicing**

Inside the `Properties` namespace, you'll find some invoice objects. You don't need to apply any business rules to pass the tests for these objects, you simply need to apply your OOP access modifiers knowledge to ensure that what is returned follows the hierarchy expected by the test suite (Remember you are not allowed to modify the tests).

**For external data handling using callbacks and OOP patterns**

There are two incomplete files:

* \Ajax.php
* ajax defined in `helpers.php`

As you can see we are fetching data using only `file_get_contents`. Don't worry about actually fetching data; all that's needed here is to make the code changes needed so that the functions return the values needed to make the tests pass.

**TIPS**
> file_get_contents is used to fetch internet data if needed, (no http client required)

> If you need to modify the composer.json you can do a `composer dumpautoload` to refresh the autoloader to load new files or classes. `require` or `include` directives are not allowed

Have fun 🤓
