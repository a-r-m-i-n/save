# TYPO3 CMS Extension: Save with shortcut

Adds the possibility to use the keyboard shortcut CTRL+S to save in TYPO3 CMS backend.

![EXT:save extension icon](Resources/Public/Icons/Extension.png "EXT:save extension icon")

## Installation

Just fetch **EXT:save** from TER or **t3/save** from Packagist and install it.
Clear the system caches and reload the backend in your browser.

## Usage

Just press ``CTRL+S`` when you want to save the record you are currently working on. Form validation will be triggered
and if successful, the record will be saved.

## Configuration

When **EXT:save** is installed, this feature is globally enabled by default.
You can disable it for your user in your user settings.

![User settings in TYPO3 CMS backend](Resources/Public/Images/user-settings.png "User settings in TYPO3 CMS backend")

## Support

If you like this TYPO3 extension, you can [donate some funds](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=2DCCULSKFRZFU) to support further development. Thank you!

For help please visit the [issue section](https://github.com/a-r-m-i-n/save/issues) on GitHub.

## DDEV Environment

This repository contains a handy DDEV configuration, which allows you to run the extension in a local TYPO3 environment.

More info: https://github.com/a-r-m-i-n/ddev-for-typo3-extensions


## Changelog

### 1.2.0

- [FEATURE] Add TYPO3 11 compatibility
- [DEVOPS] Add DDEV configuration
- [TASK] Remove old Bitbucket pipeline configuration and Vagrantfile

### 1.1.0

- **FEATURE** - Add TYPO3 10 support
- **TASK** - Make CTRL+S also work inside of CKeditor
- **TASK** - Improve README

### 1.0.0

- First release
