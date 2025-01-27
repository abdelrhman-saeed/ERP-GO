<?php

namespace Workdo\Lead\Events;

use Illuminate\Queue\SerializesModels;

class CreateSource
{
    use SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public $request;
    public $source;

    public function __construct($request,$source)
    {
        $this->request = $request;
        $this->source = $source;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
