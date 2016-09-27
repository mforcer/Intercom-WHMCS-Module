<?php

if (!defined('WHMCS'))
    die('This file cannot be accessed directly');

use Illuminate\Database\Capsule\Manager as Capsule;

add_hook("ClientAreaFooterOutput", 1, function($vars) {


    $appId = '';

    $data = Capsule::table('tbladdonmodules')
        ->select('value AS app_id')
        ->where('setting', '=', 'app_id')
        ->where('module', '=', 'intercom')
        ->first();

    if ($data) {
        $appId = $data->app_id;
    }

    $params = array();
    $userData = '';

    if (isset($vars['clientsdetails'])) {
        // Base set of user data information we would like to collect: Email, Company Name and Account status.
        // Todo: Allow configuring this from WHMCS admin area.
        $keys = array(
			'email'          => 'email',
            'companyname'    => 'company_name',
            'status'         => 'account_status'
		);

        // Manually construct data that requires more work, e.g. concatenating your clients name.
        $params[] = [
            'key'   => 'name',
            'value' => $vars['clientsdetails']['firstname'] . ' ' . $vars['clientsdetails']['lastname']
        ];

        // Grab the date user was registered.
        $params[] = [
            'key' => 'created_at',
            'value' => strtotime($vars['datecreated'] . '00:00:00')
        ];

        // Has this member opt out of email communications?
        $params[] = [
            'key' => 'email_optout',
            'value' => $vars['clientsdetails']['emailoptout'] ? '1' : '0'
        ];

        foreach ($keys as $key => $value) {
			if (isset($vars['clientsdetails'][$key])) {
				$params[] = array(
                    'key'   => $value,
					'value' => html_entity_decode($vars['clientsdetails'][$key])
				);
			}
		}

        if ($params) {
            $userDataArray = array();

            foreach ($params as $param) {
                $userDataArray[] = $param['key'] . ': '. str_replace('"', "'", json_encode($param['value']));
            }

            $userData = implode(",\n    ", $userDataArray);

        }
    }


    $output = "
        <script>\n
            window.intercomSettings = {\n
                app_id: \"{$appId}\",
                " . ($userData) . "
            };\n
        </script>\n
        <script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==='function'){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/lahzhrr3';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>\n
    ";

    return $output;
});
