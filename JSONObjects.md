https://iadtprofessionalpractice.herokuapp.com/api/users
Method: GET

https://iadtprofessionalpractice.herokuapp.com/api/register
Method: POST
{
    "name": "John",
    "email": "test@test.ie",
    "password": "testtest",
    "password_confirmation": "testtest"
}
https://iadtprofessionalpractice.herokuapp.com/api/login
Method: POST
{
	"email": "test@test.ie",
	"password": "testtest"
}
https://iadtprofessionalpractice.herokuapp.com/api/logout
Method: POST
{
"api_token": "You receive this as a response when you log in"
}
