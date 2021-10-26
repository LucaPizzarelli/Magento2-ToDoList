<?php

/*
 * PHP >= 7 - Php aggiunge la strict mode, abilitando requisiti rigorosi, in modo da creare programmi PHP più corretti e autodocumentanti.
 */
declare (strict_types=1);

/*
 * I componenti Magento, inclusi moduli, temi e pacchetti linguistici,
 * devono essere registrati nel sistema Magento tramite la classe ComponentRegistrar di Magento.
 */
use Magento\Framework\Component\ComponentRegistrar; //Classe che usa magento per registrare

ComponentRegistrar::register(
    ComponentRegistrar::MODULE, //Definire il tipo di componente da registrare
    "MageMastery_Todo", //Definire il nome dell componente da registrare (NomeVendor_NomeComponente) #Prima lettera del vendor e del componente maiuscola
    __DIR__ //Definire la path
);

/*
 * Come magento carica questi componenti?
 *  1. In composer.json > autoload > files > Richiama la classe "app/etc/NonComposerComponentRegistration.php"
 *  2. Il file  app > etc > NonComposerComponentRegistration.php si occupa di caricare e registrare i componenti
 *      seguendo una lista che gli viene fornita da _registration_globlist.php_.
 *      _NonComposerComponentRegistration.php_ richiama la classe _registration_globlist.php_ nella medesima cartella.
 *      Questo file contine una lista di file da andare a leggere.
 *          return [
 *              .....
 *               'app/code/asterisco/asterisco/registration.php',
 *              .....
 *           ];
 */
