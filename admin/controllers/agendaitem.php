<?php
defined('_JEXEC') or die('Restricted access');

class AgendaControllerAgendaItem extends JControllerForm
{
    public function getModel($name = 'AgendaItem', $prefix = 'AgendaModel', $config = array())
    {
        return parent::getModel($name, $prefix, $config);
    }
}