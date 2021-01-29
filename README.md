# Pressbooks live coding exercise

Please complete the source code to make all the tests pass ✅, you'll need a little knowledge of (OOP, dependency injection, polymorphism, access modifiers, callbacks, late static binding)

## Test context

You'll find inside the src folder incomplete classes or functions that needs to be completed to make the phpunit suite pass.

All the objects inside the src folders are pieces of a custom PHP ecommerce application that uses Database access, Notifications, Product hierarchy, Invoicing, External data fetching, Users and some util helper functions.

### Objects

**For Database access**

The following objects doesn't need to "connect" to a real database you should only complete the missing code (attributes, interface implementations, hierarchy) to make `ConnectionTest` pass

* Database\Connection
* Database\PersistentConnection
* Database\Drivers\DatabaseDriver
* Database\Drivers\MySql
* Database\Drivers\Oracle

**For Product hierarchy**

The objects defined on the `LateStatic` namespace is an example of a product in an ecommerce application.

* LateStatic\Computer (parent)
* LateStatic\Mac (child)

**For Users management**

You'll find a User Object that is used for notifications and is the main entity to interact with the app.

* \User

**For Notifications**

There are two types of system notifications handled by the system, these objects should follow a contract to be unified.

* Notificators\EmailNotification
* Notificators\WhatsAppNotification

**For invoicing**

You'll find inside the `Properties` namespace some invoice objects  representation, you should follow the right hierarchy according to the test suite, you don't need any business rules, only apply your OOP access modifiers knowledge to solve the tests. (Remember you are not allowed to modify the tests)

**For external data handling using callbacks and OOP patterns**

There are to incompleted files

* \Ajax.php
* ajax defined in `helpers.php`

As you can see we are fetching data using only `file_get_contents` don't worry about fetching the data, you should only complete the code to return the right thing to make the tests pass.


**TIPS**
> file_get_contents is used to fetch internet data if needed, (no http client required)

> If you need to modify the composer.json you can do a `composer dumpautoload` to refresh the autoloader to load new files or classes, `require` or `include` directives are not allowed

Have fun 🤓

`composer install`

`vendor/bin/phpunit tests --colors=auto`

Remember you can filter the tests file by file

`vendor/bin/phpunit tests --colors=auto --filter ComputerTest`

### Important note

You are not allowed to modify the tests 😔
