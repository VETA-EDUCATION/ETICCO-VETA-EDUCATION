<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2016 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/


/**
 * Set up an array of Jobs with the appropriate metadata
 * 'jobName' => array (
 *        'X' => 'name',
 * )
 * 'X' should be an increment of 1
 * 'name' should be the EXACT name of your function
 *
 * Your function should not be passed any parameters
 * Always  return a Boolean. If it does not the Job will not terminate itself
 * after completion, and the webserver will be forced to time-out that Job instance.
 * DO NOT USE sugar_cleanup(); in your function flow or includes.  this will
 * break Schedulers.  That function is called at the foot of cron.php
 */

/**
 * This array provides the Schedulers admin interface with values for its "Job"
 * dropdown menu.
 */
$job_strings = array(
    0 => 'refreshJobs',
    1 => 'pollMonitoredInboxes',
    2 => 'runMassEmailCampaign',
    3 => 'pruneDatabase',
    4 => 'trimTracker',
    5 => 'pollMonitoredInboxesForBouncedCampaignEmails',
    6 => 'pollMonitoredInboxesAOP',
    7 => 'aodIndexUnindexed',
    8 => 'aodOptimiseIndex',
    9 => 'aorRunScheduledReports',
    10 => 'processAOW_Workflow',
    12 => 'sendEmailReminders',
    14 => 'cleanJobQueue',
    15 => 'removeDocumentsFromFS',
    16 => 'trimSugarFeeds',
    17 => 'calcularEdadProspecto',
    18 => 'calcularAnosSinEstudiar',
    19 => 'descartarProspecto',
    20 => 'calcularEdadEstudiante',
    21 => 'calcularEdadConyuge',
    22 => 'calcularEdadHijos',
    23 => 'prospecto_no_contactado',
    24 => 'alerta_loo',
    25 => 'establecer_perdida',
    26 => 'actualizar_estado_cursos',
    27 => 'actualizar_estado_requerimientos',
    28 => 'recalcular_consecutivos'

);

/**
 * Job 0 refreshes all job schedulers at midnight
 * DEPRECATED
 */
function refreshJobs()
{
    return true;
}


/**
 * Job 1
 */
