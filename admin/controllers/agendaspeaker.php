<?php
defined('_JEXEC') or die('Restricted access');

class AgendaControllerAgendaSpeaker extends JControllerForm
{
    public function getModel($name = 'AgendaSpeaker', $prefix = 'AgendaModel', $config = array())
    {
        return parent::getModel($name, $prefix, $config);
    }
}