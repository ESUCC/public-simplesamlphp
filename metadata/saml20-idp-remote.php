<?php
/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */

$metadata['https://idp.esu100.org/simplesaml/saml2/idp/metadata.php'] = array (
    'SingleLogoutService' =>
    array (
        0 =>
        array (
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://idp.esu100.org/simplesaml/module.php/saml/sp/saml2-logout.php/ESU100-MultiAuth',
        ),
    ),
    'AssertionConsumerService' =>
    array (
        0 =>
        array (
            'index' => 0,
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://idp.esu100.org/simplesaml/module.php/saml/sp/saml2-acs.php/ESU100-MultiAuth',
        ),
        1 =>
        array (
            'index' => 1,
            'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:browser-post',
            'Location' => 'https://idp.esu100.org/simplesaml/module.php/saml/sp/saml1-acs.php/ESU100-MultiAuth',
        ),
        2 =>
        array (
            'index' => 2,
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
            'Location' => 'https://idp.esu100.org/simplesaml/module.php/saml/sp/saml2-acs.php/ESU100-MultiAuth',
        ),
        3 =>
        array (
            'index' => 3,
            'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:artifact-01',
            'Location' => 'https://idp.esu100.org/simplesaml/module.php/saml/sp/saml1-acs.php/ESU100-MultiAuth/artifact',
        ),
    ),
    'contacts' =>
    array (
        0 =>
        array (
            'emailAddress' => 'adam.zheng@esu999.merp',
            'contactType' => 'technical',
            'givenName' => 'Adam',
            'surName' => 'Zheng',
        ),
    ),
);

$metadata['https://idp.esu999.org/simplesaml/saml2/idp/metadata.php'] = array (
    'SingleLogoutService' =>
    array (
        0 =>
        array (
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://idp.esu999.org/simplesaml/module.php/saml/sp/saml2-logout.php/ESU999-MultiAuth',
        ),
    ),
    'AssertionConsumerService' =>
    array (
        0 =>
        array (
            'index' => 0,
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://idp.esu999.org/simplesaml/module.php/saml/sp/saml2-acs.php/ESU999-MultiAuth',
        ),
        1 =>
        array (
            'index' => 1,
            'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:browser-post',
            'Location' => 'https://idp.esu999.org/simplesaml/module.php/saml/sp/saml1-acs.php/ESU999-MultiAuth',
        ),
        2 =>
        array (
            'index' => 2,
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
            'Location' => 'https://idp.esu999.org/simplesaml/module.php/saml/sp/saml2-acs.php/ESU999-MultiAuth',
        ),
        3 =>
        array (
            'index' => 3,
            'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:artifact-01',
            'Location' => 'https://idp.esu999.org/simplesaml/module.php/saml/sp/saml1-acs.php/ESU999-MultiAuth/artifact',
        ),
    ),
    'contacts' =>
    array (
        0 =>
        array (
            'emailAddress' => 'adam.zheng@esu999.merp',
            'contactType' => 'technical',
            'givenName' => 'Adam',
            'surName' => 'Zheng',
        ),
    ),
);