function pollMonitoredInboxes()
{

    $_bck_up = array(
        'team_id' => $GLOBALS['current_user']->team_id,
        'team_set_id' => $GLOBALS['current_user']->team_set_id
    );
    $GLOBALS['log']->info('----->Scheduler fired job of type pollMonitoredInboxes()');
    global $dictionary;
    global $app_strings;


    require_once('modules/Emails/EmailUI.php');

    $ie = new InboundEmail();
    $emailUI = new EmailUI();
    $r = $ie->db->query('SELECT id, name FROM inbound_email WHERE is_personal = 0 AND deleted=0 AND status=\'Active\' AND mailbox_type != \'bounce\'');
    $GLOBALS['log']->debug('Just got Result from get all Inbounds of Inbound Emails');

    while ($a = $ie->db->fetchByAssoc($r)) {
        $GLOBALS['log']->debug('In while loop of Inbound Emails');
        $ieX = new InboundEmail();
        $ieX->retrieve($a['id']);;
        $mailboxes = $ieX->mailboxarray;
        foreach ($mailboxes as $mbox) {
            $ieX->mailbox = $mbox;
            $newMsgs = array();
            $msgNoToUIDL = array();
            $connectToMailServer = false;
            if ($ieX->isPop3Protocol()) {
                $msgNoToUIDL = $ieX->getPop3NewMessagesToDownloadForCron();
                // get all the keys which are msgnos;
                $newMsgs = array_keys($msgNoToUIDL);
            }
            if ($ieX->connectMailserver() == 'true') {
                $connectToMailServer = true;
            } // if

            $GLOBALS['log']->debug('Trying to connect to mailserver for [ ' . $a['name'] . ' ]');
            if ($connectToMailServer) {
                $GLOBALS['log']->debug('Connected to mailserver');
                if (!$ieX->isPop3Protocol()) {
                    $newMsgs = $ieX->getNewMessageIds();
                }
                if (is_array($newMsgs)) {
                    $current = 1;
                    $total = count($newMsgs);
                    require_once("include/SugarFolders/SugarFolders.php");
                    $sugarFolder = new SugarFolder();
                    $groupFolderId = $ieX->groupfolder_id;
                    $isGroupFolderExists = false;
                    $users = array();
                    if ($groupFolderId != null && $groupFolderId != "") {
                        $sugarFolder->retrieve($groupFolderId);
                        $isGroupFolderExists = true;
                    } // if
                    $messagesToDelete = array();
                    if ($ieX->isMailBoxTypeCreateCase()) {
                        $users[] = $sugarFolder->assign_to_id;
                        $distributionMethod = $ieX->get_stored_options("distrib_method", "");
                        if ($distributionMethod != 'roundRobin') {
                            $counts = $emailUI->getAssignedEmailsCountForUsers($users);
                        } else {
                            $lastRobin = $emailUI->getLastRobin($ieX);
                        }
                        $GLOBALS['log']->debug('distribution method id [ ' . $distributionMethod . ' ]');
                    }
                    foreach ($newMsgs as $k => $msgNo) {
                        $uid = $msgNo;
                        if ($ieX->isPop3Protocol()) {
                            $uid = $msgNoToUIDL[$msgNo];
                        } else {
                            $uid = imap_uid($ieX->conn, $msgNo);
                        } // else
                        if ($isGroupFolderExists) {
                            if ($ieX->importOneEmail($msgNo, $uid)) {
                                // add to folder
                                $sugarFolder->addBean($ieX->email);
                                if ($ieX->isPop3Protocol()) {
                                    $messagesToDelete[] = $msgNo;
                                } else {
                                    $messagesToDelete[] = $uid;
                                }
                                if ($ieX->isMailBoxTypeCreateCase()) {
                                    $userId = "";
                                    if ($distributionMethod == 'roundRobin') {
                                        if (sizeof($users) == 1) {
                                            $userId = $users[0];
                                            $lastRobin = $users[0];
                                        } else {
                                            $userIdsKeys = array_flip($users); // now keys are values
                                            $thisRobinKey = $userIdsKeys[$lastRobin] + 1;
                                            if (!empty($users[$thisRobinKey])) {
                                                $userId = $users[$thisRobinKey];
                                                $lastRobin = $users[$thisRobinKey];
                                            } else {
                                                $userId = $users[0];
                                                $lastRobin = $users[0];
                                            }
                                        } // else
                                    } else {
                                        if (sizeof($users) == 1) {
                                            foreach ($users as $k => $value) {
                                                $userId = $value;
                                            } // foreach
                                        } else {
                                            asort($counts); // lowest to highest
                                            $countsKeys = array_flip($counts); // keys now the 'count of items'
                                            $leastBusy = array_shift($countsKeys); // user id of lowest item count
                                            $userId = $leastBusy;
                                            $counts[$leastBusy] = $counts[$leastBusy] + 1;
                                        }
                                    } // else
                                    $GLOBALS['log']->debug('userId [ ' . $userId . ' ]');
                                    $ieX->handleCreateCase($ieX->email, $userId);
                                } // if
                            } // if
                        } else {
                            if ($ieX->isAutoImport()) {
                                $ieX->importOneEmail($msgNo, $uid);
                            } else {
                                /*If the group folder doesn't exist then download only those messages
                                 which has caseid in message*/
                                $ieX->getMessagesInEmailCache($msgNo, $uid);
                                $email = new Email();
                                $header = imap_headerinfo($ieX->conn, $msgNo);
                                $email->name = $ieX->handleMimeHeaderDecode($header->subject);
                                $email->from_addr = $ieX->convertImapToSugarEmailAddress($header->from);
                                $email->reply_to_email = $ieX->convertImapToSugarEmailAddress($header->reply_to);
                                if (!empty($email->reply_to_email)) {
                                    $contactAddr = $email->reply_to_email;
                                } else {
                                    $contactAddr = $email->from_addr;
                                }
                                $mailBoxType = $ieX->mailbox_type;
                                $ieX->handleAutoresponse($email, $contactAddr);
                            } // else
                        } // else
                        $GLOBALS['log']->debug('***** On message [ ' . $current . ' of ' . $total . ' ] *****');
                        $current++;
                    } // foreach
                    // update Inbound Account with last robin
                    if ($ieX->isMailBoxTypeCreateCase() && $distributionMethod == 'roundRobin') {
                        $emailUI->setLastRobin($ieX, $lastRobin);
                    } // if

                } // if
                if ($isGroupFolderExists) {
                    $leaveMessagesOnMailServer = $ieX->get_stored_options("leaveMessagesOnMailServer", 0);
                    if (!$leaveMessagesOnMailServer) {
                        if ($ieX->isPop3Protocol()) {
                            $ieX->deleteMessageOnMailServerForPop3(implode(",", $messagesToDelete));
                        } else {
                            $ieX->deleteMessageOnMailServer(implode($app_strings['LBL_EMAIL_DELIMITER'],
                                $messagesToDelete));
                        }
                    }
                }
            } else {
                $GLOBALS['log']->fatal("SCHEDULERS: could not get an IMAP connection resource for ID [ {$a['id']} ]. Skipping mailbox [ {$a['name']} ].");
                // cn: bug 9171 - continue while
            } // else
        } // foreach
        imap_expunge($ieX->conn);
        imap_close($ieX->conn, CL_EXPUNGE);
    } // while;
    return true;
}

/**
 * Job 2
 */
function runMassEmailCampaign()
{
    if (!class_exists('LoggerManager')) {

    }
    $GLOBALS['log'] = LoggerManager::getLogger('emailmandelivery');
    $GLOBALS['log']->debug('Called:runMassEmailCampaign');

    if (!class_exists('DBManagerFactory')) {
        require('include/database/DBManagerFactory.php');
    }

    global $beanList;
    global $beanFiles;
    require("config.php");
    require('include/modules.php');
    if (!class_exists('AclController')) {
        require('modules/ACL/ACLController.php');
    }

    require('modules/EmailMan/EmailManDelivery.php');
    return true;
}

/**
 *  Job 3
 */
