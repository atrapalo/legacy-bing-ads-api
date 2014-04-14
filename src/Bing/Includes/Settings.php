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


/*
 * This is the base Settings class. This class loads the user's
 * credentials and endpoint properties from the settings.xml file.
 * Provides accessor methods for getting the property values.
 *
 * Each sample will include a settings.xml file that contains the user's
 * credentials and endpoint properties. In addition, each sample can
 * include sample-specific properties in the settings.xml file. For example,
 * the reporting sample includes an output folder property and scoping
 * properties.
 *
 * Each sample will create a class that derives from this Settings class
 * to get the sample-specific properties.
 */

use DOMDocument;
use DOMXPath;

class Settings
{
    private $_password = null;
    private $_username = null;
    private $_devToken = null;
    private $_accountId = null;
    private $_customerId = null;
    private $_wsdl = null;

    // Load the user credentail and endpoint properties from the settings file.
    // Returns the $xpath variable used by the derived class' LoadSettings
    // function.

    protected function LoadSettings($path)
    {
        $path = getcwd().$path;
        if (is_file($path))
        {
            $doc = new DOMDocument;

            if ($doc->load($path))
            {
                $xpath = new DOMXPath($doc);

                // Get the sign-in password.

                $query = "//setting[@name='password']";
                $node = $xpath->query($query)->item(0);

                if (empty($node))
                {
                    throw new SettingsException("The password setting is missing.");
                }

                $this->_password = $node->nodeValue;

                if (empty($this->_password))
                {
                    throw new SettingsException("The password setting is not set.");
                }

                // Get the sign-in user name.

                $query = "//setting[@name='username']";
                $node = $xpath->query($query)->item(0);

                if (empty($node))
                {
                    throw new SettingsException("The username setting is missing.");
                }

                $this->_username = $node->nodeValue;

                if (empty($this->_username))
                {
                    throw new SettingsException("The username setting is not set.");
                }

                // Get the developer access token.

                $query = "//setting[@name='devToken']";
                $node = $xpath->query($query)->item(0);

                if (empty($node))
                {
                    throw new SettingsException("The devToken setting is missing.");
                }

                $this->_devToken = $node->nodeValue;

                if (empty($this->_devToken))
                {
                    throw new SettingsException("The devToken setting is not set.");
                }

                // Get the advertiser's account ID. Optional.

                $query = "//setting[@name='accountId']";
                $node = $xpath->query($query)->item(0);

                if (!empty($node))
                {
                    $this->_accountId = $node->nodeValue;

                    if (empty($this->_accountId))
                    {
                        $this->_accountId = null;
                    }
                }

                // Get the advertiser's customer ID. Optional.

                $query = "//setting[@name='customerId']";
                $node = $xpath->query($query)->item(0);

                if (!empty($node))
                {
                    $this->_customerId = $node->nodeValue;

                    if (empty($this->_customerId))
                    {
                        $this->_customerId = null;
                    }
                }

                // Get the URL of the WSDL.

                $query = "//setting[@name='wsdl']";
                $node = $xpath->query($query)->item(0);

                if (empty($node))
                {
                    throw new SettingsException("The wsdl setting is missing.");
                }

                $this->_wsdl = $node->nodeValue;

                if (empty($this->_wsdl))
                {
                    throw new SettingsException("The wsdl setting is not set.");
                }
            }
        }
        else
        {
            throw new SettingsException("The settings folder " . self::SETTINGS_PATH . " was not found.");
        }

        return $xpath;
    }

    // Accessor methods.
    
    public function getPassword()
    {
        return $this->_password;
    }

    public function getUsername()
    {
        return $this->_username;
    }

    public function getDevToken()
    {
        return $this->_devToken;
    }

    public function getAccountId()
    {
        return $this->_accountId;
    }

    public function getCustomerId()
    {
        return $this->_customerId;
    }

    public function getWsdl()
    {
        return $this->_wsdl;
    }
}
