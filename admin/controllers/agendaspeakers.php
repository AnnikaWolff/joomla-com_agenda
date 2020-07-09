<?php
defined('_JEXEC') or die('Restricted access');

/**
 * Class AgendaControllerAgendaSpeakers
 * @since 0.0.6
 */
class AgendaControllerAgendaSpeakers extends JControllerAdmin
{
    public function getModel($name = 'AgendaSpeakers', $prefix = 'AgendaModel', $config = array('ignore_request' => true))
    {
        return parent::getModel($name, $prefix, $config);
    }
}