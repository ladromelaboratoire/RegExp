# Contributing

## Issues

Specific errors or improvements can be raised using Github Issues. You can also submit a Pull Request.

_Please do not post usage, installation, or other requests for help to Issues._
This helps us maintain a clear, uncluttered, and efficient view of the state of this module.

When reporting a bug, it's most helpful to provide the following information, where applicable:

* What steps reproduce the bug?
* Sample string used
* Expected result with explanation
* Version or PHP used

Try to give your issue a title that is succinct and specific. The devs will rename issues as needed to keep track of them.

## Pull Requests

Regex welcomes all contributions.

Briefly: read commit by commit, a PR should tell a clean, compelling story of _one_ improvement. In particular:

* A PR should do one clear thing that obviously improves the class, and nothing more. Making many smaller PRs is better than making one large PR; review effort is superlinear in the amount of code involved.
* Similarly, each commit should be a small, atomic change representing one step in development. PRs should be made of many commits where appropriate.
* Please do rewrite PR history to be clean rather than chronological. Within-PR bugfixes, style cleanups, reversions, etc. should be squashed and should not appear in merged PR history.
* Anything nonobvious from the code should be explained in comments, commit messages, or the PR description, as appropriate.

Please try to limit to patterns you know well because you are entiteled to. I.E. German people are more appropriate than others for data concerning their country. That's the same for any other country or zone.

### Naming convention

All constants are sorted by type, country or zone, tag, all separated with underscore `_`. All names are in capital latin letters. No special characters are accepted. The constant has a clear name which has meaning. I.E a VAT number will start with VAT. The Country or zone will follow the ISO codes. A specific zone `INTL` is used when the regular expression has a worldwide validity. Some examples :
* VAT_FR => match French VAT number
* VAT_EU => match VAT number from EU zone
* VAT_NA => match VAT number for North America zone
* VAT_INTL => match VAT nuber worldwide (should not exist for this particular example)
* PHONE_FR => match all French phone numbers
* PHONE_FR_LANDLINE => match all French landline phone numbers

Thank you
