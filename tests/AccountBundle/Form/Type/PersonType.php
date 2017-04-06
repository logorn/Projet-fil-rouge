<?php
// tests/AppBundle/Form/Type/TestedTypeTest.php

namespace AccountBundle\Tests\Form\Type;

use AccountBundle\Form\PersonType;
use AccountBundle\Entity\Person;
use Symfony\Component\Form\Test\TypeTestCase;

class PersonTypeTest extends TypeTestCase
{
    public function testSubmitValidData()
    {
        $formData = array(
            'firstName' => 'test',
            'lastName' => 'test',
            'email' => 'john-doe@otonmail.com',
            'password' => 'Abcd123!',
            'password' => 'Abcd123!'
        );

        $form = $this->factory->create(PersonType::class);

        $object = Person::fromArray($formData);

        // submit the data to the form directly
        $form->submit($formData);

        $this->assertTrue($form->isSynchronized());
        $this->assertEquals($object, $form->getData());

        $view = $form->createView();
        $children = $view->children;

        foreach (array_keys($formData) as $key) {
            $this->assertArrayHasKey($key, $children);
        }
    }

    /**
     * @dataProvider getNotValidTestData
     */
    public function testSubmitNotValidData($data)
    {
        $formData = array(
            'firstName' => $data['firstName'],
            'lastName' => $data['lastName'],
            'email' => $data['email'],
            'password' => $data['password'],
            'password' => $data['password']
        );

        $form = $this->factory->create(PersonType::class);

        $object = Person::fromArray($formData);

        // submit the data to the form directly
        $form->submit($formData);

        $this->assertTrue($form->isSynchronized());
        $this->assertEquals($object, $form->getData());

        $view = $form->createView();
        $children = $view->children;

        foreach (array_keys($formData) as $key) {
            $this->assertArrayHasKey($key, $children);
        }
    }

    public function getNotValidTestData()
    {
        return array(
            array(
                'data' => array(
                    'firstName' => 'test2',
                    'lastName' => 'test',
                    'email' => 'john-doe@otonmail.com',
                    'password' => '123',
                    'password' => '123'
                )
            ),
            array(
                'data' => array(),
            )
        );
    }
}