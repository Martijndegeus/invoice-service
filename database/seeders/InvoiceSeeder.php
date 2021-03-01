<?php

namespace Database\Seeders;

use App\Models\Invoice;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Invoice::create([
            'identifier' => 'INV-001',
            'order_id'   => 1,
            'paid_at'    => Carbon::now()->subDays(2),
        ]);

        Invoice::create([
            'identifier' => 'INV-002',
            'order_id'   => 2,
        ]);
    }
}
