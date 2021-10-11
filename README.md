# caption Plugin for DokuWiki

Add figure and table captions

Original fork from Till Biskup and mostly re-written. 
http://till-biskup.de/de/software/dokuwiki/caption


Fixes: 
- No more 'dangerous' string searches to set reference links.
- Change syntax to allow alignment variable (left, center, right, flex(left|center|right)).
- Add ability to have subfigures/tables if your template allows.
- Code easy to expand to caption label more tags if needed.
- Updated some css styles.


New Syntax/ Example:
-------------


```
<figure alignment| fig_label>
	<subfigure left| subfig_label1>
		{{windtunnels:history:old_pics_0068.jpg?direct&200}}
		<figcaption>Subfig caption1</figcaption>
	</subfigure>
	<subfigure left| subfig_label2>
		{{windtunnels:history:old_pics_0068.jpg?direct&200}}
		<figcaption>Subfig caption2</figcaption>
	</subfigure>
	<figcaption>Main caption</figcaption>
</figure>
```

In text referencing:
-------------
```
{{ref>label}}
```
Warning: References may render unexpected results if your labels are not unique across all figures, subfigures, tables etc.!

Set counter:
-------------

```
{{setcounter figure=5}}
```

Example output:
-------------

![Example output](example.png "output of Example")

If you install this plugin manually, make sure it is installed in
lib/plugins/caption/ - if the folder is called different it
will not work!

Please refer to http://www.dokuwiki.org/plugins for additional info
on how to install plugins in DokuWiki.

----

Copyright (C) Ben van Magill <ben.vanmagill16@gmail.com>
Copyright (C) Till Biskup <till@till-biskup>

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; version 2 of the License

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

See the LICENSE file in your DokuWiki folder for details
