A [FatFreeFramework(f3)](http://fatfreeframework.com/) HMVC template
=======

When you clone this repo make sure to run this commands to initialize and fetch the f3 framework:
```
git submodule init
git submodule update
```

Consider the following directory and file structure:
```
app/
  + main/
    + controllers/
      - Controller.php  (Default module controller)
        > index()
        > page2()
        ...
      - Other.php       (Additional controller)
        > index()
        > page2()
        ...
      ...
    + dict/             (LOCALES, optional)
      - en.ini
      - ru.ini
      ...
    + models/
      - User.php
      - Group.php
      ...
    + views/
      - index.html
      - page2.html
      ...
  + blog/
    + controllers/
      - Controller.php  (Default module controller)
        > index()
        > page2()
        ...
      - Other.php       (Additional controller)
        > index()
        > page2()
        ...
      ...
    + dict/             (LOCALES, optional)
      - en.ini
      - ru.ini
      ...
    + models/
      - User.php
      - Group.php
      ...
    + views/
      - index.html
      - page2.html
      ...
```

Lets assume this repo is sitting at the root of localhost `http://localhost/`. The following table shows which controller and method is called per request.

<table>
	<thead>
		<tr>
			<th>URI</th>
			<th>Controller Call</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>http://localhost/</td>
			<td>app/main/controllers/Controller.php > index()</td>
		</tr>
		<tr>
			<td>http://localhost/blog</td>
			<td>app/blog/controllers/Controller.php > index()</td>
		</tr>
		<tr>
			<td>http://localhost/blog/page2</td>
			<td>app/blog/controllers/Controller.php > page2()</td>
		</tr>
		<tr>
			<td>http://localhost/blog/other</td>
			<td>app/blog/controllers/Controller.php > other()</td>
		</tr>
		<tr>
			<td>http://localhost/blog/other/action</td>
			<td>app/blog/controllers/Other.php > action()</td>
		</tr>
	</tbody>
</table>

To add your own f3 configuration and routes add a `config.ini` file in the the root. The only configuration option this template uses is `DefaultModule`. As the name implies this option will set the default module. For example if you want to use a module called `landing` as the default module the `config.ini` file should include:

```
[globals]
DefaultModule = landing
```

**Note:** The default controller for any module will always be `Controller.php`