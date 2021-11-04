#Lezione 6 - Todo Page Title

###todo_index_index.xml (/view/frontend/layout/todo_index_index.xml)
Il nome todo_index_index proviene da:
todo -> /etc/frontend/routes.xml ```<route id="todo">```
index_index -> Controller/**Index/Index.php**

```
<?xml version="1.0" ?>
<page xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:noNamespaceSchemaLocation="urn:magento:framework:View/Layout/etc/page_configuration.xsd">
    <update handle="customer_account"/>
    <body>
        <referenceBlock name="page.main.title">
            <action method="setPageTitle">
                <argument name="title" translate="true" xsi:type="string">My TODO List</argument>
            </action>
        </referenceBlock>
    </body>
</page>

```
* ```<update handle="customer_account"/>``` Renderizza la pagina come una pagina customer_account
* ```<referenceBlock name="page.main.title">``` Prende come riferimento il blocco **page.main.title**
* ```<action method="setPageTitle">``` Esegue il metodo **setPageTitle**
* ```<argument name="title" translate="true" xsi:type="string">My TODO List</argument>``` Quest'ultimo metodo prende un solo parametro che è **title**
