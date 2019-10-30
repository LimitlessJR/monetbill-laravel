<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Monetbil\Monetbil;

class HomeController extends Controller
{
    public function index()
    {
    	// Setup Monetbil arguments
		Monetbil::setAmount(1);
		Monetbil::setCurrency('XAF');
		Monetbil::setLocale('en'); // Display language fr or en
		Monetbil::setPhone('');
		Monetbil::setCountry('');
		Monetbil::setItem_ref('2536');
		Monetbil::setPayment_ref('d4be3535f9cb5a7aff1f84fa94e6f040');
		Monetbil::setUser(12);
		Monetbil::setFirst_name('KAMDEM');
		Monetbil::setLast_name('Jean');
		Monetbil::setEmail('jean.kamdem@email.com');
		Monetbil::setLogo('https://storage.googleapis.com/cdn.ucraft.me/userFiles/ukuthulamovies/images/937-your-logo.png');

		//configurez la route qui sera appelé une fois que le paiement sera effectué
		Monetbil::setReturn_url('/monetbil/success');
		Monetbil::setNotify_url('/monetbil/ipn');

		$MONETBIL_WIDGET_VERSION_V2 = Monetbil::MONETBIL_WIDGET_VERSION_V2;
		$widgetVersion = Monetbil::getWidgetVersion();

		$payment_url = Monetbil::url();
		$monetbilJS = Monetbil::js();

		return view('welcome', compact('payment_url', 'MONETBIL_WIDGET_VERSION_V2', 'widgetVersion', 'monetbilJS'));
    }
}
