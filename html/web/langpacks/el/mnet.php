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
 * Strings for component 'mnet', language 'el', branch 'MOODLE_31_STABLE'
 *
 * @package   mnet
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aboutyourhost'] = 'Σχετικά με τον εξυπηρετητή σας';
$string['accesslevel'] = 'Επίπεδο Πρόσβασης';
$string['addhost'] = 'Προσθήκη κεντρικού υπολογιστή';
$string['addnewhost'] = 'Προσθήκη ενός νέου κεντρικού υπολογιστή';
$string['addtoacl'] = 'Προσθήκη στον Έλεγχο Πρόσβασης';
$string['allow'] = 'Επιτρέπεται';
$string['authfail_nosessionexists'] = 'Η εξουσιοδότηση απέτυχε: η σύνοδος mnet δεν υπάρχει.';
$string['authfail_sessiontimedout'] = 'Η εξουσιοδότηση απέτυχε: η σύνοδος mnet έληξε.';
$string['authfail_usermismatch'] = 'Η εξουσιοδότηση απέτυχε: ο χρήστης δεν αντιστοιχεί κάπου.';
$string['authmnetdisabled'] = 'Η <em>υπομονάδα λογισμικού Πιστοποίησης</em> της Δικτύωσης Moodle είναι <strong>απενεργοποιημένη</strong>.';
$string['badcert'] = 'Αυτό δεν είναι ένα έγκυρο πιστοποιητικό.';
$string['certdetails'] = 'Λεπτομέρειες Πιστοποιητικού';
$string['configmnet'] = 'Η Δικτύωση Moodle επιτρέπει την επικοινωνία αυτού του εξυπηρετητή μέ άλλους εξυπηρετητές ή υπηρεσίες.';
$string['couldnotgetcert'] = 'Δεν βρέθηκε πιστοποιητικό στο <br />{$a}. <br />Ο κεντρικός υπολογιστής μπορεί να είναι εκτός λειτουργίας ή λανθασμένα ρυθμισμένος.';
$string['couldnotmatchcert'] = 'Αυτό δεν ταιριάζει το πιστοποιητικό που έχει δημοσιευθεί αυτή τη στιγμή από τον εξυπηρετητή ιστού.';
$string['courses'] = 'μαθήματα';
$string['courseson'] = 'μαθήματα σε';
$string['currentkey'] = 'Τρέχων Δημόσιο Κλειδί';
$string['current_transport'] = 'Τρέχουσα μεταφορά';
$string['databaseerror'] = 'Αποτυχία εγγραφή των λεπτομερειών στη βάση δεδομένων.';
$string['deleteaserver'] = 'Διαγραφή ενός εξυπηρετητή';
$string['deletehost'] = 'Διαγραφή κεντρικού υπολογιστή';
$string['deletekeycheck'] = 'Είστε απόλυτα σίγουρος οτι θέλετε να διαγράψετε αυτό το κλειδί?';
$string['deleteoutoftime'] = 'Το χρονικό παράθυρο 60 δευτερολέπτων που είχατε για να διαγράψετε αυτό το κλειδί έληξε. Παρακαλούμε ξεκινήστε ξανά.';
$string['deleteuserrecord'] = 'SSO ACL: διαγραφή εγγραφής για χρήστη \'{$a}[0]\' από {$a}[1].';
$string['deletewrongkeyvalue'] = 'Συνέβη ένα σφάλμα. Εάν δεν προσπαθείτε να διαγράψετε το κλειδί SSL του εξυπηρετητή σας, είναι πιθανό ότι έχετε πέσει θύμα μιας κακόβουλης επίθεσης. Δεν λήφθηκε καμία ενέργεια.';
$string['deny'] = 'Άρνηση';
$string['description'] = 'Περιγραφή';
$string['duplicate_usernames'] = 'Αποτυχία δημιουργίας δείκτη στις στήλες "mnethostid" και "username" στον πίνακα χρηστών σας.<br />Αυτό μπορεί να συμβεί όταν έχετε <a href="{$a}" target="_blank">διπλότυπα ονόματα χρήστη στον πίνακα χρηστών σας</a>.<br />Η αναβάθμιση σας θα πρέπει παρόλα αυτά να ολοκληρωθεί με επιτυχία. Κάντε κλικ στον παραπάνω σύνδεσμο, και θα εμφανιστούν σε νέο παράθυρο οδηγίες σχετικά με την διόρθωση αυτού του προβλήματος. Μπορείτε να το φροντίσετε στο τέλος της διαδικασίας αναβάθμισης.<br />';
$string['enabled_for_all'] = '(Αυτή η υπηρεσία έχει ενεργοποιηθεί για όλους τους κεντρικούς υπολογιστές).';
$string['enterausername'] = 'Παρακαλούμε εισάγετε ένα όνομα χρήστη, ή μια λίστα από ονόματα χρηστών χωρισμένα με κόμμα.';
$string['error7020'] = 'Αυτό το σφάλμα συμβάινει συνήθως εάν ο απομακρυσμένος ιστοχώρος έχει δημιουργήσει μια εγγραφή για εσάς με το λάθος wwwroot, για παράδειγμα, http://yoursite.com αντί για http://www.yoursite.com. Θα πρέπει να επικοινωνήσετε με τον διαχειριστή του απομακρυσμένου ιστοχώρου και να του δώσετε το σωστό wwwroot (όπως ορίζεται στο αρχείο config.php) ζητώντας του να ανανεώσει την εγγραφή για τον κεντρικό υπολογιστή σας.';
$string['error7022'] = 'Το μήνυμα που στείλατε στον απομακρυσμένο ιστοχώρο κρυπτογραφήθηκε σωστά αλλά δεν υπογράφτηκε. Αυτό είναι τελείως αναπάντεχο; θα πρέπει πιθανώς να υποβάλλετε μια αναφορά σφάλματος εάν συμβεί αυτό (παρέχοντας όσο γίνεται περισσότερες πληροφορίες σχετικά με την έκδοση του Moodle, κλπ).';
$string['error7023'] = 'Ο απομακρυσμένος ιστοχώρος προσπάθησε να αποκρυπτογραφήσει το μήνυμά σας με όλα τα κλειδιά που έχει στην εγγραφή για τον ιστοχώρο σας. Όλα απέτυχαν. Πιθανώς να μπορείτε να διορθώσετε αυτό το πρόβλημα αντάλλασοντας χειροκίνητα κλειδιά με τον απομακρυσμένο ιστοχώρο. Αυτό είναι δύσκολο να συμβεί εκτός και δεν είχατε επικοινωνία με τον απομακρυσμένο ιστοχώρο για αρκετούς μήνες.';
$string['error7024'] = 'Μπορείτε να στείλετε ένα μη κρυπτογραφημένο μήνυμα στον απομακρυσμένο ιστοχώρο, αλλά ο απομακρυσμένος ιστοχώρος δεν δέχεται μη κρυπτογραφημένη επικοινωνία από τον ιστοχώρο σας. Αυτό είναι τελείως αναπάντεχο; θα πρέπει πιθανώς να υποβάλλετε μια αναφορά σφάλματος εάν συμβεί αυτό (παρέχοντας όσο γίνεται περισσότερες πληροφορίες σχετικά με την έκδοση του Moodle, κλπ).';
$string['error7026'] = 'Το κλειδί με το οποίο υπογράφτηκε το μήνυμα σας διαφέρει από το κλειδί το οποίο έχει ο απομακρυσμένος κεντρικός υπολογιστής έχει σε αρχείο για τον εξυπηρετητή σας. Επιπλέον, ο απομακρυσμένος κεντρικός υπομολογιστής προσπάθησε να πάρει το τρέχον κλειδί σας και απέτυχε. Παρακαλούμε ανταλλάξτε χειροκίνητα κλειδιά με τον απομακρυσμένο κεντρικό υπολογιστή και δοκιμάστε ξανά.';
$string['error709'] = 'Ο απομακρυσμένος ιστοχώρος απέτυχε να λάβει ένα κλειδί SSL από εσάς.';
$string['expired'] = 'Αυτό το κλειδί έληξε στις';
$string['expires'] = 'Έγκυρο μέχρι';
$string['expireyourkey'] = 'Διαγραφή αυτού του κλειδιού';
$string['expireyourkeyexplain'] = 'Το Moodle αυτόματα περιστρέφει τα κλειδιά σας κάθε 28 ημέρες (εξ\' ορισμού) αλλά έχετε την επιλογή να λήξετε αυτό κλειδί <em>χειροκίνητα</em> οποιαδήποτε στιγμή. Αυτό θα είναι χρήσιμο μόνο εάν πιστεύετε οτι αυτό το κλειδί έχει παραβιαστεί. Ένα κλειδί αντικατάστασης θα σημιουργηθεί αυτόματα.<br />Διαγράφοντας αυτό το κλειδί θα είναι αδύνατο να επικοινωνήσουν με εσάς άλλα Moodles, μέχρι να επικοινωνήσετε μόνοι σας μέ κάθε διαχειριστή παρέχοντας του το νέο σας κλειδί.';
$string['failedaclwrite'] = 'Αποτυχία εγγραφής στην λίστα ελέγχου πρόσβασης MNET για τον χρήστη \'{$a}\'.';
$string['forbidden-function'] = 'Η συνάρτηση δεν έχει ενεργοποιηθεί για το RPC.';
$string['forbidden-transport'] = 'Η μέθοδος μεταφοράς που προσπαθείτε να χρησιμοποιήσετε δεν επιτρέπεται.';
$string['forcesavechanges'] = 'Υποχρεωτικά Αποθήκευση Αλλαγών';
$string['helpnetworksettings'] = 'Ρύθμιση της εσωτερικής για το Moodle επικοινωνίας';
$string['hidelocal'] = 'Απόκρυψη τοπικών χρηστών';
$string['hideremote'] = 'Απόκρυψη απομακρυσμένων χρηστών';
$string['host'] = 'κεντρικός υπολογιστής';
$string['hostcoursenotfound'] = 'Ο κεντρικός υπολογιστής ή το μάθημα δεν βρέθηκε';
$string['hostdeleted'] = 'Εντάξει - ο κεντρικός υπολογιστής διαγράφηκε';
$string['hostexists'] = 'Υπάρχει ήδη μια εγγραφή για αυτόν τον κεντρικό υπολογιστή και εγκατάσταση Moodle με αναγνωριστικό {$a}.<br />Κάντε κλικ στο <em>Συνέχεια</em> για να επεξεργαστείτε αυτή την εγγραφή.';
$string['hostname'] = 'Όνομα κεντρικού υπολογιστή';
$string['hostnamehelp'] = 'Το πλήρως-αρμόδιο όνομα τομέα του απομακρυσμένου κεντρικού υπολογιστή, π.χ. www.example.com';
$string['hostnotconfiguredforsso'] = 'Αυτό το απομακρυσμένο κομβικό σημείο Moodle δεν είναι ρυθμισμένο για απομακρυσμένη είσοδο.';
$string['hostsettings'] = 'Ρυθμίσεις κεντρικού υπολογιστή';
$string['http_self_signed_help'] = 'Επέτρεψε τις συνδέσεις με χρήση ενός αυτό-υπογεγραμμένου πιστοποιητικού DIY SSL στον απομακρυσμένο κεντρικό υπολογιστή.';
$string['https_self_signed_help'] = 'Επέτρεψε τις συνδέσεις με χρήση ενός αυτό-υπογεγραμμένου πιστοποιητικού DIY SSL στην PHP στον απομακρυσμένο κεντρικό υπολογιστή πάνω από http.';
$string['https_verified_help'] = 'Επέτρεψε τις συνδέσεις με χρήση ενός επιβεβαιωμένου πιστοποιητικού SSL στον απομακρυσμένο κεντρικό υπολογιστή.';
$string['http_verified_help'] = 'Επέτρεψε τις συνδέσεις με χρήση ενός επιβεβαιωμένου πιστοποιητικού SSL στην PHP στον απομακρυσμένο κεντρικό υπολογιστή, αλλά πάνω από http (όχι https).';
$string['id'] = 'Αναγνωριστικό';
$string['idhelp'] = 'Αυτή η τιμή έχει ανατεθεί αυτόματα και δεν μπορεί να αλλάξει';
$string['importfields'] = 'Πεδία για εισαγωγή';
$string['invalidaccessparam'] = 'Μη έγκυρες παράμετροι πρόσβασης.';
$string['invalidactionparam'] = 'Μη έγκυρη παράμετρος ενέργειας.';
$string['invalidhost'] = 'Πρέπει να παρέχετε ένα έγκυρο αναγνωριστικό κεντρικού υπολογιστή';
$string['invalidpubkey'] = 'Το κλειδί δεν είναι ένα έγκυρο κλειδί SSL. ({$a})';
$string['invalidurl'] = 'Μη έγκυρες παράμετροι URL.';
$string['ipaddress'] = 'Διεύθυνση IP';
$string['is_in_range'] = 'Η διεύθυνση IP &nbsp;<code>{$a}</code>&nbsp; αναπαριστά έναν έγκυρο έμπιστο κεντρικό υπολογιστή.';
$string['ispublished'] = 'Το Moodle {$a} έχει ενεργοποιήσει αυτή την υπηρεσία για εσάς.';
$string['issubscribed'] = 'Το Moodle {$a} εγγράφεται σε αυτή την υπηρεσία στον κεντρικό υπολογιστή σας.';
$string['keydeleted'] = 'Το κλειδί σας έχει διαγραφεί και αντικατασταθεί με επιτυχία.';
$string['keymismatch'] = 'Το δημόσιο κλειδί που έχετε για αυτό τον κεντρικό υπολογιστή είναι διαφορετικό από το δημόσιο κλειδί που δημοσιεύει αυτή την στιγμή.';
$string['last_connect_time'] = 'Τελευταία φορά σύνδεσης';
$string['last_connect_time_help'] = 'Η τελευταία φορά που συνδεθήκατε σε αυτό τον κεντρικό υπολογιστή.';
$string['last_transport_help'] = 'Η μεταφορά που χρησιμοποιήσατε στην τελευταία σύνδεση σε αυτό τον κεντρικό υπολογιστή.';
$string['loginlinkmnetuser'] = '<br />Εάν είστε έναν απομακρυσμένος χρήστης του Δίκτυου Moodle και μπορείτε να <a href="{$a}">επιβεβαιώσετε την διεύθυνση ηλεκτρονικού ταχυδρόμειου σας εδώ</a>, τότε μπορείτε να ανακατευθυνθείτε στη σελίδα εισόδου σας.<br />';
$string['logs'] = 'καταγραφές';
$string['mnet'] = 'Δικτύωση Moodle';
$string['mnet_concatenate_strings'] = 'Ένωση (μέχρι) 3 αλφαριθμητικών και επιστροφή του αποτελέσματος';
$string['mnetdisabled'] = 'Το Δίκτυο Moodle είναι <strong>απενεργοποιημένο</strong>.';
$string['mnetpeers'] = 'Ομότιμοι';
$string['mnetservices'] = 'Υπηρεσίες';
$string['mnet_session_prohibited'] = 'Οι χρήστες από τον κεντρικό εξυπηρετητή σας δεν επιτρέπεται προς το παρόν να περιηγούνται στο {$a}.';
$string['mnetsettings'] = 'Ρυθμίσεις Δίκτυου Moodle';
$string['moodle_home_help'] = 'Η διαδρομή προς την αρχική σελίδα του Moodle στον απομακρυσμένο κεντρικό υπολογιστή, e.g. /moodle/.';
$string['name'] = 'Όνομα';
$string['net'] = 'Δικτύωση';
$string['networksettings'] = 'Ρυθμίσεις Δικτύου';
$string['never'] = 'Ποτέ';
$string['noaclentries'] = 'Δεν υπάρχουν καταχωρήσεις στην λίστα ελέγχου πρόσβασης SSO';
$string['nocurl'] = 'Η βιβλιοθήκη cURL της PHP δεν είναι εγκατεστημένη';
$string['nolocaluser'] = 'Δεν υπάρχει τοπική εγγραφή για τον απομακρυσμένο χρήστη.';
$string['nomodifyacl'] = 'Δεν έχετε δικαίωμα να τροποποιήσετε την λίστα ελέγχου πρόσβασης MNET.';
$string['nonmatchingcert'] = 'Το θέμα του πιστοποιητικού: <br /><em>{$a}[0]</em><br />δεν αντιστοιχεί στον κεντρικό υπολογιστή προέλευσης του:<br /><em>{$a}[1]</em>.';
$string['nopubkey'] = 'Υπήρξε ένα πρόβλημα κατά την ανάκτηση του δημόσιου κλειδιού.<br />Ίσως ο κεντρικός υπολογιστής δεν επιτρέπει την Δικτύωση Moodle ή το κλειδί δεν είναι έγκυρο.';
$string['nosite'] = 'Αποτυχία εύρεσης του μαθήματος επιπέδου ιστοχώρου';
$string['nosuchfile'] = 'Το αρχείο/συνάρτηση {$a} δεν υπάρχει.';
$string['nosuchfunction'] = 'Αδυναμία εντοπισμού συνάρτησης, ή η συνάρτηση απαγορεύεται για RPC.';
$string['nosuchmodule'] = 'Η συνάρτηση κλήθηκε λανθασμένα και δεν μπορεί να εντοπιστεί. Παρακαλούμε χρησιμοποιείστε
τη μορφή mod/modulename/lib/functionname.';
$string['nosuchpublickey'] = 'Αδυναμία απόκτησης του δημόσιου κλειδιού για επιβεβαίωση υπογραφής.';
$string['nosuchservice'] = 'Η υπηρεσία RPC δεν τρέχει σε αυτόν τον κεντρικό υπολογιστή.';
$string['nosuchtransport'] = 'Δεν υπάρχει μεταφορά με αυτο το αναγνωριστικό.';
$string['notBASE64'] = 'Το αλφαριθμητικό δεν είναι στην μορφή κωδικοποίησης Base64. Δεν μπορεί να είναι ένα έγκυρο κλειδί.';
$string['not_in_range'] = 'Η διεύθυνση IP &nbsp;<code>{$a}</code>&nbsp; δεν αναπαριστά έναν έγκυρο έμπιστο κεντρικό υπολογιστή.';
$string['notPEM'] = 'Αυτό το κλειδί δεν είναι σε μορφή PEM. Δεν θα δουλέψει.';
$string['notpermittedtojump'] = 'Δεν έχετε δικαίωμα να εκκινήσετε μια απομακρυσμένη σύνοδο από αυτό το κομβικό σημείο Moodle.';
$string['notpermittedtoland'] = 'Δεν έχετε δικαίωμα να εκκινήσετε μια απομακρυσμένη σύνοδο.';
$string['off'] = 'Σβηστό';
$string['on'] = 'Ανοιχτό';
$string['options'] = 'Επιλογές';
$string['permittedtransports'] = 'Επιτρεπόμενες μεταφορές';
$string['phperror'] = 'Ένα εσωτερικό σφάλμα PHP εμπόδισε την ολοκλήρωση της αίτησης σας.';
$string['postrequired'] = 'Η συνάρτηση διαγραφής απαιτεί μια αίτηση POST.';
$string['profileexportfields'] = 'Πεδία για αποστολή';
$string['profilefielddesc'] = 'Εδώ μπορείτε να ρυθμίσετε τη λίστα με τα πεδία προφίλ που στέλνονται και λαμβάνονται μέσω MNet όταν οι λογαριασμοί χρηστών δημιουργούνται ή ενημερώνονται. Μπορείτε επίσης να παρακάμψετε αυτό για κάθε MΝet peer ξεχωριστά. Σημειώστε ότι τα ακόλουθα πεδία στέλνονται πάντα και δεν είναι προαιρετικά: {$a}';
$string['profilefields'] = 'Πεδία προφίλ';
$string['profileimportfields'] = 'Πεδία για εισαγωγή';
$string['promiscuous'] = 'Ασύδοτα';
$string['publickey'] = 'Δημόσιο Κλειδί';
$string['publickey_help'] = 'Το δημόσιο κλειδί που αποκτήθηκε αυτόματα από τον απομακρυσμένο εξυπηρετητή.';
$string['publish'] = 'Δημοσίευση';
$string['reallydeleteserver'] = 'Είστε σίγουροι οτι θέλετε να διαγράψετε τον εξυπηρετητή';
$string['receivedwarnings'] = 'Λήφθησαν οι παρακάτω προειδοποιήσεις';
$string['recordnoexists'] = 'Η εγγραφή δεν υπάρχει.';
$string['reenableserver'] = 'Όχι - επιλέξτε αυτή την επιλογή για να επανενεργοποιήσετε αυτό τον εξυπηρετητή.';
$string['registerallhosts'] = 'Καταγραφή όλων των κεντρικών υπολογιστών (<em>Λειτουργία κομβικού σημείου</em>)';
$string['registerallhostsexplain'] = 'Μπορείτε να επιλέξετε να καταγράψετε όλους τους κεντρικούς υπολογιστές που προσπαθούν να συνδεθούν σε εσάς αυτόματα.
                                           Αυτό σημαίνει οτι μια εγγραφή θα φαίνεται στην λίστα σας με τους κεντρικούς υπολογιστές για κάθε ιστοχώρο Moodle που συνδέεται σε σας και ζητάει το δημόσιο κλειδί σας.<br />Έχετε την επιλογή παρακάτω να ρυθμίσετε υπηρεσίες για \'Όλοι οι κεντρικοί υπολογιστές\' και ενεργοποιώντας κάποιες υπηρεσίες εκεί, έχετε την δυνατότητα να παρέχετε υπηρεσίες σε οποιονδήποτε εξυπηρετή Moodle αδιάκριτα.';
