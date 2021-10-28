#Lezione 4 - Creazione di un controller

I Controller di Magento2 sono costituiti da uno o più file nella cartella Controller del modulo.
Utilizza il metodo **execute**
Creare il file
###Index.php (/Controller/Index/Index.php)
```
namespace MageMastery\Todo\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action{
    public function execute()
    {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}

```
