<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\User\VideoController;
use App\Models\Subscriber;
use App\Models\User;
use Carbon\Carbon;

class VideoTaskCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'video:check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Process video files';

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
     * Check subscription status, block the ones that missed payments.
     *
     * @return int
     */
    public function handle()
    {                
        $video = new VideoController();
        $video->verify();                            

    }
}
