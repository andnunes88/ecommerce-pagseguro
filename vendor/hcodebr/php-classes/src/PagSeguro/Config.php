<?php

namespace Hcode\PagSeguro;

class Config{
	
	const SANDBOX = true;
	
	const SANDBOX_EMAIL = "andnunes88@gmail.com";
	const PRODUCTION_EMAIL = "andnunes88@gmail.com";
	
	const SANDBOX_TOKEN = "3799DCD2196444BFAEE1369EA3A9AF3A";
	const PRODUCTION_TOKEN = "111EC5F0E7974C918D4B02D44C59759C";
	
	const SANDBOX_SESSIONS = "https://ws.sandbox.pagseguro.uol.com.br/v2/sessions"
	const PRODUCTION_SESSIONS = "https://ws.pagseguro.uol.com.br/v2/sessions"
	
	const SANDBOX_URL_JS = "https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js";
	const PRODUCTION_URL_JS = "https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js";
	
	public static function getAuthentication():array
	{
		if(Config::SANDBOX === true){
			return [
				"email"=>Config::SANDBOX_EMAIL,
				"token"=>Config::SANDBOX_TOKEN
			];
		}else{
			return [
				"email"=>Config::PRODUCTION_EMAIL,
				"token"=>Config::PRODUCTION_TOKEN
			];
		}
	}
	
	public static function getUrlSessions():string
	{
		return (Config::SANDBOX === true) ? Config::SANDBOX_SESSIONS : Config::PRODUCTION_SESSIONS;
	}
	
	public static function getUrlJS(){
		
		return (Config::SANDBOX === true) ? Config::SANDBOX_URL_JS : Config::PRODUCTION_URL_JS;
	}
}