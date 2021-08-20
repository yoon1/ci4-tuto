<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list' => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
        'my_list' => '_errors_list'
    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------
    public $signup = [
        'username' => [
            'label' => 'Username',
            'rules' => 'required',
            'errors' => [
                'required' => 'You must choose a {field}.'
            ]
        ],
        'email' => [
            'rules' => 'required|valid_email',
            'errors' => [
                'valid_email' => 'Please check the Email field. It does not appear to be valid.'
            ]
        ],
    ];
}
