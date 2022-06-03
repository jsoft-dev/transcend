<?php

namespace Database\Seeders;

use Domain\Connection\Models\Connection;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $connections = [
            [
                'api_key' => 'OtioIyztlWIkmGu4JT14avxGtTlFrYjQ',
                'customer' => '10784073',
                'label' => 'label',
            ],
            [
                'api_key' => 'osdIJfHXR8lNKMMQhe3WErtWk5a5zu1O',
                'customer' => '10784093',
                'label' => 'label',
            ],
            [
                'api_key' => 'wG09s1eilaA4QcLSoeyMdiuQvzho8WEP',
                'customer' => '10773393',
                'label' => 'label',
            ],
            [
                'api_key' => 'oGtqGNa7Jfq0yQSZ8ODaRyFsJSAFK2TJ',
                'customer' => '10784069',
                'label' => 'label',
            ],
            [
                'api_key' => '9xWBHgHbAZYWSAabGMtEc1trnWGTL5Jd',
                'customer' => '10773386',
                'label' => 'label',
            ],
            [
                'api_key' => 'T6vrw7d1fijAcw6RGjA4CKBocGETVox5',
                'customer' => '10773385',
                'label' => 'label',
            ],
            [
                'api_key' => 'fJhlmCwSdBA513uVO6xLvFOAIIxedpqA',
                'customer' => '10707195',
                'label' => 'label',
            ],
            [
                'api_key' => 'fJhlmCwSdBA513uVO6xLvFOAIIxedpqA',
                'customer' => '10707193',
                'label' => 'label',
            ],
            [
                'api_key' => 'DzCAgrNVSufQAROGy1CUi3BoDpoObaYA',
                'customer' => '10784071',
                'label' => 'label',
            ],
            [
                'api_key' => 'fJhlmCwSdBA513uVO6xLvFOAIIxedpqA',
                'customer' => '10703365',
                'label' => 'label',
            ],
        ];

        Connection::query()->insert($connections);
    }
}
