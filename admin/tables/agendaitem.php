<?php
defined('_JEXEC') or die('Restricted access');

/**
 * Agenda Item Table class
 *
 * @since  0.0.1
 */
class AgendaTableAgendaItem extends JTable
{
    /**
     * Constructor
     *
     * @param   JDatabaseDriver  &$db  A database connector object
     */
    function __construct(&$db)
    {
        parent::__construct('#__nexus_agenda_items', 'id', $db);
    }
}