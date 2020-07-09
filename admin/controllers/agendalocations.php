<?php
defined('_JEXEC') or die('Restricted access');

/**
 * Class AgendaControllerAgendaLocation
 * @since 0.0.9
 */
class AgendaControllerAgendaLocation extends JControllerAdmin
{
    public function getModel($name = 'AgendaLocations', $prefix = 'AgendaModel', $config = array('ignore_request' => true))
    {
        return parent::getModel($name, $prefix, $config);
    }
}