<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use  App\Http\Controllers\common\email\ExpiredContractEmail;

class expiredContractCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'expiredContract {--contracts_id=: contracts id to check if expired}{--users_id=: send to some user}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
       $options=$this->option();

        $contracts_id=(array_key_exists('contracts_id',$options))? $options['contracts_id']:0;
        $users_id=(array_key_exists('users_id',$options))? $options['users_id']:0;

        $EmailClass = new expiredContractEmail();
        $EmailClass->sendExpiredEmail($contracts_id,$users_id);
    }
}
