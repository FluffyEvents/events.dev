#Laravel 4.2 Event Management Application

#SPEC
Event Planning Application

You will be making an application that manages events and where these events will be taking place. The look of the application is totally up to you. Before starting your application please use the following packages for your app.

You may work on your own or in a team of two.
You may also decide to build this application as a single page app with angular.

Packages:
- Ways Generators
- Esensi Model

Models:
- Users
    - name
    - email
    - password

- CalendarEvents
    Start date time
    End date time
    Title
    Description
    Price
    user_id
    location_id

- Locations
    Title
    Address
    City
    State
    Zip

Resource Controllers:
- CalendarEventsController
- LocationsController

Bonus
- Event image(s)
- Add Longitude/Lattitude to Location
- Show google map of event location
- Add functionality for visitors to register for an event

#TODO
1. Users can create, edit, and manage their events.
2. Event Management Dashboard: List All User Events By Auth::id() - For Each Event => Show:Invite:Edit:Delete


## Installation
1. Clone the repository.
2. CD into the repo.
3. Run composer install. This installs all of Laravel's dependencies.
4. Take a look at .env-template.php and use that format for your .env.local.php file.
5. Run php artisan key:generate. This generates a secure cipher key for encrypting your data.
6. Run php artisan serve. This serves your application to the browser. You can also use Homestead, LAMP, WAMP, etc.

## Contributing
1. Fork it!
2. Create your feature branch: `git checkout -b my-new-feature`
3. Commit your changes: `git commit -am 'Add some feature'`
4. Push to the branch: `git push origin my-new-feature`
5. Submit a pull request :D
