<?php

namespace Test\Functional;

require_once(__DIR__ . '/../../src/Models/checkRequest.php');

class SnapCXAddressValidationTest extends BaseTestCase
{

    public function testListMetrics()
    {

        $routes = [
            'validateGlobalAddress',
            'validateUSAddress'
        ];

        foreach ($routes as $file) {
            $var = '{  
                    }';
            $post_data = json_decode($var, true);

            $response = $this->runApp('POST', '/api/SnapCXAddressValidation/' . $file, $post_data);

            $this->assertEquals(200, $response->getStatusCode(), 'Error in ' . $file . ' method');
        }
    }

}
