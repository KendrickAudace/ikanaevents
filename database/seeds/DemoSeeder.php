<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        /**
         * ============================
         * 🔐 SOCIAL LOGIN SETTINGS
         * ============================
         * NOTE:
         * Secrets are NOT stored here.
         * They must be configured in .env
         */

        DB::table('core_settings')->insert([
            [
                'name'  => "google_enable",
                'val'   => "1",
                'group' => "advance",
            ],
            [
                'name'  => "google_client_id",
                'val'   => env('GOOGLE_CLIENT_ID', ''),
                'group' => "advance",
            ],

            [
                'name'  => "facebook_enable",
                'val'   => "1",
                'group' => "advance",
            ],
            [
                'name'  => "facebook_client_id",
                'val'   => env('FACEBOOK_CLIENT_ID', ''),
                'group' => "advance",
            ],

            [
                'name'  => "twitter_enable",
                'val'   => "1",
                'group' => "advance",
            ],
            [
                'name'  => "twitter_client_id",
                'val'   => env('TWITTER_CLIENT_ID', ''),
                'group' => "advance",
            ],
        ]);

        /**
         * ============================
         * 💳 PAYPAL SETTINGS
         * ============================
         */

        DB::table('core_settings')->insert([
            [
                'name'  => "g_paypal_enable",
                'val'   => "1",
                'group' => "payment",
            ],
            [
                'name'  => "g_paypal_name",
                'val'   => "PayPal",
                'group' => "payment",
            ],
            [
                'name'  => "g_paypal_test",
                'val'   => "1",
                'group' => "payment",
            ],
            [
                'name'  => "g_paypal_convert_to",
                'val'   => "usd",
                'group' => "payment",
            ],
            [
                'name'  => "g_paypal_exchange_rate",
                'val'   => "1",
                'group' => "payment",
            ],
            [
                'name'  => "g_paypal_test_account",
                'val'   => env('PAYPAL_EMAIL', ''),
                'group' => "payment",
            ],
        ]);

        /**
         * ============================
         * 💳 STRIPE SETTINGS
         * ============================
         */

        DB::table('core_settings')->insert([
            [
                'name'  => "g_stripe_enable",
                'val'   => "1",
                'group' => "payment",
            ],
            [
                'name'  => "g_stripe_name",
                'val'   => "Stripe",
                'group' => "payment",
            ],
            [
                'name'  => "g_stripe_sandbox",
                'val'   => "1",
                'group' => "payment",
            ],
        ]);

        /**
         * ============================
         * 💳 2CHECKOUT SETTINGS
         * ============================
         */

        DB::table('core_settings')->insert([
            [
                'name'  => "g_two_checkout_gateway_enable",
                'val'   => "0",
                'group' => "payment",
            ],
            [
                'name'  => "g_two_checkout_gateway_name",
                'val'   => "2Checkout",
                'group' => "payment",
            ],
        ]);
    }
}