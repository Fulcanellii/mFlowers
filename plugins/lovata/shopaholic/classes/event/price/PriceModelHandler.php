<?php namespace Lovata\Shopaholic\Classes\Event\Price;

use Lovata\Shopaholic\Models\Offer;
use Lovata\Shopaholic\Models\Price;

use Lovata\Shopaholic\Classes\Store\OfferListStore;
use Lovata\Shopaholic\Classes\Store\ProductListStore;

/**
 * Class PriceModelHandler
 * @package Lovata\Shopaholic\Classes\Event\Price
 * @author Andrey Kharanenka, a.khoronenko@lovata.com, LOVATA Group
 */
class PriceModelHandler
{
    protected $iPriority = 1000;
    /** @var  Price */
    protected $obElement;

    protected $obListStore;

    protected $bWithRestore = false;
    protected $sIdentifierField = 'id';

    /**
     * Add listeners
     */
    public function subscribe()
    {
        $sModelClass = $this->getModelClass();
        $sModelClass::extend(function ($obElement) {

            /** @var \Model $obElement */
            $obElement->bindEvent('model.afterSave', function () use ($obElement) {
                $this->obElement = $obElement;
                $this->afterSave();
            }, $this->iPriority);

            /** @var \Model $obElement */
            $obElement->bindEvent('model.afterDelete', function () use ($obElement) {
                $this->obElement = $obElement;
                $this->afterDelete();
            }, $this->iPriority);
        });
    }

    /**
     * After save event handler
     */
    protected function afterSave()
    {
        if ($this->obElement->getOriginal('price') != $this->obElement->price_value) {
            $this->clearPriceCache();
        }

        $obj = new Price();

        $data = $this->obElement;

//        $file = 'array.txt';
//        file_put_contents($file, $data);

        $data = json_decode($data);

        if (!empty($data->item)) {

        $product = $obj->getProductName($data->item->product_id);
        $offerId = $obj->getOfferId($data->item->product_id);

        $url = 'https://b24-3xwwl0.bitrix24.ru/rest/1/d6smpzxao255pv73/crm.product.get';
        $queryData = ['id' => $offerId->crm_id];
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_POST => 1,
            CURLOPT_HEADER => 0,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url,
            CURLOPT_POSTFIELDS => http_build_query($queryData),
        ));
        $result = curl_exec($curl);
        curl_close($curl);
        $result = json_decode($result);

        if (!empty($result->error_description)) {

            $queryData = ['fields' => ['NAME' => $product->name, 'PRICE' => $data->price]];
            $url = 'https://b24-3xwwl0.bitrix24.ru/rest/1/d6smpzxao255pv73/crm.product.add';
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_SSL_VERIFYPEER => 0,
                CURLOPT_POST => 1,
                CURLOPT_HEADER => 0,
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_URL => $url,
                CURLOPT_POSTFIELDS => http_build_query($queryData),
            ));
            $result = curl_exec($curl);
            curl_close($curl);

                $res = json_decode($result);
                $obj->updateOffers($data->item->product_id, $res->result);
                $this->clearPriceCache();
            }else{
                $queryData = ['id' => $offerId->crm_id,'fields' => [ 'NAME' => $product->name, 'PRICE' => $data->price ]];
                $url = 'https://b24-3xwwl0.bitrix24.ru/rest/1/d6smpzxao255pv73/crm.product.update';
                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_SSL_VERIFYPEER => 0,
                    CURLOPT_POST => 1,
                    CURLOPT_HEADER => 0,
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_URL => $url,
                    CURLOPT_POSTFIELDS => http_build_query($queryData),
                ));
                $result = curl_exec($curl);
                curl_close($curl);
            }
        }

    }

    /**
     * After delete event handler
     */
    protected function afterDelete()
    {
        $this->clearPriceCache();
    }

    /**
     * Clear product/offer price cache
     */
    protected function clearPriceCache()
    {
        $obItem = $this->obElement->item;
        if (empty($obItem)) {
            return;
        }

        if ($obItem instanceof Offer) {

            $sSorting = !empty($this->obElement->price_type) ? '|'.$this->obElement->price_type : '';

            OfferListStore::instance()->sorting->clear(OfferListStore::SORT_PRICE_ASC.$sSorting);
            OfferListStore::instance()->sorting->clear(OfferListStore::SORT_PRICE_DESC.$sSorting);

            if ($obItem->active) {
                ProductListStore::instance()->sorting->clear(ProductListStore::SORT_PRICE_ASC.$sSorting);
                ProductListStore::instance()->sorting->clear(ProductListStore::SORT_PRICE_DESC.$sSorting);
            }
        }
    }

    /**
     * Get model class name
     * @return string
     */
    protected function getModelClass()
    {
        return Price::class;
    }
}
