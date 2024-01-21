<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PublicMessageEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * The name of the channel.
     *
     * @var string
     */
    public $channelName;

    /**
     * The message data.
     *
     * @var mixed
     */
    public $message;

    /**
     * Create a new event instance.
     *
     * @param string $channelName
     * @param mixed $message
     * @return void
     */
    public function __construct($channelName, $message)
    {
        $this->channelName = $channelName;
        $this->message = $message;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel($this->channelName);
    }
}
