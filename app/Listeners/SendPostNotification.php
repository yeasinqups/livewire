<?php

namespace App\Listeners;


use App\Models\User;
use App\Mail\SendMailUser;
use App\Events\PostProcessed;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendPostNotification implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */

   
    public function __construct()
    {
       
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\PostProcessed  $event
     * @return void
     */
    public function handle(SendMailUser $event)
    {
        $data = [
           
            'email' => $event->email,
            // 'delay' => $event->email,
            
        ];
        
        Mail::send('user', $data, function ($message) use ($event) {
            $message->to($event->email)
                ->subject('Welcome')
                ->everySeconds(20);
        });
        
    }
}
