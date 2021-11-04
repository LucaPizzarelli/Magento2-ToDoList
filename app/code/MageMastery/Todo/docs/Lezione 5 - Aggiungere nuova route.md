#Lezione 5 - Nuova Route

Nelle applicazioni web, come Magento, il routing è l'atto di fornire dati da una richiesta URL alla classe appropriata per l'elaborazione. Il routing Magento utilizza il seguente flusso:

![Image of Magneto Routing](https://devdocs.magento.com/guides/v2.4/extension-dev-guide/images/magento2-request-processing.png)

###FrontController
La classe FrontController effettua la ricerca in un elenco di router,
forniti dalla classe RouterList, fino a trovarne uno in grado di elaborare una richiesta.

###routes.xml (/etc/<area>/routes.xml)
Ogni area (nel nostro caso, frontend e adminhtml) ha un corrispondente file routes.xml,
che viene unito dal file etc/<area>/routes.xml di ogni modulo.
Quel file routes.xml contiene informazioni su tutte le route
e i frontName registrati.
```
<?xml version="1.0" ?>
<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:App/etc/routes.xsd">
    <router id="standard">
        <route id="todo" frontName="todo">
            <module name="VendorName_ModuleName"/>
        </route>
    </router>
</config>
```
```<router id="standard">```
* id = standard per il frontend
* id = admin per il backend o adminhtml

```<route id="todo" frontName="todo">```
* id = univoco si usa il nome del vendor o del modulo
* frontname =  nome modulo

```<module name="VendorName_ModuleName"/>```
* name = VendorName_ModuleName
##Eseguire comandi
```
bin/magento cache/clean
```
