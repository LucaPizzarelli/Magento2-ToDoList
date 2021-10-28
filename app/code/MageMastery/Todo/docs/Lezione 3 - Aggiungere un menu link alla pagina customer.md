#Lezione 3: Aggiunta nuovo menu link alla pagina utente

###customer_account.xml (/view/frontend/layout/customer_account.xml)
```
<?xml version="1.0"?>
<page xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:noNamespaceSchemaLocation="urn:magento:framework:View/Layout/etc/page_configuration.xsd">
    <body>
        <referenceBlock name="customer_account_navigation">
            <block class="Magento\Customer\Block\Account\SortLinkInterface"
                    name="customer-account-navigation-todo-link">
                    <arguments>
                        <argument name="path" xsi:type="string">todo</argument>
                        <argument name="label" xsi:type="string" translate="true">My TODO List</argument>
                        <argument name="sortOrder" xsi:type="number">220</argument>
                    </arguments>
            </block>
        </referenceBlock>
    </body>
</page>

```
Eseguire il comando
```
    bin/magento cache/clean (layout)
```

##Come funziona la SortLinkInterface?
SortLinkInterface implementa(implements) **SortLink**.
* SortLink contiene un solo mentodo pubblico **getSortOrder()**.
  * ```<argument name="sortOrder" xsi:type="number">220</argument>```
* SortLink estende(extend) la class **Link/Current**
  * Link/Current contiene il metodo getHref che ritorna **getPath()**
    * ```<argument name="path" xsi:type="string">todo</argument>```
  *Link/Current contiene il metodo **getLabel()**
    * ```<argument name="label" xsi:type="string" translate="true">My TODO List</argument>```
