<?php

namespace Database\Seeders;

use App\Models\Setting as ModelsSetting;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class setting extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsSetting::create([
            'id' => 1,
            'facebook' => 'https://www.facebook.com/AbdelbaathMechraouiCompteOfficiel',
            'youtube'  => 'https://www.facebook.com/AbdelbaathMechraouiCompteOfficiel',
            'google'   => 'https://www.facebook.com/AbdelbaathMechraouiCompteOfficiel',
            'twiter'   => 'https://www.facebook.com/AbdelbaathMechraouiCompteOfficiel',
        ]);

    }
}
