<?php
/**
 * @copyright Copyright (c) 2015 Fooman Limited (http://www.fooman.co.nz)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Boostsales\Pdftable\Block\Pdf\Column;

class QtyDetails extends \Fooman\PdfCore\Block\Pdf\Column\QtyDetails
{
    public function getQtyDetails($row)
    {
        $showAsInt = $this->_scopeConfig->getValue(
            self::XML_PATH_QTY_AS_INT,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $row->getStoreId()
        );

        if ($row instanceof \Magento\Sales\Api\Data\OrderItemInterface) {
            $orderItem = $row;
        } else {
            $orderItem = $row->getOrderItem();
        }

        $data = [];
        $value = $showAsInt ? (int)$orderItem->getQtyOrdered() : $orderItem->getQtyOrdered();
        $data = $value;
        if ($orderItem->getQtyShipped() > 0.0001) {
            $value = $showAsInt ? (int)$orderItem->getQtyShipped() : $orderItem->getQtyShipped();
            $data = $value;
        }
        return $data;
    }
}
