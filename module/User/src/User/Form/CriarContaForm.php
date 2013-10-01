<?php

namespace User\Form;

use Zend\Form\Form;


class CriarContaForm extends Form
{
	function __construct($name = null)
	{
		parent::__construct('form-create-account');


		// Tipo Conta
        $this->add(array(
            'name' => 'tipo_conta',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Tipo de conta',
                'options' => array(
                	0 => 'Pessoa Física',
                	1 => 'Pessoa Juridica',
                ),
            ),
            'attributes' => array(
                'class' => 'custom-select span4 no-margin mleft',
            )
        ));


        // Nome Completo
        $this->add(array(
            'name' => 'nome_completo',
            'type' => 'Zend\Form\Element\Text',
            'options' => array(
                'label' => 'Nome Completo',
            ),
            'attributes' => array(
                'class' => 'span8',
            )
        ));


        // Data Nascimento
        $this->add(array(
            'name' => 'data_nasc',
            'type' => 'Zend\Form\Element\Text',
            'options' => array(
                'label' => 'Data Nascimento',
                'options' => array(
                	0 => 'Pessoa Física',
                	1 => 'Pessoa Juridica',
                ),
            ),
            'attributes' => array(
                'class' => 'span3',
            )
        ));


        // Sexo
        $this->add(array(
            'name' => 'sexo',
            'type' => 'Zend\Form\Element\Radio',
            'options' => array(
                'label' => 'Sexo',
                'value_options' => array(
		            'Masculino' => array(
		            	'label' => 'Masculino',
		            	'value' => 'M',
		            	'checked'> 'checked',
		            ),
		            'Feminino' => array(
		            	'label' => 'Feminino',
		            	'value' => 'F',
		            ),
		        ),
            ),
            'attributes' => array(
                'data-toggle' => 'radio',
                'class' => 'flatui-radio',
            )
        ));


        // E-mail
        $this->add(array(
            'name' => 'email',
            'type' => 'Zend\Form\Element\Text',
            'options' => array(
                'label' => 'E-mail',
            ),
            'attributes' => array(
                'class' => 'span6',
            )
        ));


        // Telefone
        $this->add(array(
            'name' => 'telefone',
            'type' => 'Zend\Form\Element\Text',
            'options' => array(
                'label' => 'Telefone',
            ),
            'attributes' => array(
                'class' => 'span3',
            )
        ));


        // Celular
        $this->add(array(
            'name' => 'celular',
            'type' => 'Zend\Form\Element\Text',
            'options' => array(
                'label' => 'Celular',
            ),
            'attributes' => array(
                'class' => 'span3',
            )
        ));


        // CEP
        $this->add(array(
            'name' => 'cep',
            'type' => 'Zend\Form\Element\Text',
            'options' => array(
                'label' => 'CEP',
            ),
            'attributes' => array(
                'class' => 'span3',
            )
        ));


        // Endereco
        $this->add(array(
            'name' => 'endereco',
            'type' => 'Zend\Form\Element\Text',
            'options' => array(
                'label' => 'Endereço',
            ),
            'attributes' => array(
                'class' => 'span10',
            )
        ));


        // Numero
        $this->add(array(
            'name' => 'numero',
            'type' => 'Zend\Form\Element\Text',
            'options' => array(
                'label' => 'Número',
            ),
            'attributes' => array(
                'class' => 'span2',
            )
        ));


        // Complemento
        $this->add(array(
            'name' => 'complemento',
            'type' => 'Zend\Form\Element\Text',
            'options' => array(
                'label' => 'Complemento',
            ),
            'attributes' => array(
                'class' => 'span3',
            )
        ));


        // Cidade
        $this->add(array(
            'name' => 'cidade',
            'type' => 'Zend\Form\Element\Text',
            'options' => array(
                'label' => 'Cidade',
            ),
            'attributes' => array(
                'class' => 'span4',
            )
        ));


        // Bairro
        $this->add(array(
            'name' => 'bairro',
            'type' => 'Zend\Form\Element\Text',
            'options' => array(
                'label' => 'Bairro',
            ),
            'attributes' => array(
                'class' => 'span3',
            )
        ));


        // UF
        $this->add(array(
            'name' => 'uf',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'UF',
                'options' => array(
                	0 => 'Estado 0',
                	1 => 'Estado 1',
                	2 => 'Estado 2',
                	3 => 'Estado 3',
                	4 => 'Estado 4',
                	5 => 'Estado 5',
                ),
            ),
            'attributes' => array(
                'class' => 'custom-select span2 no-margin mleft',
            )
        ));


        // Senha
        $this->add(array(
            'name' => 'senha',
            'type' => 'Zend\Form\Element\Password',
            'options' => array(
                'label' => 'Senha',
            ),
            'attributes' => array(
                'class' => 'span3',
            )
        ));


        // Confirmar Senha
        $this->add(array(
            'name' => 'confirmar_senha',
            'type' => 'Zend\Form\Element\Password',
            'options' => array(
                'label' => 'Confirmar Senha',
            ),
            'attributes' => array(
                'class' => 'span3',
            )
        ));


        // Deseja receber notificações
        $this->add(array(
            'name' => 'noticicacoes',
            'type' => 'Zend\Form\Element\Checkbox',
            'options' => array(
                'label' => 'Deseja receber notificações dos anúncios em sua região?',
                'checked_value' => 1,
            	'use_hidden_element' => false,
            ),
        ));


        // Button Cadastrar
        $this->add(array(
            'name' => 'cadastrar',
            'type' => 'Zend\Form\Element\Submit',
            'attributes' => array(
                'value' => 'Cadastrar',
                'class' => 'btn btn-large span2 btn-inverse pull-right',
            )
        ));
	}
}