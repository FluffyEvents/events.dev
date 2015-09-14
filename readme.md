#Laravel 4.2 Event Management Application



#Basic Spec/Description
Event Planning Application : A Laravel application that manages user created events.

Spec Layout:
- The look of the application is totally up to you.

Spec Packages:
Packages:
- Ways Generators
- Esensi Model


Spec Models:
- Users
    - first_name
    - last_name
    - email
    - password

- CalendarEvents
    - starts_at
    - ends_at
    - title
    - description
    - price
    - user_id
    - location_id

- Locations
    - name
    - address
    - city
    - state
    - postal_code

Spec Resource Controllers:
- CalendarEventsController


# Over-Achiever's TODO
Bonus:
- Event image(s)
- Add Longitude/Lattitude to Location
- Show google map of event location
- Add functionality for visitors to register for an event


#Application User Profiling
Users may need to address any or all of the following tasks related to an event outside the current application scope:
- Conduct event research (Wolfram Alpha)
- Organize food, decorations and entertainment for an event
- Plan transportation to and from the event location/locations
- Send invitations to target audience/Manage event marketing campaign
- Arranging any necessary accommodations for attendees/registrants
- Coordinating the activities of event personnel
- Evaluating event statistics before, during and after an event's life cycle


## Installation
1. Clone the repository in the sites folder if you are using a codeuptrusty vagrant box.
2. CD into the newly created directory inside your vagrant box.
3. Run composer install. This installs all of Laravel's dependencies.
4. Take a look at .env-template.php and use that format for your .env.local.php file.
5. If you are using codeuptrusty and want to create the databases you listed in your new .env.local.php file please cd into the vagrant-lamp folder on your mac and run the following command: ansible-playbook ansible/create-vagrant-mysql-db.yml
6. Run php artisan key:generate. This generates a secure cipher key for encrypting your data.
7. Run php artisan serve. This serves your application to the browser. You can also use Homestead, LAMP, WAMP, etc.

## Contributing
1. Fork it!
2. Create your feature branch: `git checkout -b my-new-feature`
3. Commit your changes: `git commit -am 'Add some feature'`
4. Push to the branch: `git push origin my-new-feature`
5. Submit a pull request :D

## Official Documentation

Documentation for Laravel 4.2 can be found on the [http://laravel.com/docs/4.2](http://laravel.com/docs/4.2).

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
