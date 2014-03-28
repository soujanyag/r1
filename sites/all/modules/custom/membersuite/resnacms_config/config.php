<?php
/*
 This class contains user global information
 Created By: SmartdataInc.
*/
define(THIS_ROOT, '/var/www/resna/sites/all/modules/custom/membersuite/config/');

class Userconfig{
    
    public static function read($name){
     
    $config = array(
                    'AccessKeyId' => 'AAAAAPIAbsXC+Qs4JZ2oig',
                    'AssociationId' => '0baafe32-0004-45df-8855-101aedf2a0fe',
                    'SecretAccessKey' => 'lEnXJ3MuaR/TpwtJezrPTJm7uq0qiexrLV16mfo/t54PKf0bxTT+RoP+/5iJQAtyOnEUaTHjhEUqX2flIxFJkA==',
                    'SigningcertificateId' => 'AAAAAPMAK8Q/8gs4R26Gag',
                    'SigningcertificatePath' => THIS_ROOT.'signingcertificate.xml',
                    'PortalXMLPath' => THIS_ROOT.'CreatePortalSecurityTokenRequest.xml',
                    'PortalUrl' => 'https://resna.ps.membersuite.com/'
                    );
    
    return $config[$name];    
      
    }    
    
}
?>