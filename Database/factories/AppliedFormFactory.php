<?php

use App\Modules\Form\Model\AppliedForm;
use App\Modules\Form\Model\Form;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(AppliedForm::class, function (Faker $faker) {
    return [
        'form_id' => static function () {
            return factory(Form::class)->create()->id;
        },
        'is_read' => $faker->boolean
    ];
});