function pruneDatabase()
{
    $GLOBALS['log']->info('----->Scheduler fired job of type pruneDatabase()');
    $backupDir = sugar_cached('backups');
    $backupFile = 'backup-pruneDatabase-GMT0_' . gmdate('Y_m_d-H_i_s', strtotime('now')) . '.php';

    $db = DBManagerFactory::getInstance();
    $tables = $db->getTablesArray();
    $queryString = array();

    if (!empty($tables)) {
        foreach ($tables as $kTable => $table) {
            // find tables with deleted=1
            $columns = $db->get_columns($table);
            // no deleted - won't delete
            if (empty($columns['deleted'])) {
                continue;
            }

            $custom_columns = array();
            if (array_search($table . '_cstm', $tables)) {
                $custom_columns = $db->get_columns($table . '_cstm');
                if (empty($custom_columns['id_c'])) {
                    $custom_columns = array();
                }
            }

            $qDel = "SELECT * FROM $table WHERE deleted = 1";
            $rDel = $db->query($qDel);

            // make a backup INSERT query if we are deleting.
            while ($aDel = $db->fetchByAssoc($rDel, false)) {
                // build column names

                $queryString[] = $db->insertParams($table, $columns, $aDel, null, false);

                if (!empty($custom_columns) && !empty($aDel['id'])) {
                    $qDelCstm = 'SELECT * FROM ' . $table . '_cstm WHERE id_c = ' . $db->quoted($aDel['id']);
                    $rDelCstm = $db->query($qDelCstm);

                    // make a backup INSERT query if we are deleting.
                    while ($aDelCstm = $db->fetchByAssoc($rDelCstm)) {
                        $queryString[] = $db->insertParams($table, $custom_columns, $aDelCstm, null, false);
                    } // end aDel while()

                    $db->query('DELETE FROM ' . $table . '_cstm WHERE id_c = ' . $db->quoted($aDel['id']));
                }
            } // end aDel while()
            // now do the actual delete
            $db->query('DELETE FROM ' . $table . ' WHERE deleted = 1');
        } // foreach() tables

        if (!file_exists($backupDir) || !file_exists($backupDir . '/' . $backupFile)) {
            // create directory if not existent
            mkdir_recursive($backupDir, false);
        }
        // write cache file

        write_array_to_file('pruneDatabase', $queryString, $backupDir . '/' . $backupFile);
        return true;
    }
    return false;
}


///**
// * Job 4
// */

//function securityAudit() {
//	// do something
//	return true;
//}

function trimTracker()
{
    global $sugar_config, $timedate;
    $GLOBALS['log']->info('----->Scheduler fired job of type trimTracker()');
    $db = DBManagerFactory::getInstance();

    $admin = new Administration();
    $admin->retrieveSettings('tracker');
    require('modules/Trackers/config.php');
    $trackerConfig = $tracker_config;

    require_once('include/utils/db_utils.php');
    $prune_interval = !empty($admin->settings['tracker_prune_interval']) ? $admin->settings['tracker_prune_interval'] : 30;
    foreach ($trackerConfig as $tableName => $tableConfig) {

        //Skip if table does not exist
        if (!$db->tableExists($tableName)) {
            continue;
        }

        $timeStamp = db_convert("'" . $timedate->asDb($timedate->getNow()->get("-" . $prune_interval . " days")) . "'",
            "datetime");
        if ($tableName == 'tracker_sessions') {
            $query = "DELETE FROM $tableName WHERE date_end < $timeStamp";
        } else {
            $query = "DELETE FROM $tableName WHERE date_modified < $timeStamp";
        }

        $GLOBALS['log']->info("----->Scheduler is about to trim the $tableName table by running the query $query");
        $db->query($query);
    } //foreach
    return true;
}

/* Job 5
 *
 */
function pollMonitoredInboxesForBouncedCampaignEmails()
{
    $GLOBALS['log']->info('----->Scheduler job of type pollMonitoredInboxesForBouncedCampaignEmails()');
    global $dictionary;


    $ie = new InboundEmail();
    $r = $ie->db->query('SELECT id FROM inbound_email WHERE deleted=0 AND status=\'Active\' AND mailbox_type=\'bounce\'');

    while ($a = $ie->db->fetchByAssoc($r)) {
        $ieX = new InboundEmail();
        $ieX->retrieve($a['id']);
        $ieX->connectMailserver();
        $ieX->importMessages();
    }

    return true;
}


/**
 * Job 12
 */
function sendEmailReminders()
{
    $GLOBALS['log']->info('----->Scheduler fired job of type sendEmailReminders()');
    require_once("modules/Activities/EmailReminder.php");
    $reminder = new EmailReminder();
    return $reminder->process();
}

function removeDocumentsFromFS()
{
    $GLOBALS['log']->info('Starting removal of documents if they are not present in DB');

    /**
     * @var DBManager $db
     * @var SugarBean $bean
     */ global $db;

    // temp table to store id of files without memory leak
    $tableName = 'cron_remove_documents';

    $resource = $db->limitQuery("SELECT * FROM cron_remove_documents WHERE 1=1 ORDER BY date_modified ASC", 0, 100);
    $return = true;
    while ($row = $db->fetchByAssoc($resource)) {
        $bean = BeanFactory::getBean($row['module']);
        $bean->retrieve($row['bean_id'], true, false);
        if (empty($bean->id)) {
            $isSuccess = true;
            $bean->id = $row['bean_id'];
            $directory = $bean->deleteFileDirectory();
            if (!empty($directory) && is_dir('upload://deleted/' . $directory)) {
                if ($isSuccess = rmdir_recursive('upload://deleted/' . $directory)) {
                    $directory = explode('/', $directory);
                    while (!empty($directory)) {
                        $path = 'upload://deleted/' . implode('/', $directory);
                        if (is_dir($path)) {
                            $directoryIterator = new DirectoryIterator($path);
                            $empty = true;
                            foreach ($directoryIterator as $item) {
                                if ($item->getFilename() == '.' || $item->getFilename() == '..') {
                                    continue;
                                }
                                $empty = false;
                                break;
                            }
                            if ($empty) {
                                rmdir($path);
                            }
                        }
                        array_pop($directory);
                    }
                }
            }
            if ($isSuccess) {
                $db->query('DELETE FROM ' . $tableName . ' WHERE id=' . $db->quoted($row['id']));
            } else {
                $return = false;
            }
        } else {
            $db->query('UPDATE ' . $tableName . ' SET date_modified=' . $db->convert($db->quoted(TimeDate::getInstance()->nowDb()),
                    'datetime') . ' WHERE id=' . $db->quoted($row['id']));
        }
    }

    return $return;
}


