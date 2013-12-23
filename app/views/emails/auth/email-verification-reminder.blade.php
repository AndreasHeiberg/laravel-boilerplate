<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Email verification</h2>

		<div>
			To verify your email, click this link: {{ route('verify-email', ['token' => $token, 'email' => $user->getReminderEmail()]) }}.
		</div>
	</body>
</html>