<?php namespace JF;
/**

Copyright 2022 JQueryForm.com
License: http://www.jqueryform.com/license.php

FormID:  jqueryform-a12d15
Date:    2022-01-08 17:51:27
Version: v3.0.3
Generated by http://www.jqueryform.com

PHP 5.3+ is required.
If mailgun is used AND the form has file upload field, PHP 5.5+ is required.

*/

class Config {
	private static $config;

    public static function getConfig( $decode = true ){
    	self::$config = self::_getConfig( $decode );
    	self::overwriteConfig();
    	return self::$config;
    }

    private static function _getConfig( $decode = true ){
        ob_start();
        // ---------------------------------------------------------------------
        // JSON format config
        // Note: please make a copy before you edit config manually
        // ---------------------------------------------------------------------

/**JSON_START**/ ?>
{
    "formId": "jqueryform-a12d15",
    "email": {
        "to": "registration@valorsports.com",
        "cc": "",
        "bcc": "",
        "subject": "Registration",
        "template": "\n"
    },
    "admin": {
        "users": "admin:61c3e",
        "dataDelivery": "emailAndFile"
    },
    "thankyou": {
        "url": "",
        "message": "Your form has been sent. Thank You for Registering with Valor Sports Academy Volleyball!",
        "seconds": "10"
    },
    "autoResponse": {
        "includeAttachments": true,
        "subject": "",
        "template": ""
    },
    "seo": {
        "trackerId": "",
        "title": "Valor Registration Form Volleyball",
        "description": "Valor Registration Form Volleyball",
        "keywords": "Valor Sports Academy. volleyball, registration ",
        "author": "Digital Web Concepts DWC"
    },
    "mailer": "local",
    "smtp": {
        "host": "",
        "user": "",
        "password": ""
    },
    "mailgun": {
        "domain": "",
        "apiKey": "",
        "fromEmail": "",
        "fromName": ""
    },
    "styles": {
        "iCheck": {
            "enabled": true,
            "skin": "flat",
            "colorScheme": "yellow"
        },
        "Select2": {
            "enabled": true
        }
    },
    "logics": [],
    "fields": [
        {
            "label": "Page Navigation",
            "field_type": "page_navigation",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "navigation": {
                    "style": "steps",
                    "showNumber": true,
                    "isButtonPrev": false,
                    "titles": [
                        {
                            "id": "f15",
                            "title": "Athlete INFO"
                        },
                        {
                            "id": "f28",
                            "title": "Emergency INFO"
                        },
                        {
                            "id": "f43",
                            "title": "Health INFO"
                        },
                        {
                            "id": "f44",
                            "title": "Medical Release"
                        },
                        {
                            "id": "f0",
                            "title": "Rules and Submit"
                        }
                    ]
                }
            },
            "id": "f16",
            "cid": "c46"
        },
        {
            "label": "ATHLETE INFORMATION",
            "field_type": "section_break",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false,
                    "responsive": true
                },
                "description": "* Are required fields"
            },
            "id": "f12",
            "cid": "c33"
        },
        {
            "label": "First Name",
            "field_type": "name",
            "field_options": {
                "size": "small",
                "sender": "firstname",
                "images": {
                    "urls": "",
                    "slideshow": false,
                    "responsive": true
                },
                "validators": {
                    "required": {
                        "enabled": true
                    }
                },
                "placeholder": "",
                "addon": {
                    "leftIcon": "fa fa-user"
                }
            },
            "id": "f1",
            "cid": "c1",
            "labelHide": false
        },
        {
            "label": "Last Name",
            "field_type": "name",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false,
                    "responsive": true
                },
                "sender": "lastname",
                "validators": {
                    "required": {
                        "enabled": true
                    }
                },
                "addon": {
                    "leftIcon": "fa fa-user"
                }
            },
            "id": "f5",
            "cid": "c32"
        },
        {
            "label": "Gender",
            "field_type": "radio",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false,
                    "responsive": true
                },
                "options": [
                    {
                        "label": "Male",
                        "checked": false
                    },
                    {
                        "label": "Female",
                        "checked": false
                    },
                    {
                        "label": "Other",
                        "checked": false,
                        "value": "#textarea"
                    }
                ],
                "presetJson": "",
                "validators": {
                    "required": {
                        "enabled": true
                    }
                },
                "style": {
                    "columns": "inline"
                }
            },
            "id": "f7",
            "cid": "c36"
        },
        {
            "label": "Address",
            "field_type": "address",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "validators": {
                    "required": {
                        "enabled": true
                    }
                }
            },
            "labelHide": false,
            "gMapApiKey": "",
            "gaCompleteEnabled": false,
            "gaCountryRestrictions": "",
            "gaPostalCodeRestrictions": "",
            "gaLanguage": "",
            "showLabel": false,
            "showPlaceholder": true,
            "showDescription": false,
            "subfields": {
                "addressLine1": {
                    "order": 1,
                    "label": "Address Line1",
                    "field_options": {
                        "enabled": true,
                        "gAddressTypes": "street_number route",
                        "gAddressName": "long_name",
                        "placeholder": "1234 Main St.",
                        "description": "Street address, P.O. box, company name, c\/o",
                        "validators": {
                            "required": {
                                "enabled": true,
                                "msg": "This field is required."
                            }
                        }
                    }
                },
                "addressLine2": {
                    "order": 2,
                    "label": "Address Line2",
                    "field_options": {
                        "enabled": false,
                        "placeholder": "Unit 1234",
                        "description": "Apartment, suite, unit, building, floor, etc.",
                        "validators": {
                            "required": {
                                "enabled": false,
                                "msg": ""
                            }
                        }
                    }
                },
                "city": {
                    "order": 3,
                    "label": "City",
                    "field_options": {
                        "enabled": true,
                        "gAddressTypes": "locality",
                        "gAddressName": "long_name",
                        "placeholder": "City",
                        "description": "City",
                        "validators": {
                            "required": {
                                "enabled": true,
                                "msg": "This field is required."
                            }
                        }
                    }
                },
                "state": {
                    "order": 4,
                    "label": "State",
                    "field_options": {
                        "enabled": true,
                        "gAddressTypes": "administrative_area_level_1",
                        "gAddressName": "long_name",
                        "placeholder": "State",
                        "description": "State \/ Province \/ Region",
                        "validators": {
                            "required": {
                                "enabled": true,
                                "msg": "This field is required."
                            }
                        }
                    }
                },
                "postalCode": {
                    "order": 5,
                    "label": "Postal \/ Zip Code",
                    "field_options": {
                        "enabled": true,
                        "gAddressTypes": "postal_code",
                        "gAddressName": "long_name",
                        "placeholder": "Zip Code",
                        "description": "Postal \/ Zip Code",
                        "validators": {
                            "required": {
                                "enabled": true,
                                "msg": "This field is required."
                            }
                        }
                    }
                },
                "country": {
                    "order": 6,
                    "label": "Country",
                    "field_options": {
                        "enabled": false,
                        "gAddressTypes": "country",
                        "gAddressName": "long_name",
                        "placeholder": "Country",
                        "description": "Country",
                        "validators": {
                            "required": {
                                "enabled": false,
                                "msg": "This field is required."
                            }
                        }
                    }
                }
            },
            "id": "f10",
            "cid": "c29"
        },
        {
            "label": "Phone",
            "field_type": "phone",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false,
                    "responsive": true
                },
                "sender": false,
                "placeholder": "xxx-xxx-xxxx",
                "addon": {
                    "leftIcon": "glyphicon glyphicon-earphone"
                },
                "validators": {
                    "pattern": {
                        "enabled": true,
                        "val": "[0-9]{3,4}[ -.]*[0-9]{3,4}[ -.]*[0-9]{4}",
                        "msg": "Invalid phone number"
                    },
                    "required": {
                        "enabled": true
                    }
                }
            },
            "phone": {
                "validationMethod": "simple",
                "simpleFormat": "xxx-xxx-xxxx",
                "usePhoneLib": "N"
            },
            "id": "f11",
            "cid": "c34"
        },
        {
            "label": "Birthday",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false,
                    "responsive": true
                },
                "size": "small",
                "addon": [],
                "validators": {
                    "required": {
                        "enabled": true
                    }
                },
                "placeholder": "mm\/dd\/yy"
            },
            "id": "f45",
            "cid": "c146"
        },
        {
            "label": "Athlete INFO",
            "field_type": "page_break",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "page": {
                    "title": "Athlete INFO",
                    "labelPrev": "< Back",
                    "labelNext": "Next",
                    "showPageNumnber": false,
                    "pageNumberText": "{page} \/ {total}",
                    "disabled": false
                }
            },
            "id": "f15",
            "cid": "c41"
        },
        {
            "label": "EMERGENCY CONTACT",
            "field_type": "section_break",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false,
                    "responsive": true
                },
                "description": "* Are required fields"
            },
            "id": "f18",
            "cid": "c56"
        },
        {
            "label": "Parent \/ Legal Guardian",
            "field_type": "name",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false,
                    "responsive": true
                },
                "sender": "fullname",
                "description": "Type NONE if not apply",
                "addon": {
                    "leftIcon": "glyphicon glyphicon-user"
                },
                "validators": {
                    "required": {
                        "enabled": true
                    }
                },
                "mainDescription": "Required if under 18"
            },
            "id": "f19",
            "cid": "c66"
        },
        {
            "label": "Cell Phone Parent\/Legal Guardian",
            "field_type": "phone",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false,
                    "responsive": true
                },
                "sender": false,
                "placeholder": "xxx-xxx-xxxx",
                "addon": {
                    "leftIcon": "glyphicon glyphicon-earphone"
                },
                "validators": {
                    "pattern": {
                        "enabled": true,
                        "val": "[0-9]{3,4}[ -.]*[0-9]{3,4}[ -.]*[0-9]{4}",
                        "msg": "Invalid phone number"
                    },
                    "required": {
                        "enabled": false
                    }
                },
                "description": "Required if under 18. "
            },
            "phone": {
                "validationMethod": "simple",
                "simpleFormat": "xxx-xxx-xxxx",
                "usePhoneLib": "N"
            },
            "id": "f20",
            "cid": "c71"
        },
        {
            "label": "Work Phone Parent\/Legal Gaurdian",
            "field_type": "phone",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false,
                    "responsive": true
                },
                "sender": false,
                "placeholder": "xxx-xxx-xxxx",
                "addon": {
                    "leftIcon": "glyphicon glyphicon-earphone"
                },
                "validators": {
                    "pattern": {
                        "enabled": true,
                        "val": "[0-9]{3,4}[ -.]*[0-9]{3,4}[ -.]*[0-9]{4}",
                        "msg": "Invalid phone number"
                    }
                },
                "description": "Required if under 18"
            },
            "phone": {
                "validationMethod": "simple",
                "simpleFormat": "xxx-xxx-xxxx",
                "usePhoneLib": "N"
            },
            "id": "f24",
            "cid": "c96"
        },
        {
            "label": "Email Parent\/Legal Guardian",
            "field_type": "email",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false,
                    "responsive": true
                },
                "sender": false,
                "validators": {
                    "email": {
                        "enabled": true
                    }
                },
                "description": "Required if under 18",
                "addon": {
                    "leftIcon": "glyphicon glyphicon-envelope"
                }
            },
            "id": "f25",
            "cid": "c102"
        },
        {
            "label": "Emergency Contact Name",
            "field_type": "name",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false,
                    "responsive": true
                },
                "sender": "fullname",
                "description": "ALL Ages",
                "validators": {
                    "required": {
                        "enabled": true
                    }
                },
                "addon": {
                    "leftIcon": "glyphicon glyphicon-plus-sign"
                }
            },
            "id": "f21",
            "cid": "c76"
        },
        {
            "label": "Emergency Number",
            "field_type": "phone",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false,
                    "responsive": true
                },
                "sender": false,
                "placeholder": "xxx-xxx-xxxx",
                "addon": {
                    "leftIcon": "glyphicon glyphicon-earphone"
                },
                "validators": {
                    "pattern": {
                        "enabled": true,
                        "val": "[0-9]{3,4}[ -.]*[0-9]{3,4}[ -.]*[0-9]{4}",
                        "msg": "Invalid phone number"
                    },
                    "required": {
                        "enabled": true
                    }
                }
            },
            "phone": {
                "validationMethod": "simple",
                "simpleFormat": "xxx-xxx-xxxx",
                "usePhoneLib": "N"
            },
            "id": "f22",
            "cid": "c81"
        },
        {
            "label": "Emergency Number 2",
            "field_type": "phone",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false,
                    "responsive": true
                },
                "sender": false,
                "placeholder": "xxx-xxx-xxxx",
                "addon": {
                    "leftIcon": "glyphicon glyphicon-earphone"
                },
                "validators": {
                    "pattern": {
                        "enabled": true,
                        "val": "[0-9]{3,4}[ -.]*[0-9]{3,4}[ -.]*[0-9]{4}",
                        "msg": "Invalid phone number"
                    }
                }
            },
            "phone": {
                "validationMethod": "simple",
                "simpleFormat": "xxx-xxx-xxxx",
                "usePhoneLib": "N"
            },
            "id": "f23",
            "cid": "c87"
        },
        {
            "label": "Emergency INFO",
            "field_type": "page_break",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "page": {
                    "title": "Emergency INFO",
                    "labelPrev": "< Back",
                    "labelNext": "Next",
                    "showPageNumnber": false,
                    "pageNumberText": "{page} \/ {total}",
                    "disabled": false
                }
            },
            "id": "f28",
            "cid": "c93"
        },
        {
            "label": "HEALTH INFORMATION",
            "field_type": "section_break",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false,
                    "responsive": true
                },
                "description": "* ALL FIELDS ARE REQUIRED. Thank You!",
                "mainDescription": "It is our policy to contact the Parent\/Legal Guardian immediately in the event of a serious accident \/injury. If this information changes after registration, please contact us ASAP. "
            },
            "id": "f29",
            "cid": "c101"
        },
        {
            "label": "Is Athlete free from infectious disease or conditions?",
            "field_type": "radio",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false,
                    "responsive": true
                },
                "options": [
                    {
                        "label": "Yes",
                        "checked": false
                    },
                    {
                        "label": "No",
                        "checked": false
                    }
                ],
                "presetJson": "",
                "validators": {
                    "required": {
                        "enabled": true
                    }
                },
                "style": {
                    "columns": "inline"
                }
            },
            "id": "f31",
            "cid": "c103"
        },
        {
            "label": "Any activity(ies) the athlete should be restricted from?",
            "field_type": "paragraph",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false,
                    "responsive": true
                },
                "size": "small",
                "validators": {
                    "required": {
                        "enabled": true
                    }
                },
                "description": "",
                "mainDescription": "",
                "placeholder": "Type NONE if nothing applies"
            },
            "id": "f32",
            "cid": "c101"
        },
        {
            "label": "Any physical, mental or other conditions that would require special attention or medication while involved with practice\/sport?",
            "field_type": "paragraph",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false,
                    "responsive": true
                },
                "size": "small",
                "validators": {
                    "required": {
                        "enabled": true
                    }
                },
                "placeholder": "Type NONE if nothing applies"
            },
            "id": "f33",
            "cid": "c110"
        },
        {
            "label": "List any allergies (ex: nuts, dairy, bees...)",
            "field_type": "paragraph",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false,
                    "responsive": true
                },
                "size": "small",
                "validators": {
                    "required": {
                        "enabled": true
                    }
                },
                "placeholder": "Type NONE if nothing applies"
            },
            "id": "f34",
            "cid": "c109"
        },
        {
            "label": "Health INFO",
            "field_type": "page_break",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "page": {
                    "title": "Health INFO",
                    "labelPrev": "< Back",
                    "labelNext": "Next",
                    "showPageNumnber": false,
                    "pageNumberText": "{page} \/ {total}",
                    "disabled": false
                }
            },
            "id": "f43",
            "cid": "c148"
        },
        {
            "label": "MEDICAL RELEASE",
            "field_type": "section_break",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false,
                    "responsive": true
                },
                "mainDescription": "I, on my behalf and behalf of the Minor, acknowledge and agree that such athletic participation subjects Minor to the possibility of physical illness or injury and that I, on my behalf of the Minor, acknowledge that the Minor is in good health, physically fit and mentally capable of participating in volleyball activities and training. In the event of such illness or injury, I authorize Volley Tech Inc. to obtain necessary medical treatment of the Minor, and hereby on my behalf of the Minor, release and hold harmless Volley Tech Inc and releasees in the exercise of this authority. I further acknowledge and understand that I will be responsible for any medical and related bills that may be incurred on behalf of the Minor for any illness or injury that the Minor may sustain during any volleyball activity and\/or training session.\nIf I am over the age of 18 (adult) 'Minor' shall be replaced by 'Athlete Adult' in this Medical Release.",
                "hidden": false
            },
            "id": "f35",
            "cid": "c114"
        },
        {
            "label": "Signature",
            "field_type": "signature",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false,
                    "responsive": true
                },
                "validators": {
                    "required": {
                        "enabled": true
                    }
                }
            },
            "signature": {
                "labelClear": "Clear",
                "width": "310",
                "height": "120"
            },
            "id": "f36",
            "cid": "c117"
        },
        {
            "label": "Electronic Signature",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false,
                    "responsive": true
                },
                "size": "small",
                "addon": [],
                "validators": {
                    "required": {
                        "enabled": true
                    }
                },
                "mainDescription": "Please Initial"
            },
            "id": "f40",
            "cid": "c135"
        },
        {
            "label": "Athlete Release",
            "field_type": "paragraph",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false,
                    "responsive": true
                },
                "size": "small",
                "validators": {
                    "required": {
                        "enabled": true
                    }
                },
                "mainDescription": "List anyone. including parents, to whom your athlete Minor can be released. Identification will be required prior to release. ",
                "placeholder": "Type NONE if over 18"
            },
            "id": "f38",
            "cid": "c126"
        },
        {
            "label": "Medical Release",
            "field_type": "page_break",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "page": {
                    "title": "Medical Release",
                    "labelPrev": "< Back",
                    "labelNext": "Next",
                    "showPageNumnber": false,
                    "pageNumberText": "{page} \/ {total}",
                    "disabled": false
                }
            },
            "id": "f44",
            "cid": "c156"
        },
        {
            "label": "VALOR INTERNATIONAL SPORTS ACADEMY RULES",
            "field_type": "section_break",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false,
                    "responsive": true
                },
                "mainDescription": "I further acknowledge and understand that Valor International Sports Academy has established rules and regulations about conduct, behavior, and activities of all participants by which Minor and I agree to abide during the training, and that Minor and I will be responsible for his\/her\/my failure to abide by those rules and regulations. Minor and I have received, read and understand the rules. Minor and I understand that violation of the rules can result in dismissal from the program.  By placing your electronic signature and your initials, and hitting the submit button, you agree that you are the parent or legal guardian of the above-named athlete, and are over the age of 18.  In case of a medical emergency or general medical care, I give consent for medical treatment for the above-named athlete by authorized personnel.   I understand that the above-named athlete will only be released to the names listed above, an update may be done by email. Identification required. I certify that my child has my permission to attend volleyball training and participate in all activities.  I authorize Valor International Sports Academy to use my athlete's picture, testimony, and video in any Valor International Sports Academy promotional material (web, print, or media) -unless specified otherwise by email. I may receive e-mails from Valor International Sports Academy but can opt out at any time."
            },
            "id": "f39",
            "cid": "c129"
        },
        {
            "label": "Electronic Signature",
            "field_type": "signature",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false,
                    "responsive": true
                },
                "validators": {
                    "required": {
                        "enabled": true
                    }
                }
            },
            "signature": {
                "labelClear": "Clear",
                "width": "310",
                "height": "120"
            },
            "id": "f41",
            "cid": "c137"
        },
        {
            "label": "Electronic Signature Copy",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false,
                    "responsive": true
                },
                "size": "small",
                "addon": [],
                "validators": {
                    "required": {
                        "enabled": true
                    }
                },
                "mainDescription": "Please Initial"
            },
            "cid": "c143",
            "id": "f42"
        },
        {
            "label": "Submit Button",
            "field_type": "submit",
            "required": true,
            "field_options": {
                "page": {
                    "title": "Rules and Submit",
                    "labelPrev": "< Back",
                    "showPageNumnber": false,
                    "pageNumberText": "{page} \/ {total}"
                },
                "images": {
                    "urls": "",
                    "slideshow": false
                }
            },
            "labelHide": true,
            "submit": {
                "label": "",
                "icon": "",
                "checkRequiredFields": ""
            },
            "id": "f0",
            "cid": "c0"
        }
    ],
    "gdpr": {
        "consentFieldId": "",
        "saveData": "always"
    },
    "licenseKey": ""
}
<?php /**JSON_END**/

        $json = ob_get_clean() ;

        return $decode ? json_decode( trim($json), true ) : $json;
    } // end of getConfig()

    private static function getValue( $fieldId, $default = NULL ){
        return isset( $_POST[$fieldId] ) ? $_POST[$fieldId] : $default ;
    }

    private static function overwriteConfig(){
    	//self::get_to();
    }

    private static function get_to(){
    	$value = self::getValue( 'c25' );
    	$to = array(
    		'Option 1' => 'a@a.com',
    		'Option 2' => 'b@b.com',
    		'Option 3' => 'c@c.com',
    	);

    	if( isset( $to[$value] ) ){
    		self::$config['email']['to'] = $to[ $value ];
    	};
    }

} // end of Config class