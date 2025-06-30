<?php

return array(

    'free-shipping' => array(
        'menu' => "ECOMMERCE ENVIO GRATUITO",
        'title' => "Configuración de envio gratuito",
        'config' =>  array(
                array('path' => 'ecommerce/free-shipping/enabled',
                                'type' => 'select',
                                'label' => 'Habilitar metodo de envio',
                                'validation' => array('required' => true),
                                'data' => ['0' => 'No','1' => 'Sí'],
                                'value' => '0'
                                ),
                array('path' => 'ecommerce/free-shipping/titulo',
                        'type' => 'text',
                        'label' => 'Titulo metodo de envio',
                        'validation' => array('required' => true),
                        'value' => ''
                        ),
                array('path' => 'ecommerce/free-shipping/minimo',
                        'type' => 'text',
                        'label' => 'Precio minimo',
                        'validation' => array('required' => true),
                        'value' => ''
                        ),
                array('path' => 'ecommerce/free-shipping/dias',
                        'type' => 'text',
                        'label' => 'Tiempo estimado',
                        'validation' => array('required' => true),
                        'value' => ''
                        )
            )
    )
);
  
    