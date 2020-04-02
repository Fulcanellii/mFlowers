<?php namespace Lovata\Shopaholic\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Backend\Classes\BackendController;
use Illuminate\Support\Facades\Redirect;
use Lovata\Shopaholic\Models\Offer;
use Lovata\Shopaholic\Classes\Helper\CurrencyHelper;

/**
 * Class Offers
 * @package Lovata\Shopaholic\Controllers
 * @author  Andrey Kharanenka, a.khoronenko@lovata.com, LOVATA Group
 */
class Offers extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.RelationController',
        'Backend.Behaviors.ImportExportController',
    ];

    public $formConfig = 'config_form.yaml';
    public $relationConfig = 'config_relation.yaml';
    public $importExportConfig = 'config_import_export.yaml';

    /**
     * Products constructor.
     */
    public function __construct()
    {
        CurrencyHelper::instance()->disableActiveCurrency();

        if (BackendController::$action == 'import') {
            Offer::extend(function ($obModel) {
                $obModel->rules['external_id'] = 'required';
            });
        }

        parent::__construct();
        BackendMenu::setContext('Lovata.Shopaholic', 'shopaholic-menu-main', 'shopaholic-menu-products');
    }

    public function test()
    {
        $request = [
            'pg_merchant_id'=> 526842,
            'pg_amount' => $_GET['price'],
            'pg_salt' => 'some_random_string',
            'pg_order_id'=>'123',
            'pg_description' => 'Описание заказа',
            'pg_result_url' => 'http://october/search',
            'pg_currency' => 'KGS'
        ];

$request['pg_testing_mode'] = 1; //add this parameter to request for testing payments

//if you pass any of your parameters, which you want to get back after the payment, then add them. For example:
// $request['client_name'] = 'My Name';
// $request['client_address'] = 'Earth Planet';

//generate a signature and add it to the array
        ksort($request); //sort alphabetically
        array_unshift($request, 'payment.php');
        array_push($request, 'PMaiPOMXi3JgNgxs'); //add your secret key (you can take it in your personal cabinet on paybox system)


        $request['pg_sig'] = md5(implode(';', $request));

        unset($request[0], $request[1]);

        $query = http_build_query($request);

        return response('https://api.paybox.money/payment.php?'.$query);
    }
}
