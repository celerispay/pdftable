<?php
/**
 * @copyright Copyright (c) 2015 Fooman Limited (http://www.fooman.co.nz)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Boostsales\Pdftable\Block\Pdf\Column;

class QtyBackOrdered extends \Fooman\PdfCore\Block\Pdf\Column\QtyBackOrdered
{

    public function getQtyBackOrdered($row)
    {
        if ($row instanceof \Magento\Sales\Api\Data\OrderItemInterface) {
            return $row->getQtyBackordered() ? $row->getQtyBackordered() : 0;
        } else {
            return $row->getOrderItem()->getQtyBackordered() ? $row->getOrderItem()->getQtyBackordered(): 0;
        }
    }
}