$string['remotecourses'] = 'Απομακρυσμένα Μαθήματα';
$string['remotehost'] = 'Απομακρυσμένο κομβικό σημείο';
$string['remotehosts'] = 'Απομακρυσμένοι κεντρικοί υπολογιστές';
$string['requiresopenssl'] = 'Η Δικτύωση απαιτεί την επέκταση OpenSSL';
$string['restore'] = 'Αποκατάσταση';
$string['reviewhostdetails'] = 'Επισκόπηση λεπτομερειών κεντρικού υπολογιστή';
$string['reviewhostservices'] = 'Επισκόπηση υπηρεσιών κεντρικού υπολογιστή';
$string['RPC_HTTP_PLAINTEXT'] = 'HTTP χωρίς κρυπτογράφηση';
$string['RPC_HTTP_SELF_SIGNED'] = 'HTTP (αυτό-υπογεγραμμένο)';
$string['RPC_HTTPS_SELF_SIGNED'] = 'HTTPS (αυτό-υπογεγραμμένο)';
$string['RPC_HTTPS_VERIFIED'] = 'HTTPS (υπογεγραμμένο)';
$string['RPC_HTTP_VERIFIED'] = 'HTTP (υπογεγραμμένο)';
$string['selectaccesslevel'] = 'Παρακαλούμε επιλέξτε ένα επίπεδο πρόσβασης από τη λίστα.';
$string['selectahost'] = 'Παρακαλούμε επιλέξτε έναν απομακρυσμένο κεντρικό υπολογιστή Moodle.';
$string['serviceswepublish'] = 'Υπηρεσίες που δημοσιεύουμε στο {$a}.';
$string['serviceswesubscribeto'] = 'Υπηρεσίες στο {$a} στις οποίες έχουμε συνδρομή.';
$string['settings'] = 'Ρυθμίσεις';
$string['showlocal'] = 'Εμφάνιση τοπικών χρηστών';
$string['showremote'] = 'Εμφάνιση απομακρυσμένων χρηστών';
$string['ssl_acl_allow'] = 'SSO ACL: επέτρεψε τον χρήστη {$a}[0] από {$a}[1]';
$string['ssl_acl_deny'] = 'SSO ACL: άρνηση του χρήστη {$a}[0] από {$a}[1]';
$string['ssoaccesscontrol'] = 'Έλεγχος Πρόσβασης SSO';
$string['ssoacldescr'] = 'Χρησιμοποιήστε αυτή τη σελίδα για να παραχωρείτε/απαγορεύετε την πρόσβαση σε συγκεκριμένους χρήστες από απομακρυσμένους κεντρικούς υπολογιστές Δίκτυου Moodle. Αυτό είναι λειτουργικό όταν προσφέρετε υπηρεσίες SSO σε απομακρυσμένους χρήστες. Για να ελέγξετε την ικανότητα των <em>τοπικών</em> σας χρηστών να περιηγούνται σε άλλους κεντρικούς υπολογιστές Δικτύου Moodle, χρησιμοποιήστε το σύστημα ρόλων για να τους παραχωρήσετε την ικανότητα <em>mnetlogintoremote</em>.';
$string['ssoaclneeds'] = 'Για να δουλέψει αυτή η λειτουργία, πρέπει να έχετε ανοιχτή τη Δικτύωση Moodle, καθώς και ενεργοποιημένη την υπομονάδα λογισμικού πιστοποίησης Δίκτυου Moodle Network με ενεργή την αυτόματη προσθήκη χρηστών.';
$string['strict'] = 'Αυστηρά';
$string['subscribe'] = 'Εγγραφή';
$string['system'] = 'Σύστημα';
$string['testtrustedhosts'] = 'Δοκιμή μιας διεύθυνσης';
$string['testtrustedhostsexplain'] = 'Εισάγεται μια διεύθυνση IP για να δείτε εάν είναι ένας έμπιστος κεντρικός υπολογιστής.';
$string['transport_help'] = 'Αυτές οι επιλογές είναι αμοιβαίες, οπότε μπορείτε μόνο να υποχρεώσετε έναν απομακρυσμένο κεντρικό υπολογιστή να χρησιμοποιεί ένα υπογεγραμμένο πιστοποιητικό SSL εάν ό εξυπηρετητής σας επίσης έχει ένα υπογεγραμμένο πιστοποιητικό SSL.';
$string['trustedhosts'] = 'Κεντρικοί υπολογιστές XML-RPC';
$string['trustedhostsexplain'] = '<p>Ο μηχανισμός των έμπιστων κεντρικών υπολογιστών επιτρέπει σε συγκεκριμένους υπολογιστές να
                                           εκτελούν κλήσεις μέσω XML-RPC σε οποιοδήποτε τμήμα του Moodle API. Αυτό
                                           είναι διαθέσιμο σε σενάρια για να ελέγχουν την συμπεριφορά του Moodle και μπορεί να είναι
                                           μια πολύ επικίνδυνη επιλογη αν το ενεργοποιήσετε. Εάν έχετε αμφιβολίες, αφήστε το απενεργοποιημένο.</p>
                                           <p>Αυτό <strong>δεν</strong> είναι απαραίτητο για τη Δικτύωση Moodle.</p>
                                           <p>Για να το ενεργοποιήσετε, εισάγετε μια λίστα από διευθύνσεις IP ή δίκτυα,
                                           ένα σε κάθε γραμμή.
                                           Κάποια παραδείγματα:</p>Ο τοπικός σας κεντρικός υπολογιστής:<br />127.0.0.1<br />Ο τοπικός σας κεντρικός υπολογιστής (με ένα μπλοκ δικτύου):<br />127.0.0.1/32<br />Μόνο ο κεντρικός υπολογιστής με διεύθυνση IP 192.168.0.7:<br />192.168.0.7/32<br />Οποιοσδήποτε κεντρικός υπολογιστής με διεύθυνση IP μεταξύ 192.168.0.1 και 192.168.0.255:<br />192.168.0.0/24<br />Οποιοσδήποτε κεντρικός υπολογιστής:<br />192.168.0.0/0<br />Προφανώς το τελευταίο παράδειγμα <strong>δεν</strong> είναι μια προτεινόμενη διαμόρφωση.';
