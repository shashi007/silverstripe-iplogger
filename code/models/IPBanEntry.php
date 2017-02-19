<?php
/**
 * Provides a {@link DataObject} to store a ban against a specififc IP.
 *
 * @package silverstripe-iplogger
 */
class IPBanEntry extends DataObject
{
    private static $db = array(
        'Event'   => 'Varchar(255)',
        'IP'      => 'Varchar(255)'
    );
}