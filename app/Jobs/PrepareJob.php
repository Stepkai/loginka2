<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class PrepareJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
   // public $tries = 2;
    protected $message;

    public function __construct($data)
    {
        $this->message = $data;
        //члену класса присваеваем значение, которое пришло в конструктор

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
       // throw new \Exception("Our Error". 101);
        info($this->message);
    }
}
