<?php

/*
 * This file is part of the KDBParametersBundle package.
 *
 * (c) kwattro <https://github.com/kwattro/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KDB\ParametersBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

/**
 * @package KDBParametersBundle
 * @author Christophe Willemsen <willemsen.christophe@gmail.com/>
 */

class ParameterFormType extends AbstractType
{
    private $class;
    
    public function __construct($class)
    {
        $this->class = $class;
    }
        
        public function buildForm(FormBuilder $builder, array $options)
        {
            $builder
            ->add('name')
            ->add('value');
        }
        
        public function getDefaultOptions(array $options)
        {
            return array('data_class' => $this->class);
        }
        
        public function getName()
        {
            return 'kdb_parameters_param';
        }
}

?>