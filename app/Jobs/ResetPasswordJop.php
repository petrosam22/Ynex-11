<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use App\Mail\SendResetPassword;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ResetPasswordJop implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
public $link;
public $user;
     public function __construct(User $user ,$link)
    {
        $this->link = $link;
        $this->user = $user;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {

        Mail::to($this->user['email'])
        ->send(new SendResetPassword( $this->link));

     }
}
