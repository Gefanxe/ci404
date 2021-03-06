<?php

namespace App\Controllers;

class Fb extends BaseController
{
    public function login()
    {
        $fbConfig = config('Config\\FaceBook');
        $app_id = $fbConfig->app_id;
        $app_secret = $fbConfig->app_secret;

        $fb = new \Facebook\Facebook([
            'app_id' => $app_id,
            'app_secret' => $app_secret,
            'default_graph_version' => 'v2.10',
        ]);
        
        $helper = $fb->getRedirectLoginHelper();
        
        $permissions = ['email']; // Optional permissions
        $loginUrl = $helper->getLoginUrl('http://localhost:8080/fb/callback', $permissions);
        
        echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
    }

    public function callback()
    {
        $req = $this->request;
        $state = $req->getGet("state");
        
        $fbConfig = config('Config\\FaceBook');
        $app_id = $fbConfig->app_id;
        $app_secret = $fbConfig->app_secret;

        $fb = new \Facebook\Facebook([
            'app_id' => $app_id,
            'app_secret' => $app_secret,
            'default_graph_version' => 'v2.10',
            ]);
          
        $helper = $fb->getRedirectLoginHelper();
        $helper->getPersistentDataHandler()->set('state', $state);
          
        try {
            $accessToken = $helper->getAccessToken();
        } catch (\Facebook\Exception\ResponseException $e) {
            // When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch (\Facebook\Exception\SDKException $e) {
            // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }
          
        if (! isset($accessToken)) {
            if ($helper->getError()) {
                header('HTTP/1.0 401 Unauthorized');
                echo "Error: " . $helper->getError() . "\n";
                echo "Error Code: " . $helper->getErrorCode() . "\n";
                echo "Error Reason: " . $helper->getErrorReason() . "\n";
                echo "Error Description: " . $helper->getErrorDescription() . "\n";
            } else {
                header('HTTP/1.0 400 Bad Request');
                echo 'Bad request';
            }
            exit;
        }
          
        // Logged in
        echo '<h3>Access Token</h3>';
        var_dump($accessToken->getValue());
          
        // The OAuth 2.0 client handler helps us manage access tokens
        $oAuth2Client = $fb->getOAuth2Client();
          
        // Get the access token metadata from /debug_token
        $tokenMetadata = $oAuth2Client->debugToken($accessToken);
        // echo '<h3>Metadata</h3>';
        // var_dump($tokenMetadata);
          
        // Validation (these will throw FacebookSDKException's when they fail)
        $tokenMetadata->validateAppId($app_id);
        // If you know the user ID this access token belongs to, you can validate it here
        //$tokenMetadata->validateUserId('123');
        $tokenMetadata->validateExpiration();
          
        if (! $accessToken->isLongLived()) {
            // Exchanges a short-lived access token for a long-lived one
            try {
                $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
            } catch (\Facebook\Exception\SDKException $e) {
                echo "<p>Error getting long-lived access token: " . $e->getMessage() . "</p>\n\n";
                exit;
            }
          
            echo '<h3>Long-lived</h3>';
            var_dump($accessToken->getValue());
        }
        
        // 將token存到Session
        $_SESSION['fb_access_token'] = (string)$accessToken;

        echo '<br>'. '============================================='. '<br>';

        try {
            // Get the \Facebook\GraphNodes\GraphUser object for the current user.
            // If you provided a 'default_access_token', the '{access-token}' is optional.
            $response = $fb->get('/me', (string)$accessToken);
          } catch(\Facebook\Exceptions\FacebookResponseException $e) {
            // When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
          } catch(\Facebook\Exceptions\FacebookSDKException $e) {
            // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
          }
          
          $me = $response->getGraphUser();
          echo 'Logged in as ' . $me->getName();
    }
}
