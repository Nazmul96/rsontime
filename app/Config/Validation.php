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
    //admin validation----------
    public $adminValidate = [
        'email' => [
            'rules'  => 'required|valid_email',
            'errors' => [
                'required' => 'The Email field is required',
                'valid_email'=>'It does not appear to be valid'
            ],
        ],
        'password' => [
            'rules'  => 'required',
            'errors' => [
                'required' => 'The Password field is required',
            ],
        ],

    ];

    //subscriber validation----------
    public $subscriberValidate = [
        'email_address' => [
            'rules'  => 'required|is_unique[subscribers.email_address]|valid_email',
            'errors' => [
                'required' => 'The email field is required',
                'is_unique' => 'This email already exits',
                'valid_email'=>'It does not appear to be valid'
            ],
        ],

    ];

    //setting validation------------
    public $settingValidate = [
        'full_name' => [
            'rules'  => 'required',
            'errors' => [
                'required' => 'The full name field is required',
            ],
        ],

        'user_name' => [
            'rules'  => 'required',
            'errors' => [
                'required' => 'The user name field is required',
            ],
        ],

        'email' => [
            'rules'  => 'required|valid_email',
            'errors' => [
                'required' => 'The email field is required',
                'valid_email'=> 'The valid email is required',
            ],
        ],


        'profile_image' => 'ext_in[profile_image,png,PNG,jpg,gif]|max_size[profile_image,1000]',

        'favicon' => 'ext_in[favicon,png,PNG,jpg,gif]|max_size[favicon,1000]',

        'facebook' => [
            'rules'  => 'required',
            'errors' => [
                'required' => 'The facebook field is required',
            ],
        ],

        'twitter' => [
            'rules'  => 'required',
            'errors' => [
                'required' => 'The twitter field is required',
            ],
        ],

        'instagram' => [
            'rules'  => 'required',
            'errors' => [
                'required' => 'The instagram field is required',
            ],
        ],

        'youtube' => [
            'rules'  => 'required',
            'errors' => [
                'required' => 'The youtube field is required',
            ],
        ],

        'whatsapp' => [
            'rules'  => 'required',
            'errors' => [
                'required' => 'The whatsapp field is required',
            ],
        ],

        'skype' => [
            'rules'  => 'required',
            'errors' => [
                'required' => 'The skype field is required',
            ],
        ],

        'page_name' => [
            'rules'  => 'required',
            'errors' => [
                'required' => 'The page name field is required',
            ],
        ],

        'meta_keyword' => [
            'rules'  => 'required',
            'errors' => [
                'required' => 'The meta keyword field is required',
            ],
        ],

        'meta_author' => [
            'rules'  => 'required',
            'errors' => [
                'required' => 'The meta author field is required',
            ],
        ],

        'meta_description' => [
            'rules'  => 'required',
            'errors' => [
                'required' => 'The meta description field is required',
            ],
        ],

        'robots_name' => [
            'rules'  => 'required',
            'errors' => [
                'required' => 'The Robots name field is required',
            ],
        ],

        'robots_content' => [
            'rules'  => 'required',
            'errors' => [
                'required' => 'The Robots name field is required',
            ],
        ],

    ];
    //counter validation--------
    public $counterValidate = [
        'release_date' => [
            'rules'  => 'required',
            'errors' => [
                'required' => 'The release date field is required',
            ],
        ],

        'release_time' => [
            'rules'  => 'required',
            'errors' => [
                'required' => 'The release time field is required',
            ],
        ],


        'title' => [
            'rules'  => 'required',
            'errors' => [
                'required' => 'The title field is required',
            ],
        ],

        'sub_title' => [
            'rules'  => 'required',
            'errors' => [
                'required' => 'The sub title field is required',
            ],
        ],

        'shot_description' => [
            'rules'  => 'required',
            'errors' => [
                'required' => 'The shot description field is required',
            ],
        ],

        'new_theme' => [
            'rules'  => 'required',
            'errors' => [
                'required' => 'The theme field is required',
            ],
        ],

        'background_video' => [
            'rules'  => 'ext_in[background_video,mp4]|max_size[background_video,50600]',
        ],
        


        // 'background_color' => [
        //     'rules'  => 'required',
        //     'errors' => [
        //         'required' => 'The background color field is required',
        //     ],
        // ],

        // 'background_image' => 'ext_in[background_image,png,PNG,jpg,gif]|max_size[background_image,1000]',

        // 'text_color' => [
        //     'rules'  => 'required',
        //     'errors' => [
        //         'required' => 'The text color field is required',
        //     ],
        // ],

        // 'button_color' => [
        //     'rules'  => 'required',
        //     'errors' => [
        //         'required' => 'The button color field is required',
        //     ],
        // ],

        // 'heading_font' => [
        //     'rules'  => 'required',
        //     'errors' => [
        //         'required' => 'The heading font field is required',
        //     ],
        // ],

        // 'heading_font_weight' => [
        //     'rules'  => 'required',
        //     'errors' => [
        //         'required' => 'The heading font weight field is required',
        //     ],
        // ],

        // 'heading_font_color' => [
        //     'rules'  => 'required',
        //     'errors' => [
        //         'required' => 'The heading font color field is required',
        //     ],
        // ],

        // 'heading_font_style' => [
        //     'rules'  => 'required',
        //     'errors' => [
        //         'required' => 'The heading font style field is required',
        //     ],
        // ],

        // 'paragraph_font' => [
        //     'rules'  => 'required',
        //     'errors' => [
        //         'required' => 'The paragraph font field is required',
        //     ],
        // ],

        // 'paragraph_font_weight' => [
        //     'rules'  => 'required',
        //     'errors' => [
        //         'required' => 'The paragraph font weight field is required',
        //     ],
        // ],

        // 'paragraph_font_color' => [
        //     'rules'  => 'required',
        //     'errors' => [
        //         'required' => 'The paragraph font color field is required',
        //     ],
        // ],

        // 'paragraph_font_style' => [
        //     'rules'  => 'required',
        //     'errors' => [
        //         'required' => 'The paragraph font style field is required',
        //     ],
        // ],

    ];
    //mail subcriber page mailValidate
    public $mailValidate = [
        'mail_subject' => [
            'rules'  => 'required',
            'errors' => [
                'required' => 'The mail subject field is required',
            ],
        ],

        'mail_body' => [
            'rules'  => 'required',
            'errors' => [
                'required' => 'The mail body field is required',
            ],
        ],

];
    //Email setup ---------
    public $EmailValidate = [
        'sent_from_name' => [
            'rules'  => 'required',
            'errors' => [
                'required' => 'The sent from name field is required',
            ],
        ],

        'sent_from_email' => [
            'rules'  => 'required',
            'errors' => [
                'required' => 'The sent from email field is required',
            ],
        ],

        'supported_mail_services' => [
            'rules'  => 'required',
            'errors' => [
                'required' => 'The supported mail services field is required',
            ],
        ],
];

