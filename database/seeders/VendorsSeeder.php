<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vendor;

class VendorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vendors = [
            ['id' => 5, 'vendor_id' => 'elevenlabs_nrl', 'enabled' => 0, 'cost' => 0.00005],
        ];

        foreach ($vendors as $vendor) {
            Vendor::updateOrCreate(['id' => $vendor['id']], $vendor);
        }
    }
}