/**
 * + * Job 16
 * + * this will trim all records in sugarfeeds table that are older than 30 days or specified interval
 * + */

function trimSugarFeeds()
{
    global $sugar_config, $timedate;
    $GLOBALS['log']->info('----->Scheduler fired job of type trimSugarFeeds()');
    $db = DBManagerFactory::getInstance();

    //get the pruning interval from globals if it's specified
    $prune_interval = !empty($GLOBALS['sugar_config']['sugarfeed_prune_interval']) && is_numeric($GLOBALS['sugar_config']['sugarfeed_prune_interval']) ? $GLOBALS['sugar_config']['sugarfeed_prune_interval'] : 30;


    //create and run the query to delete the records
    $timeStamp = $db->convert("'" . $timedate->asDb($timedate->getNow()->get("-" . $prune_interval . " days")) . "'",
        "datetime");
    $query = "DELETE FROM sugarfeed WHERE date_modified < $timeStamp";


    $GLOBALS['log']->info("----->Scheduler is about to trim the sugarfeed table by running the query $query");
    $db->query($query);

    return true;
}


function cleanJobQueue($job)
{
    $td = TimeDate::getInstance();
    // soft delete all jobs that are older than cutoff
    $soft_cutoff = 7;
    if (isset($GLOBALS['sugar_config']['jobs']['soft_lifetime'])) {
        $soft_cutoff = $GLOBALS['sugar_config']['jobs']['soft_lifetime'];
    }
    $soft_cutoff_date = $job->db->quoted($td->getNow()->modify("- $soft_cutoff days")->asDb());
    $job->db->query("UPDATE {$job->table_name} SET deleted=1 WHERE status='done' AND date_modified < " . $job->db->convert($soft_cutoff_date,
            'datetime'));
    // hard delete all jobs that are older than hard cutoff
    $hard_cutoff = 21;
    if (isset($GLOBALS['sugar_config']['jobs']['hard_lifetime'])) {
        $hard_cutoff = $GLOBALS['sugar_config']['jobs']['hard_lifetime'];
    }
    $hard_cutoff_date = $job->db->quoted($td->getNow()->modify("- $hard_cutoff days")->asDb());
    $job->db->query("DELETE FROM {$job->table_name} WHERE status='done' AND date_modified < " . $job->db->convert($hard_cutoff_date,
            'datetime'));
    return true;
}

