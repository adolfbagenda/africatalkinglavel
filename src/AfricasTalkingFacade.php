<?php

namespace adolfbagenda\AfricasTalking;

use Illuminate\Support\Facades\Facade;

/**
 * CountriesFacade
 *
 */
class AfricasTalkingFacade extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'AfricasTalkingGateway'; }

}
