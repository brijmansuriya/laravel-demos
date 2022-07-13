<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
class showdata extends Command
{
    protected $commands=[
        Commands\showdata::class,
    ];

    protected $signature = 'showdatabase';

  
    protected $description = 'showdata Command description';

   
    public function __construct()
    {
        parent::__construct();
    }

   
    public function handle()
    {
        // return 0;
        $this->info(DB::Connection()->getdatabasename());

    }
}
