<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.com
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

$items = array(
    'mautic.menu.user.index' => array(
        'options' => array(
            'route'    => 'mautic_user_index',
            'uri'      => 'javascript: void(0)',
            'linkAttributes' => array(
                'onclick' =>
                    'return Mautic.loadMauticContent(\''
                    . $this->container->get('router')->generate('mautic_user_index')
                    . '\', \'#mautic_user_index\', true);',
                'id'      => 'mautic_user_index'
            ),
            'labelAttributes' => array(
                'class'   => 'nav-item-name'
            ),
            'extras'=> array('iconClass' => 'fa-users fa-lg')
        ),
        'children' => array(
            'mautic.menu.user.new' => array(
                'options' => array(
                    'route'    => 'mautic_user_action',
                    'routeParameters' =>
                        array(
                            "objectAction"  => "new"
                        ),
                    'uri'      => 'javascript: void(0)',
                    'linkAttributes' => array(
                        'onclick' =>
                            'return Mautic.loadMauticContent(\'' .
                                $this->container->get('router')->generate('mautic_user_action',
                                    array("objectAction" => "new"))
                            . '\', \'#mautic_user_new\');',
                        'id'      => 'mautic_user_new'
                    ),
                    'labelAttributes' => array(
                        'class'   => 'nav-item-name'
                    ),
                    'extras' => array('iconClass' => 'fa-user')
                )
            ),
            //needed to properly populate the breadcrumbs
            'mautic.menu.user.edit' => array(
                'options' => array(
                    'route'           => 'mautic_user_action',
                    'routeParameters' =>
                        array(
                            "objectAction"  => "edit"
                        ),
                    'uri'             => '#',
                    'attributes'      => array(
                        "class" => "hide"
                    ),
                    'linkAttributes'  => array(
                        'id' => 'mautic_user_action'
                    ),
                    'labelAttributes'  => array(
                        'class' => 'nav-item-name'
                    )
                )
            )
        )
    )
);