#Laravel 4.2 Event Management Application



#Basic Spec/Description
Event Planning Application : A Laravel application that manages user created events.

Spec Layout:
- The look of the application is totally up to you.

Spec Packages:
Packages:
- Ways Generators
- ~~Esensi Model~~
- Laracasts/Validation


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


## Over-Achiever's TODO
Bonus:
- Event image(s)
- Add Longitude/Lattitude to Location
- Show google map of event location
- Add functionality for visitors to register for an event


##Application User Profiling
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

## Setting Up Your Enseni Models
1. When adding new models to your Laravel application, if you want to use the Enseni Model validation make sure to include the following in the php file where the model lives.
2. The rules defined in the model will be used for validation when creating/updating the model.

```php
<?php

use \Esensi\Model\Model;

class Article extends Model {

    protected $rules = array(
		'title' => 'required|max:255',
		'body' => 'required|max:4000',
	);
```

### Auto-Validating On Save

While developers can of course use the [`Model`](https://github.com/esensi/model/blob/master/src/Model.php) or [`SoftModel`](https://github.com/esensi/model/blob/master/src/SoftModel.php) classes which already include the [`ValidatingModelTrait`](https://github.com/esensi/model/blob/master/src/Traits/ValidatingModelTrait.php), the following code will demonstrate adding auto-validation to any `Eloquent` based model.

```php
<?php

use \Esensi\Model\Contracts\ValidatingModelInterface;
use \Esensi\Model\Traits\ValidatingModelTrait;
use \Illuminate\Database\Eloquent\Model as Eloquent;

class Post extends Eloquent implements ValidatingModelInterface {

    use ValidatingModelTrait;

    /**
     * These are the default rules that the model will validate against.
     * Developers will probably want to specify generic validation rules
     * that would apply in any save operation vs. form or route
     * specific validation rules. For simple models, these rules can
     * apply to all save operations.
     *
     * @var array
     */
    protected $rules = [
       'title' => [ 'max:64' ],
       'slug' => [ 'max:16', 'alpha_dash', 'unique' ],
       'published' => [ 'boolean' ],
       // ... more attribute rules
    ];

    /**
     * These are the rulesets that the model will validate against
     * during specific save operations. Rulesets should be keyed
     * by either the in progress event name of the save operation
     * or a custom unique key for custom validation.
     *
     * The following rulesets are automatically applied during
     * corresponding save operations:
     *
     *     "creating" after "saving" but before save() is called (on new models)
     *     "updating" after "saving" but before save() is called (on existing models)
     *     "saving" before save() is called (and only if no "creating" or "updating")
     *     "deleting" when calling delete() method
     *     "restoring" when calling restore() method (on a soft-deleting model)
     *
     * @var array
     */
    protected $rulesets = [

        'creating' => [
            'title' => [ 'required', 'max:64' ],
            'slug' => [ 'required', 'alpha_dash', 'max:16', 'unique' ],
            'published' => [ 'boolean' ],
            // ... more attribute rules to validate against when creating
        ],

        'updating' => [
            'title' => [ 'required', 'max:64' ],
            'slug' => [ 'required', 'alpha_dash', 'max:16', 'unique' ],
            'published' => [ 'boolean' ],
            // ... more attribute rules to validate against when updating
        ],
    ];

}
```

Then from the controller or repository the developer can interact with the `Post` model's attributes, call the `save()` method and let the `Post` model handle validation automatically. For demonstrative purposes the following code shows this pattern from a simple route closure:

```php
Route::post( 'posts', function()
{
    // Hydrate the model from the Input
    $attributes = Input::only( 'title', 'slug', 'published' );
    $post = new Post( $attributes );

    // Attempt to save, will return false on invalid model.
    // Because this is a new model, the "creating" ruleset will
    // be used to validate against. If it does not exist then the
    // "saving" ruleset will be attempted. If that does not exist, then
    // finally it will default to the Post::$rules.
    if ( ! $post->save() )
    {
        // Redirect back to the form with the message bag of errors
        return Redirect::to( 'posts' )
            ->withErrors( $post->getErrors() )
            ->withInput();
    }

    // Redirect to the new post
    return Redirect::to( 'posts/' . $post->id );
});
```

Calling the `save()` method on the newly created `Post` model would instead use the "updating" ruleset from `Post::$ruleset` while saving. If that ruleset did not exist then it would default to using the `Post::$rules`.

## Contributing
1. Fork it!
2. Create your feature branch: `git checkout -b my-new-feature`
3. Commit your changes: `git commit -am 'Add some feature'`
4. Push to the branch: `git push origin my-new-feature`
5. Submit a pull request :D

## Official Documentation

Documentation for Laravel 4.2 can be found on the [http://laravel.com/docs/4.2](http://laravel.com/docs/4.2).

### License

The Laravel framework and all packages used in the creation of this application are open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
