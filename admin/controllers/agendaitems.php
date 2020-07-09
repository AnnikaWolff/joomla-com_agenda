<?php
defined('_JEXEC') or die('Restricted access');

/**
 * Class AgendaControllerAgenda
 * main controller of this package
 */
class AgendaControllerAgendaItems extends JControllerAdmin
{
    public function getModel($name = 'AgendaItems', $prefix = 'AgendaModel', $config = array('ignore_request' => true))
    {
        return parent::getModel($name, $prefix, $config);
    }
}