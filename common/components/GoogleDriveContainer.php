<?php

namespace common\components;

use yii\base\Component;
use Exception;
use yii\helpers\VarDumper;

class GoogleDriveContainer extends Component
{
    private \Google_Client $client;
    private string $callbackUrl;

    /**
     * @var array $scopes
     */
    private $scopes = [
        \Google_Service_Drive::DRIVE_FILE,
        \Google_Service_Drive::DRIVE_APPDATA,
        \Google_Service_Drive::DRIVE,
        \Google_Service_Drive::DRIVE_METADATA,
        "https://www.googleapis.com/auth/drive.apps.readonly",
        \Google_Service_Drive::DRIVE_METADATA_READONLY,
        \Google_Service_Drive::DRIVE_PHOTOS_READONLY,
        \Google_Service_Drive::DRIVE_READONLY,
    ];

    public function init()
    {
        parent::init();
    }

    /**
     * @param string $configFile json config file must be exists in project root directory and contains credentails of api access, download it from app dashboard in google console
    */
    public function __construct($config)
    {
        $configFile = $config['configFile'];
        // $this->client = new \Google_Client($this->config);
        try {
            $fileContent = file_get_contents(__DIR__ . '/../../' . $configFile);
        } catch(Exception $e) {
            print_r($e->getMessage());
            exit;
        }
        $config = json_decode($fileContent, true);
        $this->callbackUrl = $config['web']['redirect_uris'][0];
        $this->client = new \Google_Client();
        $this->client->setAuthConfig($config);
        $this->client->addScope($this->scopes);
        $this->client->setRedirectUri($this->callbackUrl);
        // refresh access token without user interaction.
        $this->client->setAccessType('offline');
        // Using "consent" ensures that your application always receives a refresh token.
        // If you are not using offline access, you can omit this.
        // $this->client->setApprovalPrompt("consent");
        $this->client->setIncludeGrantedScopes(true);   // incremental auth
    }

    /**
     * @return \Google_Client google client
    */
    public function getClient() : \Google_Client {
        return $this->client;
    }

    /**
     * @return string callback url comes from json config file
    */
    public function getCallbackUrl() : string {
        return $this->callbackUrl;
    }
}