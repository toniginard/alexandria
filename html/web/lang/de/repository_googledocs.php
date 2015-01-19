<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'repository_googledocs', language 'de', branch 'MOODLE_26_STABLE'
 *
 * @package   repository_googledocs
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'Client ID';
$string['configplugin'] = 'Einstellungen für Google Drive Plugin';
$string['googledocs:view'] = 'Google Drive Dateiverzeichnis anzeigen';
$string['oauth2upgrade_message_content'] = 'Beim Update auf Moodle 2.3 wurde das Google Drive Portfolio deaktiviert. Zur Reaktivierung muss Ihre Seite bei Google registriert sein. Die Dokumentation {$a->docsurl} beschreibt diesen Vorgang. Sie erhalten eine Client-ID und einen Schlüssel, womit Sie alle Google Drive und Picasa Plugins konfigurieren können.';
$string['oauth2upgrade_message_small'] = 'Das Google Docs Repository Plugin wurde deaktiviert bis es mit Google OAuth2.0 neu konfiguriert wurde wie in der Dokumentation beschrieben.';
$string['oauth2upgrade_message_subject'] = 'Wichtige Informationen zum Google Drive Repository Plugin';
$string['oauthinfo'] = '<p>Um dieses Plugin nutzen zu können, ist eine Registrierung bei Google erforderlich. Entsprechende Informationen finden Sie auf <a href="{$a->docsurl}">Google OAuth 2.0 Setup</a>.</p><p>Während der Registrierung müssen Sie folgende URL als \'Authorized Redirect URIs\' eingeben: <br />{$a->callbackurl}</p>Sie erhalten eine Client ID und ein Secret, mit denen Sie alle Plugins für Google Drive und Picasa konfigurieren können.</p><p>Der Service für \'Drive API\' muss zusätzlich aktiviert werden. </p>';
$string['pluginname'] = 'Google Drive';
$string['secret'] = 'Secret';
$string['servicenotenabled'] = 'Zugriff nicht konfiguriert. Prüfen Sie, ob der \'Drive API\'-Service aktiviert wurde.';
