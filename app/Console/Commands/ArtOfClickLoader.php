<?php

namespace App\Console\Commands;

use App\ArtOfClickModel;
use Illuminate\Console\Command;
use Ixudra\Curl\Facades\Curl;

class ArtOfClickLoader extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'loader:artofclick';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command Load ArtOfClick';

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
        $response = Curl::to('http://api.artofclick.com/web/Api/v2.0/offer.json')
            ->withData(
                array(
                    'api_key' => 'f5d8c94ebc08f49d5d02c15ebc3252802040ac8540acb554aa308c24c6a59c1f',
                )
            )
            ->asJson(true)
            ->get();
        if ($response !== false) {
            $offers = $response['offers'];
            foreach ($offers as $offer) {
                $artofclick = new ArtOfClickModel;
                foreach ($offer as $key => $val) {
                    if (is_array($val)) {
                        $val = implode(',', $val);
                    }
                    $artofclick->$key = $val;
                }
                $artofclick->save();
            }
        }
    }

}
