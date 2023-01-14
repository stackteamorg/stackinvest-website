<?php

namespace Database\Seeders;

use App\Models\InvestorInfo;
use Illuminate\Database\Seeder;

class InvestorInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $invester_infos = [
            [
                'investor_id' => 4,
                'key' => 'key1',
                'value' => 'value1',
                'comment' => 'test comment'
            ],
            [
                'investor_id' => 5,
                'key' => 'key2',
                'value' => 'value2',
                'comment' => 'test comment2'
            ],
            [
                'investor_id' => 6,
                'key' => 'key3',
                'value' => 'value3',
                'comment' => 'test comment3'
            ]
        ];

        foreach ($invester_infos as $invester_info) {
            InvestorInfo::create([
                
                'investor_id' => $invester_info['investor_id'],
                'key' => $invester_info['key'],
                'value' => $invester_info['value'],
                'comment' => $invester_info['comment'],
            ]);
        }
    }
}
