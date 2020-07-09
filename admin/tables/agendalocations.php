<?php
defined('_JEXEC') or die('Restricted access');

/**
 * Locations Table class
 *
 * @since  0.0.9
 */
class AgendaTableAgendaLocations extends JTable
{
    /**
     * Constructor
     *
     * @param   JDatabaseDriver  &$db  A database connector object
     * @since 0.0.9
     */
    function __construct(&$db)
    {
        parent::__construct('#__nexus_agenda_locations', 'id', $db);
    }
}