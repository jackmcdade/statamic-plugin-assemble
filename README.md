Statamic Plugin - Assemble
==========================

Need a dynamic variable name? Assemble it out of other things! Like other variable names.

## Installing
1. Download the zip file (or clone via git) and unzip it or clone the repo into `/_add-ons/`.
2. Ensure the folder name is `disqus` (Github messes with the download folder name).
3. Enjoy.

## Usage

Put the tag on a page and do the thing. 
    
    {{ assemble var="{segment_1}_title" }} // could return your {{ en_title }} global var

## Parameters

- `var`: Assemble a variable name out of string literals and variables. Accepts `:` colon notation for fetching deep array values.
