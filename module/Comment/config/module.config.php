<?php
return array(
    'router' => array(
        'routes' => array(
            'comment.rest.comments' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/comments[/:comments_id]',
                    'defaults' => array(
                        'controller' => 'Comment\\V1\\Rest\\Comments\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'comment.rest.comments',
        ),
    ),
    'zf-rest' => array(
        'Comment\\V1\\Rest\\Comments\\Controller' => array(
            'listener' => 'Comment\\V1\\Rest\\Comments\\CommentsResource',
            'route_name' => 'comment.rest.comments',
            'route_identifier_name' => 'comments_id',
            'collection_name' => 'comments',
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
            'entity_class' => 'Comment\\V1\\Rest\\Comments\\CommentsEntity',
            'collection_class' => 'Comment\\V1\\Rest\\Comments\\CommentsCollection',
            'service_name' => 'Comments',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'Comment\\V1\\Rest\\Comments\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'Comment\\V1\\Rest\\Comments\\Controller' => array(
                0 => 'application/vnd.comment.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'Comment\\V1\\Rest\\Comments\\Controller' => array(
                0 => 'application/vnd.comment.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'Comment\\V1\\Rest\\Comments\\CommentsEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'comment.rest.comments',
                'route_identifier_name' => 'comments_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'Comment\\V1\\Rest\\Comments\\CommentsCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'comment.rest.comments',
                'route_identifier_name' => 'comments_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'db-connected' => array(
            'Comment\\V1\\Rest\\Comments\\CommentsResource' => array(
                'adapter_name' => 'MySql',
                'table_name' => 'Comments',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'Comment\\V1\\Rest\\Comments\\Controller',
                'entity_identifier_name' => 'id',
            ),
        ),
    ),
);
