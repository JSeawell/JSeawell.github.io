<!DOCTYPE HTML>

<html>
	<head>
		<title>Jake Seawell - A Portfolio</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
        <form name="myemailform" method="post" action="email.php">
            <div class="fields">
                <div class="field half">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="" />
                </div>
                <div class="field half">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="" />
                </div>
                <div class="field">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" rows="6"></textarea>
                </div>
            </div>
            <ul class="actions special">
                <li><input type="submit" name="submit" id="submit" value="Send Message" /></li>
            </ul>
        </form>
	</body>
</html>