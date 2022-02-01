<?php
/**
 * @copyright Copyright (c) 2015 Fooman Limited (http://www.fooman.co.nz)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Boostsales\Pdftable\Block\Pdf\Column;

class NameAndSku extends \Fooman\PdfCore\Block\Pdf\Column\NameAndSku
{

    public function getNameAndSku($row)
    {
        $orderItem = $this->getOrderItem($row);
        return $orderItem->getName() . '<br/>' . __('Article no..:') . ' ' .  $orderItem->getSku();
    }
}