function pollMonitoredInboxesAOP()
{
    require_once 'modules/InboundEmail/AOPInboundEmail.php';
    $GLOBALS['log']->info('----->Scheduler fired job of type pollMonitoredInboxesAOP()');
    global $dictionary;
    global $app_strings;
    global $sugar_config;

    require_once('modules/Configurator/Configurator.php');
    require_once('modules/Emails/EmailUI.php');

    $ie = new AOPInboundEmail();
    $emailUI = new EmailUI();
    $r = $ie->db->query('SELECT id, name FROM inbound_email WHERE is_personal = 0 AND deleted=0 AND status=\'Active\' AND mailbox_type != \'bounce\'');
    $GLOBALS['log']->debug('Just got Result from get all Inbounds of Inbound Emails');

    while ($a = $ie->db->fetchByAssoc($r)) {
        $GLOBALS['log']->debug('In while loop of Inbound Emails');
        $ieX = new AOPInboundEmail();
        $ieX->retrieve($a['id']);
        $mailboxes = $ieX->mailboxarray;
        foreach ($mailboxes as $mbox) {
            $ieX->mailbox = $mbox;
            $newMsgs = array();
            $msgNoToUIDL = array();
            $connectToMailServer = false;
            if ($ieX->isPop3Protocol()) {
                $msgNoToUIDL = $ieX->getPop3NewMessagesToDownloadForCron();
                // get all the keys which are msgnos;
                $newMsgs = array_keys($msgNoToUIDL);
            }
            if ($ieX->connectMailserver() == 'true') {
                $connectToMailServer = true;
            } // if

            $GLOBALS['log']->debug('Trying to connect to mailserver for [ ' . $a['name'] . ' ]');
            if ($connectToMailServer) {
                $GLOBALS['log']->debug('Connected to mailserver');
                if (!$ieX->isPop3Protocol()) {
                    $newMsgs = $ieX->getNewMessageIds();
                }
                if (is_array($newMsgs)) {
                    $current = 1;
                    $total = count($newMsgs);
                    require_once("include/SugarFolders/SugarFolders.php");
                    $sugarFolder = new SugarFolder();
                    $groupFolderId = $ieX->groupfolder_id;
                    $isGroupFolderExists = false;
                    $users = array();
                    if ($groupFolderId != null && $groupFolderId != "") {
                        $sugarFolder->retrieve($groupFolderId);
                        $isGroupFolderExists = true;
                    } // if
                    $messagesToDelete = array();
                    if ($ieX->isMailBoxTypeCreateCase()) {
                        require_once 'modules/AOP_Case_Updates/AOPAssignManager.php';
                        $assignManager = new AOPAssignManager($ieX);
                    }
                    foreach ($newMsgs as $k => $msgNo) {
                        $uid = $msgNo;
                        if ($ieX->isPop3Protocol()) {
                            $uid = $msgNoToUIDL[$msgNo];
                        } else {
                            $uid = imap_uid($ieX->conn, $msgNo);
                        } // else
                        if ($isGroupFolderExists) {
                            if ($ieX->importOneEmail($msgNo, $uid)) {
                                // add to folder
                                $sugarFolder->addBean($ieX->email);
                                if ($ieX->isPop3Protocol()) {
                                    $messagesToDelete[] = $msgNo;
                                } else {
                                    $messagesToDelete[] = $uid;
                                }
                                if ($ieX->isMailBoxTypeCreateCase()) {
                                    $userId = $assignManager->getNextAssignedUser();
                                    $GLOBALS['log']->debug('userId [ ' . $userId . ' ]');
                                    $ieX->handleCreateCase($ieX->email, $userId);
                                } // if
                            } // if
                        } else {
                            if ($ieX->isAutoImport()) {
                                $ieX->importOneEmail($msgNo, $uid);
                            } else {
                                /*If the group folder doesn't exist then download only those messages
                                 which has caseid in message*/

                                $ieX->getMessagesInEmailCache($msgNo, $uid);
                                $email = new Email();
                                $header = imap_headerinfo($ieX->conn, $msgNo);
                                $email->name = $ieX->handleMimeHeaderDecode($header->subject);
                                $email->from_addr = $ieX->convertImapToSugarEmailAddress($header->from);
                                $email->reply_to_email = $ieX->convertImapToSugarEmailAddress($header->reply_to);
                                if (!empty($email->reply_to_email)) {
                                    $contactAddr = $email->reply_to_email;
                                } else {
                                    $contactAddr = $email->from_addr;
                                }
                                $mailBoxType = $ieX->mailbox_type;
                                $ieX->handleAutoresponse($email, $contactAddr);
                            } // else
                        } // else
                        $GLOBALS['log']->debug('***** On message [ ' . $current . ' of ' . $total . ' ] *****');
                        $current++;
                    } // foreach
                    // update Inbound Account with last robin

                } // if
                if ($isGroupFolderExists) {
                    $leaveMessagesOnMailServer = $ieX->get_stored_options("leaveMessagesOnMailServer", 0);
                    if (!$leaveMessagesOnMailServer) {
                        if ($ieX->isPop3Protocol()) {
                            $ieX->deleteMessageOnMailServerForPop3(implode(",", $messagesToDelete));
                        } else {
                            $ieX->deleteMessageOnMailServer(implode($app_strings['LBL_EMAIL_DELIMITER'],
                                $messagesToDelete));
                        }
                    }
                }
            } else {
                $GLOBALS['log']->fatal("SCHEDULERS: could not get an IMAP connection resource for ID [ {$a['id']} ]. Skipping mailbox [ {$a['name']} ].");
                // cn: bug 9171 - continue while
            } // else
        } // foreach
        imap_expunge($ieX->conn);
        imap_close($ieX->conn, CL_EXPUNGE);
    } // while
    return true;
}

/**
 * Scheduled job function to index any unindexed beans.
 *
 * @return bool
 */
function aodIndexUnindexed()
{
    $total = 1;
    $sanityCount = 0;
    while ($total > 0) {
        $total = performLuceneIndexing();
        $sanityCount++;
        if ($sanityCount > 100) {
            return true;
        }
    }
    return true;
}

function aodOptimiseIndex()
{
    $index = BeanFactory::getBean("AOD_Index")->getIndex();
    $index->optimise();
    return true;
}


function performLuceneIndexing()
{
    global $db, $sugar_config;
    if (empty($sugar_config['aod']['enable_aod'])) {
        return;
    }
    $index = BeanFactory::getBean("AOD_Index")->getIndex();

    $beanList = $index->getIndexableModules();
    $total = 0;
    foreach ($beanList as $beanModule => $beanName) {
        $bean = BeanFactory::getBean($beanModule);
        if (!$bean || !method_exists($bean, "getTableName") || !$bean->getTableName()) {
            continue;
        }
        $query = "SELECT b.id FROM " . $bean->getTableName() . " b LEFT JOIN aod_indexevent ie ON (ie.record_id = b.id AND ie.record_module = '" . $beanModule . "') WHERE b.deleted = 0 AND (ie.id IS NULL OR ie.date_modified < b.date_modified) ORDER BY b.date_modified ASC";
        $res = $db->limitQuery($query, 0, 500);
        $c = 0;
        while ($row = $db->fetchByAssoc($res)) {
            $suc = $index->index($beanModule, $row['id']);
            if ($suc) {
                $c++;
                $total++;
            }
        }
        if ($c) {
            $index->commit();
            $index->optimise();
        }

    }
    $index->optimise();
    return $total;
}

function aorRunScheduledReports()
{
    require_once 'include/SugarQueue/SugarJobQueue.php';
    $date = new DateTime();//Ensure we check all schedules at the same instant
    foreach (BeanFactory::getBean('AOR_Scheduled_Reports')->get_full_list() as $scheduledReport) {

        if ($scheduledReport->status == 'active' && $scheduledReport->shouldRun($date)) {
            if (empty($scheduledReport->aor_report_id)) {
                continue;
            }
            $job = new SchedulersJob();
            $job->name = "Scheduled report - {$scheduledReport->name} on {$date->format('c')}";
            $job->data = $scheduledReport->id;
            $job->target = "class::AORScheduledReportJob";
            $job->assigned_user_id = 1;
            $jq = new SugarJobQueue();
            $jq->submitJob($job);
        }
    }
    return true;
}

