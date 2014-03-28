<?php
/*
 This class contains user global information
 Created By: SmartdataInc.
*/
define(THIS_ROOT, '/var/www/resna/sites/all/modules/custom/membersuite/config/');

class Userconfig{
    
    public static function read($name){

      //user drupalsso
    $config = array(
                    'AccessKeyId' => 'AAAAAPIA98sqxws4Vo4JaA',
                    'AssociationId' => '0baafe32-0004-45df-8855-101aedf2a0fe',
                    'SecretAccessKey' => '54TOMB8SKvxL73RaTWK5UiNaGn0eve++AWjWs36my5a9a/4jRUJRgTmaOPt/t1C4Q7MVZLzdtYEUa7l0s6ckFg==',
                    'SigningcertificateId' => 'AAAAAPMAfsMcSws4Vo5HYw',
                    'SigningcertificatePath' => THIS_ROOT . 'signingcertificate.xml',
                    'PortalXMLPath' => THIS_ROOT . 'CreatePortalSecurityTokenRequest.xml',
                    'PortalUrl' => 'https://resna.ps.membersuite.com/'
                    );
    
    return $config[$name];    
      
    }    
    
}
?>