<?php

namespace Bing\Reporting;

use Bing\Includes\Settings;
use Bing\Includes\SettingsException;
use Bing\Production\Reporting\CampaignReportScope;

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


// This class extends Settings.php. It gets the report-specific properties
// from the settings.xml file.

class ReportSettings extends Settings
{

    private $_downloadFolder = null;
    private $_accountScope = null;
    private $_campaignScope = null;

    // Load the properties from the settings file.

    function LoadSettings($settingsPath)
    {
        $xpath = parent::LoadSettings($settingsPath);

        // Get the full path to the top-level folder that will contain the reports.

        $query = "//setting[@name='downloadFolder']";
        $node = $xpath->query($query)->item(0);

        if (empty($node))
        {
            throw new SettingsException("The downloadFolder setting is missing.");
        }

        $this->_downloadFolder = $node->nodeValue;

        if (empty($this->_downloadFolder))
        {
            throw new SettingsException("The downloadFolder setting is not set.");
        }

        $query = "//setting[@name='accountScope']/accounts";
        $node = $xpath->query($query)->item(0);

        if (empty($node))
        {
            throw new SettingsException("The settings file is malformed; the <accounts> tag is missing.");
        }

        // Get the list of account IDs to use for reports that
        // specify an account scope.

        $query = "//setting/accounts/*";
        $nodes = $xpath->query($query);

        $length = $nodes->length;

        if ($length > 0)
        {
            $this->_accountScope = array();

            foreach ($nodes as $node)
            {
                $id = $node->nodeValue;

                if (is_numeric($id))
                {
                    $this->_accountScope[] = (float)$id;
                }
                else
                {
                    throw new SettingsException("One of the account IDs of the accountScope setting is not valid.");
                }
            }
        }

        $query = "//setting[@name='campaignScope']/campaigns";
        $node = $xpath->query($query)->item(0);

        if (empty($node))
        {
            throw new SettingsException("The settings file is malformed; the <campaigns> tag is missing.");
        }

        // Get the list of account ID/campaign ID pairs to use for reports
        // that specify a campaign scope.

        $query = "//setting/campaigns/*";
        $nodes = $xpath->query($query);

        $length = $nodes->length;

        if ($length > 0)
        {
            $this->_campaignScope = array();

            foreach ($nodes as $node)
            {
                $campaign = new CampaignReportScope();

                $query = $node->getNodePath()."/accountId";
                $accountNode = $xpath->query($query)->item(0);

                if (empty($accountNode))
                {
                    throw new SettingsException("The accountId node of the one of the campaign nodes is missing.");
                }

                $accountId = $accountNode->nodeValue;

                if (empty($accountId))
                {
                    throw new SettingsException("The accountId node of the one of the campaign nodes is not set.");
                }

                if (is_numeric($accountId))
                {
                    $campaign->ParentAccountId = (float)$accountId;
                }
                else
                {
                    throw new SettingsException("The accountId node of the one of the campaign nodes is not valid.");
                }

                $query = $node->getNodePath()."/campaignId";
                $campaignNode = $xpath->query($query)->item(0);

                if (empty($campaignNode))
                {
                    throw new SettingsException("The campaignId node of the one of the campaign nodes is missing.");
                }

                $campaignId = $campaignNode->nodeValue;

                if (empty($campaignId))
                {
                    throw new SettingsException("The campaignId node of the one of the campaign nodes is not set.");
                }

                if (is_numeric($campaignId))
                {
                    $campaign->CampaignId = (float)$campaignId;
                }
                else
                {
                    throw new SettingsException("The campaignId node of the one of the campaign nodes is not valid.");
                }

                $this->_campaignScope[] = $campaign;
            }
        }
    }


    // Accessor methods.

    public function getDownloadFolder()
    {
        return $this->_downloadFolder;
    }

    public function getAccountScope()
    {
        return $this->_accountScope;
    }

    public function getCampaignScope()
    {
        return $this->_campaignScope;
    }
}