function processAOW_Workflow()
{
    require_once('modules/AOW_WorkFlow/AOW_WorkFlow.php');
    $workflow = new AOW_WorkFlow();
    return $workflow->run_flows();
}

function calcularEdadProspecto()
{
    $sql = "UPDATE leads_cstm INNER JOIN leads ON leads.id = leads_cstm.id_c SET edad_c = TIMESTAMPDIFF(YEAR,birthdate,CURDATE())";
    $db = DBManagerFactory::getInstance();
    $res = $db->query($sql);

    return true;
}

function calcularAnosSinEstudiar()
{
    $sql = "UPDATE leads_cstm
              INNER JOIN leads ON leads.id = leads_cstm.id_c
              INNER JOIN (
                            SELECT MIN(TIMESTAMPDIFF(YEAR,fecha_fin,CURDATE())) AS anos  , veta_informacionacademica_leads_c.veta_informacionacademica_leadsleads_ida AS pid FROM veta_informacionacademica
                              INNER JOIN veta_informacionacademica_leads_c ON veta_informacionacademica_leads_c.veta_informacionacademica_leadsveta_informacionacademica_idb = veta_informacionacademica.id AND veta_informacionacademica_leads_c.deleted = 0
                            WHERE veta_informacionacademica.deleted = 0
                            GROUP BY pid
              )  AS q ON q.pid = leads.id
              SET anos_sin_estudiar_c = q.anos";

    $db = DBManagerFactory::getInstance();
    $res = $db->query($sql);

    $sql = "UPDATE contacts_cstm
              INNER JOIN contacts ON contacts.id = contacts_cstm.id_c
              INNER JOIN (
                            SELECT MIN(TIMESTAMPDIFF(YEAR,fecha_fin,CURDATE())) AS anos, veta_informacionacademica_contacts_c.veta_informacionacademica_contactscontacts_ida AS cid FROM veta_informacionacademica
                              INNER JOIN veta_informacionacademica_contacts_c ON veta_informacionacademica_contacts_c.veta_informacionacademica_contactsveta_informacionacademica_idb = veta_informacionacademica.id AND veta_informacionacademica_contacts_c.deleted = 0
                            WHERE veta_informacionacademica.deleted = 0
                            GROUP BY cid
             )  AS q ON q.cid = contacts.id
            SET anos_sin_estudiar_c = q.anos";

    $db = DBManagerFactory::getInstance();
    $res = $db->query($sql);

    return true;
}

function descartarProspecto()
{
    $sql = "UPDATE leads SET status = \"Descartado\" 
            WHERE id IN 
            (
              SELECT distinct parent_id FROM 
                (  
                  SELECT parent_id, COUNT(id) AS qty  FROM meetings WHERE parent_type = \"Leads\" AND deleted = 0 AND status = \"Not Held\" GROUP BY parent_id HAVING qty > 2
                ) AS t
            )";

    $db = DBManagerFactory::getInstance();
    $res = $db->query($sql);

    return true;
}

function calcularEdadEstudiante()
{
    $sql = "UPDATE contacts_cstm INNER JOIN contacts ON contacts.id = contacts_cstm.id_c SET edad_c = TIMESTAMPDIFF(YEAR,birthdate,CURDATE())";
    $db = DBManagerFactory::getInstance();
    $res = $db->query($sql);

    return true;
}

function prospecto_no_contactado()
{
    $t = new EmailTemplate();
    $t->retrieve('prospecto_no_contactado');

    $u = new User();
    $u->retrieve($t->assigned_user_id);

    $db = DBManagerFactory::getInstance();
    $query = "SELECT DISTINCT id, first_name, last_name , DATEDIFF(CURDATE(), date_entered) as dias FROM leads
                WHERE id NOT IN
                (
                SELECT DISTINCT leads.id FROM leads
                INNER JOIN meetings_leads ON meetings_leads.lead_id = leads.id AND meetings_leads.deleted = 0
                INNER JOIN meetings ON meetings.id = meetings_leads.meeting_id AND meetings.deleted = 0 AND meetings.status = 'Held'
                WHERE leads.id IS NOT NULL AND leads.last_name IS NOT NULL AND leads.deleted = 0
                )
                AND DATEDIFF(CURDATE(), date_entered) > 3";

    $res = $db->query($query);
    $list = array();

    while ($row = $db->fetchByAssoc($res)) {
        $l = new Lead();
        $l->retrieve($row['id']);
        $l->dias = $row['dias'];

        $list[$l->id] = $l;
    }

    if (count($list) > 0) {
        send_email_prospecto_no_encontrado($list, $t, $u);
    }
}

