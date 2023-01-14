<?php

namespace Database\Seeders;

use App\Models\Investor;
use Illuminate\Database\Seeder;


class InvestorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $investors =  [
            [
                'name' => 'zahra1',
                'mobile' => '09365075199',
                'email' => 'zrezayi@gmail.com',
                'address' => 'tehran afsariye',
                'weburl' => 'test web url',
                'phone' => '02133450222',
                'avatar_url' => 'test avatar url'
            ],

            [
                'name' => 'zahra2',
                'mobile' => '09365075199',
                'email' => 'zrezayi@gmail.com',
                'address' => 'tehran afsariye',
                'weburl' => 'test web url',
                'phone' => '02133450222',
                'avatar_url' => 'test avatar url'
            ],
            [
                'name' => 'zahra3',
                'mobile' => '09365075199',
                'email' => 'zrezayi@gmail.com',
                'address' => 'tehran afsariye',
                'weburl' => 'test web url',
                'phone' => '02133450222',
                'avatar_url' => 'test avatar url'
            ]
        ];


        foreach ($investors as $investor) {

            Investor::create([

                'name' => $investor['name'],
                'mobile' => $investor['mobile'],
                'email' => $investor['email'],
                'address' => $investor['address'],
                'weburl' => $investor['weburl'],
                'phone' => $investor['phone'],
                'avatar_url' => $investor['avatar_url']
            ]);
        }
    }
}
