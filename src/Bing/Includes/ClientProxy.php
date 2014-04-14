<?php

namespace Bing\Includes;

// Copyright 2012 Microsoft Corporation

// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at

//    http://www.apache.org/licenses/LICENSE-2.0

// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.


// Define a client proxy class that you can use to connect to any of the Bing Ads web services.

use DOMDocument;
use DOMXPath;
use SoapClient;
use SoapHeader;

Class ClientProxy
{
    private $username = null;
    private $password = null;
    private $developerToken = null;
    private $wsdlUrl = null;
    private $accountId = null;
    private $customerId = null;
    private $service = null;
    private $namespace = null;

    public function __construct($settings)
    {
        $this->username = $settings->getUsername();
        $this->password = $settings->getPassword();
        $this->developerToken = $settings->getDevToken();
        $this->accountId = $settings->getAccountId();
        $this->customerId = $settings->getCustomerId();
        $this->wsdlUrl = $settings->getWsdl();
        $this->service = $this->GetProxy($this->wsdlUrl);
    }

    public function GetAccountId() { return $this->accountId; }
    public function GetCustomerId() { return $this->customerId; }
    public function GetService() { return $this->service; }
    public function GetNamespace() { return $this->namespace; }

    // This function gets the namespace from the WSDL, so you do
    // not have to hardcode it in the client.

    private function GetServiceNamespace($url)
    {
        $doc = new DOMDocument;

        if ($doc->load($url))
        {
            $xpath = new DOMXPath($doc);

            $query = "/*/@targetNamespace";
            $attrs = $xpath->query($query);

            if (empty($attrs))
            {
                throw new SettingsException("Is the endpoint correct; the targetNamespace is missing.");
            }

            $namespace = $attrs->item(0)->value;
        }
        else
        {
            throw new SettingsException("The endpoint $url was not found.");
        }

        return $namespace;
    }

    private function GetProxy($wsdl)
    {
        $this->namespace = $this->GetServiceNamespace($wsdl);

        // Define the SOAP headers.

        $headers = array();

        $headers[] = new SoapHeader(
            $this->namespace,
            'CustomerId',
            $this->customerId
            );

        $headers[] = new SoapHeader(
            $this->namespace,
            'CustomerAccountId',
            $this->accountId
            );

        $headers[] = new SoapHeader(
            $this->namespace,
            'DeveloperToken',
            $this->developerToken
            );

        $headers[] = new SoapHeader(
            $this->namespace,
            'UserName',
            $this->username
            );

        $headers[] = new SoapHeader(
            $this->namespace,
            'Password',
            $this->password
            );

        // By default, PHP does not return single item arrays as an array type.
        // To force PHP to always return an array for an array type in the 
        // response, specify the SOAP_SINGLE_ELEMENT_ARRAYS feature.

        $options = array(
            'trace' => TRUE,
            'exceptions' => TRUE,
            'features' => SOAP_SINGLE_ELEMENT_ARRAYS
            );

        $proxy = @new SoapClient($this->wsdlUrl, $options);

        $proxy->__setSoapHeaders($headers);

        return $proxy;
    }
}