function send_email_prospecto_no_encontrado($list, $tEmail, $user)
{
    require_once('modules/Users/User.php');
    require_once('modules/EmailTemplates/EmailTemplate.php');
    require_once('modules/Administration/Administration.php');
    require_once('include/phpmailer/class.phpmailer.php');

    // Enviamos el email
    $admin = new Administration();
    $admin->retrieveSettings();
    $mail = new PHPMailer();  // Instantiate your new class

    if ($admin->settings['mail_sendtype'] == "SMTP") {
        $mail->IsSMTP();    // set mailer to use SMTP

        $mail->Host = $admin->settings['mail_smtpserver'];
        $mail->Port = $admin->settings['mail_smtpport'];

        if ($admin->settings['mail_smtpauth_req']) {
            $mail->SMTPAuth = true;
            $mail->Username = $admin->settings['mail_smtpuser'];
            $mail->Password = $admin->settings['mail_smtppass'];
        }


        $mail->Mailer = "smtp";
        $mail->SMTPKeepAlive = true;
        $mail->From = $admin->settings['notify_fromaddress'];
        $mail->FromName = $admin->settings['notify_fromname'];
        //$mail->ContentType = "text/plain"; //"text/html"
        $mail->ContentType = "text/html";


        $mail->Subject = $tEmail->subject;

        $mail->Body = $tEmail->body_html;

        $msg = '<ul>';


        foreach ($list as $l) {
            $msg .= '<li>';
            $msg .= "<strong>$l->name</strong>, 	<strong>dias sin contactar:</strong> $l->dias";
            $msg .= '</li>';

        }

        $msg .= '</ul>';

        $msg = str_replace("$" . "prospectos", $msg, $tEmail->body_html);

        $msg = html_entity_decode($msg);

        $nbsp = html_entity_decode("&nbsp;");
        $msg = str_replace($nbsp, " ", $msg);

        //$msg = str_replace("<p> </p>" , "<br>" , $msg);
        //$msg = str_replace(" " , "&nbsp;" , $msg);

        $mail->isHTML(true);
        $mail->Body = $msg;

        if ($admin->settings['mail_smtpssl'] == 1) {
            $mail->SMTPSecure = "ssl";
        } //  Used instead of TLS when only POP mail is selected

        if ($admin->settings['mail_smtpssl'] == 2) {
            $mail->SMTPSecure = "tls";
        } //  Used instead of TLS when only POP mail is selected

        $mail->Port = $admin->settings['mail_smtpport']; // Used instead of 587 when only POP mail is selected
        $mail->AddAddress($user->email1);
    } else {
        $mail->mailer = "sendmail";
    }

    $aux = $mail->Send();
    return true;
}

function alerta_loo()
{
    require_once('modules/Veta_Loo/Veta_Loo.php');

    $t = new EmailTemplate();
    $t->retrieve('alerta_loo');

    $u = new User();
    $u->retrieve($t->assigned_user_id);

    $db = DBManagerFactory::getInstance();
    $query = "SELECT id, name, TIMESTAMPDIFF(HOUR, veta_loo.date_entered,CURDATE()) AS horas, fecha_recepcion FROM veta_loo
WHERE veta_loo.fecha_recepcion IS NULL or veta_loo.fecha_recepcion = '' AND deleted = 0 AND TIMESTAMPDIFF(HOUR, veta_loo.date_entered,CURDATE()) > 56";

    $res = $db->query($query);
    $list = array();

    while ($row = $db->fetchByAssoc($res)) {
        $l = new Veta_Loo();
        $l->retrieve($row['id']);
        $l->horas = $row['horas'];

        $list[$l->id] = $l;
    }

    if (count($list) > 0) {
        send_email_alerta_loo($list, $t, $u);
    }
}

function send_email_alerta_loo($list, $tEmail, $user)
{
    require_once('modules/Users/User.php');
    require_once('modules/EmailTemplates/EmailTemplate.php');
    require_once('modules/Administration/Administration.php');
    require_once('include/phpmailer/class.phpmailer.php');
    require_once('modules/Veta_Loo/Veta_Loo.php');
    require_once('modules/Veta_Aplicacion/Veta_Aplicacion.php');

    // Enviamos el email
    $admin = new Administration();
    $admin->retrieveSettings();
    $mail = new PHPMailer();  // Instantiate your new class

    if ($admin->settings['mail_sendtype'] == "SMTP") {
        $mail->IsSMTP();    // set mailer to use SMTP

        $mail->Host = $admin->settings['mail_smtpserver'];
        $mail->Port = $admin->settings['mail_smtpport'];

        if ($admin->settings['mail_smtpauth_req']) {
            $mail->SMTPAuth = true;
            $mail->Username = $admin->settings['mail_smtpuser'];
            $mail->Password = $admin->settings['mail_smtppass'];
        }


        $mail->Mailer = "smtp";
        $mail->SMTPKeepAlive = true;
        $mail->From = $admin->settings['notify_fromaddress'];
        $mail->FromName = $admin->settings['notify_fromname'];
        //$mail->ContentType = "text/plain"; //"text/html"
        $mail->ContentType = "text/html";


        $mail->Subject = $tEmail->subject;

        $mail->Body = $tEmail->body_html;

        $msg = '<ul>';


        foreach ($list as $l) {
            $a = new Veta_Aplicacion();
            $aplicaciones = $l->get_linked_beans('veta_loo_veta_aplicacion', 'Veta_Aplicacion');

            foreach ($aplicaciones as $aplicacion) {
                $a = $aplicacion;
            }

            $msg .= '<li>';
            $msg .= "<strong>$l->name</strong>, 	<strong>horas sin respuesta:</strong> $l->horas <strong>Aplicacion</strong> " . $a->name;
            $msg .= '</li>';

        }

        $msg .= '</ul>';

        $msg = str_replace("$" . "loos", $msg, $tEmail->body_html);

        $msg = html_entity_decode($msg);

        $nbsp = html_entity_decode("&nbsp;");
        $msg = str_replace($nbsp, " ", $msg);

        //$msg = str_replace("<p> </p>" , "<br>" , $msg);
        //$msg = str_replace(" " , "&nbsp;" , $msg);

        $mail->isHTML(true);
        $mail->Body = $msg;

        if ($admin->settings['mail_smtpssl'] == 1) {
            $mail->SMTPSecure = "ssl";
        } //  Used instead of TLS when only POP mail is selected

        if ($admin->settings['mail_smtpssl'] == 2) {
            $mail->SMTPSecure = "tls";
        } //  Used instead of TLS when only POP mail is selected

        $mail->Port = $admin->settings['mail_smtpport']; // Used instead of 587 when only POP mail is selected
        $mail->AddAddress($user->email1);
    } else {
        $mail->mailer = "sendmail";
    }

    $aux = $mail->Send();
    return true;
}

