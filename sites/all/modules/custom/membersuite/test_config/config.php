<?php
/*
 This class contains user global information
 Created By: SmartdataInc.
*/
define(THIS_ROOT, '/var/www/resna/sites/all/modules/custom/membersuite/config/');

class Userconfig{
    
    public static function read($name){
     
    $config = array(
                    'AccessKeyId' => 'AAAAAPIA/UObVXfWokrswA',
                    'AssociationId' => '2537d8c3-0004-4ddb-b7e4-a6d76c09d3f9',
                    'SecretAccessKey' => 'PislBM1IXpWjshA/IQagSzrJ/FiXbuJu80zaKctvLO/CzHcZXYC9F8MbatI2jtFY4TZRU3TsmYflg3HsSYdWOQ==',
                    'SigningcertificateId' => 'AAAAAPMAnESfVm9oock2Kw',
                    'SigningcertificatePath' => THIS_ROOT.'signingcertificate.xml',
                    'PortalXMLPath' => THIS_ROOT.'CreatePortalSecurityTokenRequest.xml',
                    'PortalUrl' => 'https://customer14517d3f9.portal.production.membersuite.com/'
                    );
    
    return $config[$name];    
      
    }    
    
}

?>
