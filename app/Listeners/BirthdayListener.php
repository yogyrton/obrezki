<?php

namespace App\Listeners;

use App\Events\BirthdayEvent;
use App\Jobs\BirthdayJob;
use App\Mail\BirthdayMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class BirthdayListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\BirthdayEvent  $event
     * @return void
     */
    public function handle(BirthdayEvent $event)
    {
        foreach ($event->users as $user) {
            dispatch(new BirthdayJob());
        }
    }
}