$string['unknownerror'] = 'Συνέβη ένα άγνωστο σφάλμα κάτα την διαπραγμάτευση.';
$string['usercannotchangepassword'] = 'Δεν μπορείτε να αλλάξετε το συνθηματικό σας εδώ καθώς είστε ένας απομακρυσμένος χρήστης.';
$string['userchangepasswordlink'] = '<br /> Μπορεί να έχετε την δυνατότητα να αλλάξετε το συνθηματικό σας στον δικό σας πάροχο <a href="{$a->wwwroot}/login/change_password.php">{$a->description}</a>.';
$string['usersareonline'] = 'Προειδοποίηση: {$a} χρήστες από αυτόν τον εξυπηρετητή είναι προς το παρόν συνδεδεμένοι στον ιστοχώρο σας.';
$string['validated_by'] = 'Είναι επικυρωμένο από το δίκτυο: &nbsp;<code>{$a}</code>';
$string['verifysignature-error'] = 'Η επιβεβαίωση της υπογραφής απέτυχε. Συνέβη ένα σφάλμα.';
$string['verifysignature-invalid'] = 'Η επιβεβαίωση της υπογραφής απέτυχε. Φαίνεται οτι αυτά τα δεδομένα δεν ήταν υπογεγραμμένα από εσάς.';
$string['version'] = 'έκδοση';
$string['warning'] = 'Προειδοποίηση';
$string['wrong-ip'] = 'Η δική σας διεύθυνση IP δεν είναι ίδια με την διεύθυνση που έχουμε καταγεγραμμένη για εσάς.';
$string['xmlrpc-missing'] = 'Πρέπει να έχετε εγκατεστημένο το XML-RPC στην PHP για να μπορέσετε να χρησιμοποιήσετε αυτό το χαρακτηριστικό.';
$string['yourhost'] = 'Ο κεντρικός υπολογιστής σας';
$string['yourpeers'] = 'Οι ομοτιμοί σας';
