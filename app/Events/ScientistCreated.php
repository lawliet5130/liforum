<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

use App\ScientistAccount;

class ScientistCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $scientist;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(ScientistAccount $scientist)
    {
        $this->scientist=$scientist;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    
    // public function broadcastOn()
    // {
    //     return new PrivateChannel('channel-name');
    // }
}
