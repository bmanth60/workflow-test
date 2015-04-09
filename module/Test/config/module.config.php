<?php
return array(
    'router' => array(
        'routes' => array(
            'test.rest.test' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/test[/:test_id]',
                    'defaults' => array(
                        'controller' => 'Test\\V1\\Rest\\Test\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'test.rest.test',
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'Test\\V1\\Rest\\Test\\TestResource' => 'Test\\V1\\Rest\\Test\\TestResourceFactory',
        ),
    ),
    'zf-rest' => array(
        'Test\\V1\\Rest\\Test\\Controller' => array(
            'listener' => 'Test\\V1\\Rest\\Test\\TestResource',
            'route_name' => 'test.rest.test',
            'route_identifier_name' => 'test_id',
            'collection_name' => 'test',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'Test\\V1\\Rest\\Test\\TestEntity',
            'collection_class' => 'Test\\V1\\Rest\\Test\\TestCollection',
            'service_name' => 'Test',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'Test\\V1\\Rest\\Test\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'Test\\V1\\Rest\\Test\\Controller' => array(
                0 => 'application/vnd.test.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'Test\\V1\\Rest\\Test\\Controller' => array(
                0 => 'application/vnd.test.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'Test\\V1\\Rest\\Test\\TestEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'test.rest.test',
                'route_identifier_name' => 'test_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'Test\\V1\\Rest\\Test\\TestCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'test.rest.test',
                'route_identifier_name' => 'test_id',
                'is_collection' => true,
            ),
        ),
    ),
);
