<?php

namespace App\Console\Commands;

use App\Http\Controllers\Apis\SerpApi;
use Illuminate\Console\Command;
use function PHPUnit\Framework\at;

class QueryApi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'query:api
                            {api_name : google_maps, yelp, etc.}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Runs query to get business data from specified API.';

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
     * @return int
     */
    public function handle()
    {
        $serpapiClient = new SerpApi();
        $api           = $this->argument('api_name');
        $serpapiClient->query($this->processArguments($api));
        return 0;
    }

    public function processArguments($api)
    {
        return match ($api) {
            'google_maps' => $this->processGoogleApiQuery(),
            'yelp'        => $this->processYelpApiQuery()
        };
    }

    public function processGoogleApiQuery(): array
    {
        $arguments['engine']  = 'google_maps';
        $arguments['q']       = $this->ask('Enter a keyword to search by, i.e. restaurants, bars, cafe, etc: ');
        $arguments['ll']      = "@" . $this->ask('Enter a latitude coordinate: ');
        $arguments['ll']     .= ", " . $this->ask('Enter a longitude coordinate: ');
        $arguments['ll']     .= "," . $this->ask('Enter a zoom level (3 - 21): ') . "z";
        $arguments['search']  = 'search';
        return $arguments;
    }

    public function processYelpApiQuery(): array
    {
        $arguments['engine']    = 'yelp';
        $arguments['keyword']   = $this->ask('Enter a keyword to search by, i.e. restaurants, bars, cafe, etc: ');
        $arguments['latitude']  = $this->ask('Enter a latitude coordinate: ');
        $arguments['longitude'] = $this->ask('Enter a longitude coordinate: ');
        $arguments['zoom']      = $this->ask('Enter a zoom level (3 - 21): ');
        return $arguments;
    }
}
