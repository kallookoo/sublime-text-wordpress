## WordPress Completions

Is a collection of the completions and some snippets for Sublime Text

### Functions Completions: **2663**

| Type   | Package         | Version | Completions |
| ------ | --------------- | ------- | ----------- |
| Core   | WordPress       | 4.6.1   | **2403**    |
| Plugin | Akismet         | 3.2     | **62**      |
| Theme  | Twenty Ten      | 2.2     | **13**      |
| Theme  | Twenty Eleven   | 2.5     | **40**      |
| Theme  | Twenty Twelve   | 2.1     | **21**      |
| Theme  | Twenty Thirteen | 2.0     | **23**      |
| Theme  | Twenty Fourteen | 1.8     | **30**      |
| Theme  | Twenty Fifteen  | 1.6     | **33**      |
| Theme  | Twenty Sixteen  | 1.3     | **38**      |

### Actions Completions: **627**

| Type   | Package         | Version | Completions |
| ------ | --------------- | ------- | ----------- |
| Core   | WordPress       | 4.6.1   | **604**     |
| Plugin | Akismet         | 3.2     | **13**      |
| Theme  | Twenty Ten      | 2.2     | **1**       |
| Theme  | Twenty Eleven   | 2.5     | **2**       |
| Theme  | Twenty Twelve   | 2.1     | **1**       |
| Theme  | Twenty Thirteen | 2.0     | **1**       |
| Theme  | Twenty Fourteen | 1.8     | **3**       |
| Theme  | Twenty Fifteen  | 1.6     | **1**       |
| Theme  | Twenty Sixteen  | 1.3     | **1**       |

### Filters Completions: **1324**

| Type   | Package         | Version | Completions |
| ------ | --------------- | ------- | ----------- |
| Core   | WordPress       | 4.6.1   | **1273**    |
| Plugin | Akismet         | 3.2     | **12**      |
| Theme  | Twenty Ten      | 2.2     | **5**       |
| Theme  | Twenty Eleven   | 2.5     | **12**      |
| Theme  | Twenty Twelve   | 2.1     | **3**       |
| Theme  | Twenty Thirteen | 2.0     | **2**       |
| Theme  | Twenty Fourteen | 1.8     | **4**       |
| Theme  | Twenty Fifteen  | 1.6     | **5**       |
| Theme  | Twenty Sixteen  | 1.3     | **8**       |

### Classes Completions: **327**

| Type   | Package         | Version | Completions |
| ------ | --------------- | ------- | ----------- |
| Core   | WordPress       | 4.6.1   | **320**     |
| Plugin | Akismet         | 3.2     | **4**       |
| Theme  | Twenty Eleven   | 2.5     | **1**       |
| Theme  | Twenty Fourteen | 1.8     | **2**       |

### Methods Completions: **3094**

| Type   | Package         | Version | Completions |
| ------ | --------------- | ------- | ----------- |
| Core   | WordPress       | 4.6.1   | **2974**    |
| Plugin | Akismet         | 3.2     | **93**      |
| Theme  | Twenty Eleven   | 2.5     | **6**       |
| Theme  | Twenty Fourteen | 1.8     | **21**      |

### Constants Completions: **513**

| Type   | Package   | Version | Completions |
| ------ | --------- | ------- | ----------- |
| Core   | WordPress | 4.6.1   | **509**     |
| Plugin | Akismet   | 3.2     | **4**       |

### Capabilities Completions: **56**

| Type | Package   | Version | Completions |
| ---- | --------- | ------- | ----------- |
| Core | WordPress | 4.6.1   | **56**      |

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