import requests

url = 'http://mercury.picoctf.net:53554/'

r = requests.head(url)
print(r.headers)