function calcularEdadConyuge()
{
    $sql = "UPDATE contacts_cstm INNER JOIN contacts ON contacts.id = contacts_cstm.id_c SET edad_conyuge_c = TIMESTAMPDIFF(YEAR,nacimiento_conyuge_c,CURDATE())";
    $db = DBManagerFactory::getInstance();
    $res = $db->query($sql);

    $sql = "UPDATE leads_cstm INNER JOIN leads ON leads.id = leads_cstm.id_c SET edad_conyuge_c = TIMESTAMPDIFF(YEAR,nacimiento_conyuge_c,CURDATE())";
    $db = DBManagerFactory::getInstance();
    $res = $db->query($sql);

    return true;
}

function calcularEdadHijos()
{
    $sql = "UPDATE veta_hijo SET edad = TIMESTAMPDIFF(YEAR,fecha_nacimiento,CURDATE())";
    $db = DBManagerFactory::getInstance();
    $res = $db->query($sql);

    return true;
}

function establecer_perdida()
{
    $q = "UPDATE opportunities SET sales_stage = 'Perdido' WHERE sales_stage NOT IN ('Perdido', 'Entrega_Australia') AND DATEDIFF(CURDATE(), date_modified) > 60";
    $db = DBManagerFactory::getInstance();
    $res = $db->query($q);

    return true;
}

function actualizar_estado_cursos()
{

    $q = "UPDATE veta_curso SET activo = 0 WHERE fecha_expiracion < now()";
    $db = DBManagerFactory::getInstance();
    $res = $db->query($q);

    return true;

}

function actualizar_estado_requerimientos()
{
    require_once('modules/Veta_Requerimiento/Veta_Requerimiento.php');
    $requerimiento = new Veta_Requerimiento();
    $requerimientos_vencidos = $requerimiento->getRequerimientosFechaExpiracionVencida(4);

    foreach ($requerimientos_vencidos as $req) {
        $req->estado = 'Potencial';
        $req->description = 'Estado cambiado por el planificador debido a que la fecha de expiracion de la visa del prospecto o estudiante es menor a 4 meses';
        $req->save();
    }

    $requerimientos_vencidos = $requerimiento->getRequerimientosFechaViajeVencida(4);

    foreach ($requerimientos_vencidos as $req) {
        $req->estado = 'Potencial';
        $req->description = 'Estado cambiado por el planificador debido a que la fecha de viaje de la visa del prospecto o estudiante es menor a 4 meses';
        $req->save();
    }

    return true;
}

function recalcular_consecutivos()
{
    $consecutivo = 1;
    $db = DBManagerFactory::getInstance();
    $query = "SELECT id  FROM opportunities ORDER BY date_entered ASC";

    $res = $db->query($query);

    while ($row = $db->fetchByAssoc($res)) {
        $q = "UPDATE opportunities SET name = '" . $consecutivo . "' WHERE id = '" . $row['id'] . "'";
        $db->query($q);
        $consecutivo++;
    }


    return true;
}

class AORScheduledReportJob implements RunnableSchedulerJob
{
    public function setJob(SchedulersJob $job)
    {
        $this->job = $job;
    }

    public function run($data)
    {
        global $timedate;

        $bean = BeanFactory::getBean('AOR_Scheduled_Reports', $data);
        $report = $bean->get_linked_beans('aor_report', 'AOR_Reports');
        if ($report) {
            $report = $report[0];
        } else {
            return false;
        }
        $html = "<h1>{$report->name}</h1>" . $report->build_group_report();
        $html .= <<<EOF
        <style>
        h1{
            color: black;
        }
        .list
        {
            font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;font-size: 12px;
            background: #fff;margin: 45px;width: 480px;border-collapse: collapse;text-align: left;
        }
        .list th
        {
            font-size: 14px;
            font-weight: normal;
            color: black;
            padding: 10px 8px;
            border-bottom: 2px solid black};
        }
        .list td
        {
            padding: 9px 8px 0px 8px;
        }
        </style>
EOF;
        $emailObj = new Email();
        $defaults = $emailObj->getSystemDefaultEmail();
        $mail = new SugarPHPMailer();

        $mail->setMailerForSystem();
        $mail->IsHTML(true);
        $mail->From = $defaults['email'];
        $mail->FromName = $defaults['name'];
        $mail->Subject = from_html($bean->name);
        $mail->Body = $html;
        $mail->prepForOutbound();
        $success = true;
        $emails = $bean->get_email_recipients();
        foreach ($emails as $email_address) {
            $mail->ClearAddresses();
            $mail->AddAddress($email_address);
            $success = $mail->Send() && $success;
        }
        $bean->last_run = $timedate->getNow()->asDb(false);
        $bean->save();
        return true;
    }
}

if (file_exists('custom/modules/Schedulers/_AddJobsHere.php')) {
    require('custom/modules/Schedulers/_AddJobsHere.php');
}

if (file_exists('custom/modules/Schedulers/Ext/ScheduledTasks/scheduledtasks.ext.php')) {
    require('custom/modules/Schedulers/Ext/ScheduledTasks/scheduledtasks.ext.php');
}
?>
