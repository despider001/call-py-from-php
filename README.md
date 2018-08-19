# call_py_from_php

If we want to call a `python` script from `php`, we can use `passthru` function.
##### `passthru("python targetScript.py $var1 $var2");`
* `python` - command for python script
* `targetScript.py` - The target Script that we want to call
* `$var1, $var2...` - Arguments that we want to pass
