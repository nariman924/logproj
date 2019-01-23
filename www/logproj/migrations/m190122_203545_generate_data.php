<?php

use yii\db\Migration;
use Faker\Factory;
/**
 * Class m190122_203545_generate_data
 */
class m190122_203545_generate_data extends Migration
{
    public function up()
    {
        $faker = Factory::create();

        for ($i = 0; $i < 100000; $i++) {
            $this->batchInsert('log', ['type', 'message'], [
                [random_int(1,10), $faker->text()],
                [random_int(1,10), $faker->text()],
                [random_int(1,10), $faker->text()],
                [random_int(1,10), $faker->text()],
                [random_int(1,10), $faker->text()],
                [random_int(1,10), $faker->text()],
                [random_int(1,10), $faker->text()],
                [random_int(1,10), $faker->text()],
                [random_int(1,10), $faker->text()],
                [random_int(1,10), $faker->text()],

                [random_int(1,10), $faker->text()],
                [random_int(1,10), $faker->text()],
                [random_int(1,10), $faker->text()],
                [random_int(1,10), $faker->text()],
                [random_int(1,10), $faker->text()],
                [random_int(1,10), $faker->text()],
                [random_int(1,10), $faker->text()],
                [random_int(1,10), $faker->text()],
                [random_int(1,10), $faker->text()],
                [random_int(1,10), $faker->text()],

                [random_int(1,10), $faker->text()],
                [random_int(1,10), $faker->text()],
                [random_int(1,10), $faker->text()],
                [random_int(1,10), $faker->text()],
                [random_int(1,10), $faker->text()],
                [random_int(1,10), $faker->text()],
                [random_int(1,10), $faker->text()],
                [random_int(1,10), $faker->text()],
                [random_int(1,10), $faker->text()],
                [random_int(1,10), $faker->text()],
            ]);
        }
    }

    public function down()
    {

    }
}
