Register

curl -X POST http://localhost:8000/api/register \
 -H "Accept: application/json" \
 -H "Content-Type: application/json" \
 -d '{"name": "John", "email": "test@test.ie", "password": "testtest", "password_confirmation": "testtest"}'