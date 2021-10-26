#Dipendenze di un modulo
Una dipendenza di un modulo identifica la dipendenza di un modulo software da un altro modulo per il corretto funzionamento.
Un principio fondamentale dell'architettura Magento è la **minimizzazione delle dipendenze del software** .
###Gestire le dipendenze del modulo
Ci sono tre passaggi principali per la gestione delle dipendenze dei moduli:

* Denominare e dichiarare il modulo nel file *module.xml*.

* Dichiarare eventuali dipendenze che il modulo ha (sia su altri moduli che su un componente diverso) nel file composer.json del modulo .
####module.xml (/etc/module.xml)
```
<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:Module/etc/module.xsd">
    <module name="VendorName_ModuleName" setup_version="1.0.0">
        <sequence>
            <module name="VendorDependenceName_ModuleDependenceName" />
            <module name="VendorDependenceName2_ModuleDependenceName2" />
            <module name="VendorDependenceName3_ModuleDependenceName3" />
        </sequence>
    </module>
</config>
```
