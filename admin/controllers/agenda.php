<?php
defined('_JEXEC') or die('Restricted access');

/**
 * Class AgendaControllerAgenda
 * main controller of this package
 */
class AgendaControllerAgenda extends JControllerAdmin
{
    public function getModel($name = 'Agenda', $prefix = 'AgendaModel', $config = array('ignore_request' => true))
    {
        return parent::getModel($name, $prefix, $config);
    }
}