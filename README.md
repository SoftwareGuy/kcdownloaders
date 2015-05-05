# kcdownloaders
Python script that downloads mostly all the assets from DMM's KanColle server.
Requires python 3.4 and pycURL.

# How to use
* Clone this into a empty directory.
* Make a 'data' directory.
* Put a valid api_start2.json file in the directory. Please ensure that the file's kanji/japanese isn't mangled, sometimes FTP clients screw things around with file encoding.
* Change to the empty directory containing the script.
* You can either make the python script executable (should work, read the script's comment!) or invoke it with ```python3 <scriptname>.py```
* Grab tea/coffee/energy drink/coke and wait.
* If you get any errors, please let me know.

# What gets downloaded?
* Shipgirl GFX
* Core SWF (bootstrapper)
* Game SWF (Icons, BGM, Font, etc)
* Scene SWF (Admiral office, etc)

# What doesn't get downloaded?
* Titlecalls - will be implemented next revision.
* Shipgirl voices - Bloody cryptic DMM bullshit

# Bugs and things
If you have a bug or issue, please don't hesitate to open a issue ticket.
