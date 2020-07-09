ALTER TABLE `#__nexus_agenda_speaker`
    ADD `company` VARCHAR(250) NULL AFTER `description`,
    ADD `portrait` VARCHAR(250) NULL AFTER `company`;

RENAME TABLE `#__nexus_agenda_speaker` TO `#__nexus_agenda_speakers`;

