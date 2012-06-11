# lithium_textmate

A TextMate Bundle for Lithium

This TextMate bundle includes grammar and completions for the Lithium API, plus common code-generation snippets.


## Installation

Fire up Terminal, and enter the following commands:

	cd /path/to/libraries
	git clone https://github.com/bruensicke/lithium_textmate.git

	rm -rf ~/Library/Application\ Support/TextMate/Bundles/Lithium.tmbundle
	ln -s `pwd`/lithium_textmate/Lithium.tmbundle ~/Library/Application\ Support/TextMate/Bundles/


Then, select `Reload Bundles` from the `Bundles > Bundle Editor` menu in TextMate.

## Themes

The plugin also includes two themes (light and dark) in the `/themes` folder. Each of these will be installed to TextMate automatically on opening.

![The Union of RAD dev theme](http://img.skitch.com/20100130-k3fwqjd8prwj13e2u5a18ibsnb.jpg)

## Error Linking

The TextMate bundle itself is now wrapped in a plugin that provides some additional integration for Lithium. To take advantage, add the following to `config/bootstrap/libraries.php`:

	Libraries::add('lithium_textmate');

Finally, be sure to clear your cache (typically APC or file).

Now, when running the test suite, failures and exceptions will be linked to the file and line number where they occurred, and clicking them will open the file in TextMate, with the line number selected.

## Credits

* [li3](http://www.lithify.me)
* [Nate Abele](https://github.com/nateabele/li3_mustache)