public $smtpValidate = [
    'smtp_host' => [
        'rules'  => 'required',
        'errors' => [
            'required' => 'The smtp host field is required',
        ],
    ],
    'port' => [
        'rules'  => 'required',
        'errors' => [
            'required' => 'The port field is required',
        ],
    ],
    'password_access' => [
        'rules'  => 'required',
        'errors' => [
            'required' => 'The password access field is required',
        ],
    ],


]; 

public $sendmailValidate=[    
    'mailpath' => [
        'rules'  => 'required',
        'errors' => [
            'required' => 'The mailpath field is required',
        ],
    ],
];

    //About us page validation-----------
    public $aboutValidate = [
        'page_title' => [
            'rules'  => 'required',
            'errors' => [
                'required' => 'The page title field is required',
            ],
        ],

        'page_description' => [
            'rules'  => 'required',
            'errors' => [
                'required' => 'The page description field is required',
            ],
        ],

    ];

   //contact us page validation-----------
   public $contactValidate = [
    'page_title' => [
        'rules'  => 'required',
        'errors' => [
            'required' => 'The page title field is required',
        ],
    ],

    'email_address1' => [
        'rules'  => 'required',
        'errors' => [
            'required' => 'The email address 1 field is required',
        ],
    ],

    'email_address2' => [
        'rules'  => 'required',
        'errors' => [
            'required' => 'The email address 2 field is required',
        ],
    ],

    'phone_number1' => [
        'rules'  => 'required',
        'errors' => [
            'required' => 'The phone number 1 field is required',
        ],
    ],

    'phone_number2' => [
        'rules'  => 'required',
        'errors' => [
            'required' => 'The phone_number 2 field is required',
        ],
    ],

    'address1' => [
        'rules'  => 'required',
        'errors' => [
            'required' => 'The address 1 field is required',
        ],
    ],

    // 'address2' => [
    //     'rules'  => 'required',
    //     'errors' => [
    //         'required' => 'The address 2 field is required',
    //     ],
    // ],

    'website_url' => [
        'rules'  => 'required',
        'errors' => [
            'required' => 'The website url field is required',
        ],
    ],

    // 'google_map_iFrame' => [
    //     'rules'  => 'required',
    //     'errors' => [
    //         'required' => 'The google map iFrame field is required',
    //     ],
    // ],

    'page_description' => [
        'rules'  => 'required',
        'errors' => [
            'required' => 'The page description field is required',
        ],
    ],

    'site_key' => [
        'rules'  => 'required',
        'errors' => [
            'required' => 'The site key field is required',
        ],
    ],

    'secret_key' => [
        'rules'  => 'required',
        'errors' => [
            'required' => 'The secret key field is required',
        ],
    ],

];

//contact validation--------

public $contactusValidate = [
    'name' => [
        'rules'  => 'required',
        'errors' => [
            'required' => 'The name field is required',
        ],
    ],

    'email' => [
        'rules'  => 'required',
        'errors' => [
            'required' => 'The email field is required',
        ],
    ],

    'description' => [
        'rules'  => 'required',
        'errors' => [
            'required' => 'The description field is required',
        ],
    ],
    
    'recaptcha' => [
        'rules'  => 'required',
        'errors' => [
            'required' => 'Capcha error',
        ],
    ],

];

//contactusValidate_without_capcha
public $contactusValidate_without_capcha = [
    'name' => [
        'rules'  => 'required',
        'errors' => [
            'required' => 'The name field is required',
        ],
    ],

    'email' => [
        'rules'  => 'required',
        'errors' => [
            'required' => 'The email field is required',
        ],
    ],

    'description' => [
        'rules'  => 'required',
        'errors' => [
            'required' => 'The description field is required',
        ],
    ],   

];
    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------
}
