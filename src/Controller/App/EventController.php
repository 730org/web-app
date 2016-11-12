<?php

namespace App\Controller\App;

use EventsTransformer;
use App\Controller\AppController;

class EventController extends AppController
{
    /**
     * @var eventsTransformer
     */
    private $eventsTransformer;

    public function __construct(EventsTransformer $eventsTransformer)
    {
        $this->eventsTransformer = $eventsTransformer;
    }
}