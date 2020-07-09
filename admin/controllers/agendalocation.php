<?php
defined('_JEXEC') or die('Restricted access');

class AgendaControllerAgendaLocation extends JControllerForm
{
    public function getModel($name = 'AgendaLocation', $prefix = 'AgendaModel', $config = array())
    {
        return parent::getModel($name, $prefix, $config);
    }
}