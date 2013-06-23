minguo_helper
=============

'minguo_helper' (民國) is a covert helper for Codeigniter.

## Files
```
helpers
- minguo_helper.php
language
- english
-- minguo_lang.php
```

## Usage
### Be in their places
First, put `minguo_helper.php` and `minguo_lang.php` into the helper's folder and language's folder.
### Load
Then, you can load it in when you want to use,

```
$this->load->helper('minguo_helper');
```
or just autoload it:

```
// in application/config/autoload.php around line 67
$autoload['helper'] = array('minguo_helper');
```
### Rock and Roll
There are two usage of this helper, one to convert era to minguo year:

```
// will return '民國102年' in chinese
convert_minguo(2013);
```

or you can do it in opposite way by add `FALSE` as second argument:

```
// will return '西元2013年' in chinese
convert_minguo(102,FALSE);
```
## License
Feel free to use this helper without any license.