Descrizione:
Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi.
Il primo file dovrà permettere all utente di inserire i dati e inviare la richiesta al server.
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
stampare a schermo il paragrafo e la sua lunghezza
 stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare

creazione form con method GET, 2 input (ex: paragraph e badword) e bottone submit in index.php ( primo file )
al submit stampare a schermo i valori dei due input ( $_GET['cosa ci-mettiamo qui'])
creare un secondo file ( ex: censura:php )
settare l'action del form al percorso del secondo file e stampare a schermo i due valori degli input al submit del form
stampare la lunghezza di paragraph nel secondo file
sostituire le ricorrenza del badword in paragraph con asterischi usando una funziona specifica php nel secondo file.