<?php

namespace GosaPrivacyIdea\personal\privacyidea;

$success = bindtextdomain('GosaPrivacyIdea', dirname(dirname(__FILE__)) . '/locale/compiled');

function __(string $GETTEXT): string
{
    return dgettext('GosaPrivacyIdea', $GETTEXT);
}

