RENAME TABLE `#__nexus_agenda_places` TO `#__nexus_agenda_locations`;

ALTER TABLE `#__nexus_agenda_locations`
    ADD `map_position` INT NULL AFTER `description`;
