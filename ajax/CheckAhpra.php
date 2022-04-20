<?php





class CheckAhpra
{
    private $url = 'https://ws2test.ahpra.gov.au/pie_int/svc/PractitionerRegistrationSearch/2.0.0/FindRegistrationService.svc';
    private $user = 'piews-test@celltrionhc.com';
    private $pass = 'w8M!Ns9$t5X';
    private $ahpraNumber;
    private $results;


    public function checkAhpraNumber($number)
    {
        $this->ahpraNumber = trim(strtoupper($number));
        $this->bootstrap();
        return $this->getResults();
    }

    private function bootstrap()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'<soap:Envelope 
xmlns:soap=\'http://www.w3.org/2003/05/soap-envelope\' 
xmlns:ns=\'http://ns.ahpra.gov.au/pie/xsd/common/CommonCoreElements/2.0.0\'
xmlns:ns1=\'http://ns.ahpra.gov.au/pie/svc/frs/FindRegistration/2.0.0\'
xmlns:ns2=\'http://ns.ahpra.gov.au/pie/xsd/frs/FindRegistrationMessages/2.0.0\'>

<soap:Header xmlns:wsa=\'http://www.w3.org/2005/08/addressing\'>  
	<To soap:mustUnderstand=\'1\' xmlns=\'http://www.w3.org/2005/08/addressing\'>https://wstest.ahpra.gov.au/pie_int/svc/PractitionerRegistrationSearch/2.0.0/FindRegistrationService.svc</To>
        <wsa:Action>http://ns.ahpra.gov.au/pie/svc/frs/FindRegistration/2.0.0/FindRegistrationPortType/FindRegistrationsRequest</wsa:Action>
	<ns:LoginDetails> 
		<ns:UserId>'.$this->user.'</ns:UserId>
		<ns:Password>'.$this->pass.'</ns:Password>
	</ns:LoginDetails> 	
</soap:Header>
	<soap:Body>
		<ns1:FindRegistrations> 
			<ns2:ProfessionNumber>'.$this->ahpraNumber.'</ns2:ProfessionNumber>
		</ns1:FindRegistrations> 
	</soap:Body>
</soap:Envelope>
',
            CURLOPT_HTTPHEADER => array(
                'Content-type: application/soap+xml'
            ),
        ));

        $this->results = curl_exec($curl);

        curl_close($curl);
    }


    private function getResults()
    {

        $xml = new SimpleXMLElement($this->results);
        $xml->registerXPathNamespace("soap", "http://www.w3.org/2003/05/soap-envelope");
        $body = $xml->xpath("//soap:Body");

        if ($body[0]->FindRegistrationsResponse->AuditDetails && !$body[0]->FindRegistrationsResponse->ProfessionNumberReplay->ServiceMessage->Status){
            return true;
        }else{
            return false;
        }
    }

}