<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;
use Application\Models\Users;
use Zend\Json\Json;
use Zend\View\Model\JsonModel;

use Zend\Cache\StorageFactory;
use Zend\Cache\Storage\Adapter\Memcached;
use Zend\Cache\Storage\StorageInterface;
use Zend\Cache\Storage\AvailableSpaceCapableInterface;
use Zend\Cache\Storage\FlushableInterface;
use Zend\Cache\Storage\TotalSpaceCapableInterface;

class ScgController extends AbstractActionController
{

################################################################################
    public function findxyz()
    {
        $data = array("X", "5", "9", "15", "23", "Y", "Z");

if (in_array("X", $data))
  {
  echo "Match found";
  }
else
  {
  echo "Match not found";
  }
            
    } 
################################################################################
    public function indexAction() 
    {
$url = 'https://maps.googleapis.com/maps/api/place/textsearch/json?query=restaurants+in+Bangsue&key=YOUR_API_KEY';

//  Initiate curl
$ch = curl_init();
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,$url);
// Execute
$result=curl_exec($ch);
// Closing
curl_close($ch);

// Will dump a beauty json :3
var_dump(json_decode($result, true));
		
    }  
################################################################################
}