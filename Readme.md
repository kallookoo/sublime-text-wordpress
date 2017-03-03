## WordPress Completions

Is a collection of the completions and some snippets for Sublime Text

### Completions List

| Type         | Completions |
| ------------ | ----------- |
| Functions    | **2761**    |
| Actions      | **642**     |
| Filters      | **1386**    |
| Classes      | **352**     |
| Methods      | **3334**    |
| Constants    | **517**     |
| Capabilities | **56**      |

### How to use

* Use `wp-` for view some completions
* Use `add_action-` for view actions completions
* Use `add_filter-` for view filters completions
* Use functions, constants or classes names, for e.g. plugin_dir... for view completions
* Use `name_of_class-method_name` for view method completions. e.g `WP_Error-add` by default all Classes wrap with sublime format completions
* Use `ctrl+space` or `alt+/` in linux for call completions if tag `<?php` not is defined. e.g. for create plugin header in empty file.
* On some cause the first "tab" deletes all parameters instead of having to tab through each one:
	- First Tab --> Select all parameters
	- Each Tab There after --> Selects each individual parameter or block

### Another Informations

* More info inside of [wiki](https://github.com/23r9i0/sublime-text-wordpress/wiki) page.
* Deprecated Functions, Constants, Classes, Methods, Actions, Filters have been removed
* Back compatibility is not included, as support for PHP versions
* Actions or Filter add two version of the completion only this not is dynamic name
	- Example of completion file for Hooks:

	```
	        {
	            "trigger": "add_action-init\tWP Action",
	            "contents": "add_action( 'init', ${1:\\$function_to_add}, ${2:10} );"
	        },
	        {
	            "trigger": "init\tWP Action Name",
	            "contents": "init"
	        },
	```

	- This first trigger use add_action- for get all actions and continue by name of the action, returns everything you need to create.
	- The second trigger simply use the name and return this name.
* Some snippet last index if used for delete this comments
* If use Sublime Text before 3092 is possible what some snippet not working.
* If your problem with `alt+/` to show completions popup on linux, set key bindings with `ctrl+space` by example.

### Install

Find WordPress Completions in Package Control

### Issues

You found some issue, please create an [issue](https://github.com/23r9i0/sublime-text-wordpress/issues/new) to solve it.

### Donate

You are welcome support this project using [Paypal](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=VXY7T7VKL78VA)