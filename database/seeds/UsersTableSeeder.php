<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 创建超级管理员
        $data = [
            [
                'name'       => 'Everan',
                'email'      => 'everan@alyun.com',
                'phone'      => '18818801234',
                'remake'     => '超级管理员',
                'identify'   => 1,
                'password'   => bcrypt('everan57@&'),
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ],
            [
                'name'       => '项目营销中心团购部',
                'email'      => 'xmyxzxtgb@qq.com',
                'phone'      => '18977987491',
                'remake'     => '超级管理员',
                'identify'   => 1,
                'password'   => bcrypt('a168168'),
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ]
        ];
        User::insert($data);
    }
}
