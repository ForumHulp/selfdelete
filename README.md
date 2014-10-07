Self delete
===========

A user can delete his own account.

[![Build Status](https://travis-ci.org/ForumHulp/selfdelete.svg?branch=master)](https://travis-ci.org/ForumHulp/selfdelete)

## Requirements
* phpBB 3.1-dev or higher
* PHP 5.3 or higher

## Installation
You can install this on the latest copy of the develop branch ([phpBB 3.1-dev](https://github.com/phpbb/phpbb3)) by doing the following:

1. Copy the entire contents of this repo to to `FORUM_DIRECTORY/ext/forumhulp/selfdelete/`
2. Navigate in the ACP to `Customise -> Extension Management -> Extensions`.
3. Click Self delete => `Enable`.
4. Or use our ([Upload Extensions](https://github.com/ForumHulp.com/upload)).

Note: This extension is in development. Installation is only recommended for testing purposes and is not supported on live boards. This extension will be officially released following phpBB 3.1.0. Extension depends on two core changes.

## Uninstallation
Navigate in the ACP to `Customise -> Extension Management -> Extensions` and click Self delete => `Disable`.

To permanently uninstall, click `Delete Data` and then you can safely delete the `/ext/forumhulp/selfdelete/` folder or use our ([Upload Extensions](https://github.com/ForumHulp.com/upload)).

## License
[GNU General Public License v2](http://opensource.org/licenses/GPL-2.0)

© 2014 - John Peskens (ForumHulp.com)