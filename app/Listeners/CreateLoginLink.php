<?php

namespace App\Listeners;

use App\Events\ScientistCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;
use App\Notifications\RegisterScientist;
use App\ScientistAccount;

class CreateLoginLink
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
     * @param  ScientistCreated  $event
     * @return void
     */
    public function handle(ScientistCreated $event)
    {
        $rand=str_random(15);
        $rand=$this->checkRand($rand);
        $event->scientist->login_link=$rand;
        $event->scientist->save();

        // Notification::send($event->scientist,new RegisterScientist($event->scientist));
    }

    protected function checkRand($rand){
        if(ScientistAccount::where('login_link',$rand)->count()){
            $rand=str_random(15);
            $this->checkRand($rand);
        }
        return $rand;
    }
}
