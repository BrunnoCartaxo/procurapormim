<?php
    
namespace Application\View\Helper;

use Zend\View\Helper\AbstractHelper;

class IdentifyRoute extends AbstractHelper {

	protected $routeMatch;

    public function __construct($routeMatch)
    {
        $this->routeMatch = $routeMatch;
    }

    public function __invoke()
    {
        if ($this->routeMatch) {
            $route = $this->routeMatch->getMatchedRouteName();
            return $route;
        }
    }
}