# Extension woemar/envlogin

This TYPO3 extension allows you to log in to the TYPO3 backend using credentials stored in environment variables. This is particularly useful for development environments where you may have to login very often.

## Installation

Install as dev requirement using composer, you probably do not want to use this extension in production contexts:

```bash
composer req --dev woemar/envlogin
```
## Configuration

Add the following lines to your `.env` file:
```dotenv
ENVLOGIN_USERNAME=your-username
ENVLOGIN_PASSWORD=your-password
``` 
From now on the backend login form located at /typo3 will be pre-filled with these credentials.

You still have to click the login button, but you do not have to type in your credentials anymore.