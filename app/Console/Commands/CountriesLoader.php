<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Ixudra\Curl\Facades\Curl;
use App\Country;

class CountriesLoader extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'loader:countries';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Daily Task use to load countries';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $response = Curl::to('https://api.hasoffers.com/Apiv3/json')
            ->withData(
                array(
                    'NetworkId' => 'tapgerine',
                    'Target' => 'Affiliate_Application',
                    'Method' => 'findAllCountries',
                    'api_key' => '2dbd64d5827c4a43ec2629afc4b9efcf3bf861de238d1ac0761a7438ec5e6526',
                )
            )
            ->withOption('SSL_VERIFYPEER', false)
            ->asJson(true)
            ->get();
        if ($response !== false) {
            $httpStatus = $response['response']['httpStatus'];
            if ($httpStatus === 200) {
                $data = $response['response']['data'];
                foreach ($data as $key => $val) {
                    $offerData = $data[$key]['Country'];
                    $test_offer = Country::find($offerData['id']);
                    if ($test_offer === null) {
                        $offer = new Country;
                        foreach ($offerData as $keyx => $valx) {
                            $offer->$keyx = $valx;
                        }
                        $offer->save();
                    }
                }
            }
        }
    }
}
