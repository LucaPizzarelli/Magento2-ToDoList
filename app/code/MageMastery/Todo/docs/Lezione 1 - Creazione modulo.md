#Creazione di un modulo
Un modulo in Magento non è altro che una directory che contiene blocchi, controller, modelli, helper e tutti i file necessari al corretto funzionamento del plugin stesso.
###Passaggio 1: creare la cartella del modulo Hello World
Il nome del modulo è definito come NomeVendor_NomeModulo. La prima parte è il nome del venditore e l’ultima parte è il nome del modulo: Ad esempio: MageMastery_Todo
Quindi ho creato la cartella
```
app/code/MageMastery/Todo
```
####Registration.php (/Registration.php)
Ogni componente deve avere un file chiamato **registration.php** nella sua directory principale. 
I moduli vengono registrati seguendo questa forma:
```
    <?php
    use Magento\Framework\Component\ComponentRegistrar;
    ComponentRegistrar::register(ComponentRegistrar::MODULE, '<VendorName_ModuleName>', __DIR__);
```
####module.xml (/etc/module.xml)
Questo file è necessario per l'esistenza del modulo.

Questo file contiene le seguenti informazioni:
* Nome del modulo
* Versione modulo
* dipendenze
```
<?xml version="1.0"?>
<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:noNamespaceSchemaLocation="urn:magento:framework:Module/etc/module.xsd">
    <module name="VendorName_ModuleName" setup_version="1.0.0">
    </module>
</config>
```
####Attivazione modulo
Per rendere attivo il modulo eseguire questi comandi
```
    #Attiva il modulo (Modo 1)
    bin/magento module:enable VendorName_ModuleName
    
    #Attiva il modulo (Modo 2)
    bin/magento setup:upgrade VendorName_ModuleName
    
    #Verificare che il modulo sia attivo da terminale
    bin/magento module:status
    
    #Verificare che il modulo sia attivo da file
    app/etc/config.php
```

