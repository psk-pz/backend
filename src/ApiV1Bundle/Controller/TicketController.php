<?php

namespace ApiV1Bundle\Controller;

use ApiV1Bundle\Model\TicketInterface;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;

/**
 * Controller for actions related with ticket resource.
 */
class TicketController extends FOSRestController
{
    /**
     * Returns ticket by it's identifier.
     *
     * @param integer $id
     * @return TicketInterface
     */
    public function getTicketAction($id)
    {
        return $this->get('apiv1.ticket.resource')->get($id);
    }
}
